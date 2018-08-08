<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Staff;
use App\Assignment;
use App\Submittedassignment;
use App\Newcoursereg;
use Redirect;
use DB;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login()
    {
        return view('lecturer.login');
    }


    public function staff_login(Request $request)
    {

      $this->validate($request, [
        'staff_id' => 'required' ,
        'password' => 'required' 
        ]);

        $result  = Staff::where('staff_id', $request->staff_id)->where('password', $request->password)->first();

        
        if($result)
        {
            $Session = new Session;
            $Session->set('staff_id', $request->staff_id);
            $Session->set('password', $request->password);
            $Session->set('firstname', $request->firstname);
            $Session->set('lastname', $request->lastname);
            $Session->set('title', $request->title);
            $Session->set('password', $request->password);

            return redirect::to("staff_dash");

        }

        return redirect::to("login");


    }

    public function reg_student()
    {
        $Session = new Session;
         echo $staff_id = $Session->get('staff_id');


         $registeredStudents = DB::table('newcourseregs')->where('staff_id', $staff_id)->get();

        return view('lecturer.reg_student', compact('registeredStudents'));
    }



    public function stud_grades()
    {
        // $Gradethestudents = DB::table('newcourseregs')->where('staff_id', $staff_id)->get();

        // return view('lecturer.stud_grades', compact('Gradethestudents'));
        return view('lecturer.stud_grades');
}

    

    public function staff_dash()
    {    

         $Session = new Session;
         $staff_id = $Session->get('staff_id');

         $Submittedassignments = DB::table('submittedassignments')->where('staff_id', $staff_id)->get();
         
         return view('lecturer.staf_dashboard', compact('Submittedassignments', 'Session'));
    }
    public function list_of_ass()
    {
        return view('lecturer.list_of_ass');
    }


    


    public function staff_dash_home()
    {
        return view('lecturer.staf_dashboard');
    }

     



    public function staff_profile()
    {
         $Session = new Session;

         $staff_id = $Session->get('staff_id');

         //$Staff = Staff::find($id);

         $profiles = DB::table('staff')->where('staff_id', $staff_id)->get();
         
 
         return view('lecturer.staff_profile', compact('profiles'));

        // return view('lecturer.staff_profile');
    }


    public function update_profile(Request $request)
    {
         
         
 
         return view('lecturer.staff_profile', compact('profiles'));

        // return view('lecturer.staff_profile');
    }


    public function staff_settings()
    {
        return view('lecturer.staff_settings');
    }


    public function staff_detail(Request $request, $id)
    {    
        
         $Submittedassignments = Submittedassignment::find($id);

        return view('lecturer.staff_detail', compact('Submittedassignments'));
    }

    public function staff_registration(Request $request)
    {
        $this->validate($request, [
        'firstname' => 'required' ,
        'lastname' => 'required' ,
        'title' => 'required' ,
        'staff_id' => 'required' ,
        'password' => 'required' ,
        'con_pass' => 'required' 
        ]);
        
        $staff = new Staff;

        $staff->firstname = $request->get('firstname');
        $staff->lastname=$request->get('lastname');
        $staff->title=$request->get('title');
        $staff->staff_id = $request->get('staff_id');
        $staff->password=$request->get('password');
        // $staff->p_w=$request->get('con_pass');
        $staff->save();
        redirect();
     


    }

    public function grading_system(Request $request)
    {
        $this->validate($request, [
        'grades' => 'required' 
        ]);
        
        $grade = new Submittedassignment;

        
     


    }

    public function dispatch_ass(Request $request)
    {
        $this->validate($request, [
        'staff_id' => 'required' ,
        'institution' => 'required' ,
        'level' => 'required' ,
        'course_code' => 'required' ,
        'ass_question' => 'required'
        ]);

        $ass = new Assignment;

        // if($request->hasfile('ass_upload'))
        // {
        //      $file = $request->file('ass_upload');
        //     $name = time().'.'.$file->getClientOriginalName();
        //     $file->move(public_path().'/images/', $name);
            
        //  }
         $image = $request->file('ass_upload');
         if ($image->isValid())
         {
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $imageName);
         }

        

        $ass->staff_id = $request->get('staff_id');
        $ass->institution=$request->get('institution');
        $ass->level=$request->get('level');
        $ass->course_code = $request->get('course_code');
        $ass->ass_question=$request->get('ass_question');
        $ass->remark=$request->get('remark');
        $ass->image=$imageName;
        return $request->all();
        
       // $ass->save();
     


    }

}
