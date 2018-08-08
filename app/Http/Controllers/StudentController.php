<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\newcoursereg;
use App\Assignment;
use Redirect;
use Session;
use DB;

class StudentController extends Controller
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

    public function stu_login(request $request)
    {
        
        return view('student.stu_login');
    }

    public function stu_dash()
    {
         $institution = Session::get('institution');

         $Assignments = DB::table('assignments')->where('institution', 'OSUSTECH')->get();
         
         return view('student.stu_dashboard', compact('Assignments'));
       // return view('student.stu_dashboard');
    }

    public function stud_grades()
    {
        return view('lecturer.stud_grades');
    }

     public function stu_dashboard()
    {
        return view('student.stu_dashboard');
    }


    public function stud_profile()
    {
        return view('student.stud_profile');
    }


    public function stud_settings()
    {
        return view('student.stud_settings');
    }


    public function stud_detail($id)
    {
         $Assignments = Assignment::find($id);

        return view('student.stud_detail', compact('Assignments'));
        //return view('student.stud_detail');
    }


    public function reg_new_lec()
    {

        $Newcourseregs = DB::table('newcourseregs')->where('matric_num', 150404075)->get();
        return view('student.reg_new_lec', compact('Newcourseregs'));
       // return view('student.reg_new_lec');
    }

     public function lec_assignment()
    {
        //$institution = Session::get('institution');

         $Submittedassignments = DB::table('submittedassignments')->where('matric_num', 150404075)->get();
         
         return view('student.lec_assignment', compact('Submittedassignments'));
        //return view('student.lec_assignment');
    }

     public function awarded_grades()
    {
        $Submittedassignments = DB::table('submittedassignments')->where('grades', !NULL)->get();
        return view('student.awarded_grades', compact('Submittedassignments'));
    }

    public function student_login(Request $request)
    {

     $this->validate($request, [
        'matric_num' => 'required' ,
        'password' => 'required' 
        ]);

        $result  = Student::where('matric_num', $request->matric_num)->where('password', $request->password)->first();

        
        if($result)
        {
            Session::put('matric_num', $request->matric_num);
            Session::put('pass', $request->password);
            Session::put('stu_firstname', $request->firstname);
            Session::put('stu_lastname', $request->lastname);
            Session::put('level', $request->level);
            Session::put('institution', $request->password);

            return redirect::to("stu_dash");

        }

        return redirect::to("stu_login");


    }

    public function student_registration(Request $request)
    {

        $this->validate($request, [
        'firstname' => 'required' ,
        'lastname' => 'required' ,
        'level' => 'required' ,
        'yes' => 'required' ,
        'matric_num' => 'required' ,
        'password' => 'required' ,
        'con_pass' => 'required' 
        ]);
        
        $user = new Student;
        $user->firstname = $request->get('firstname');
        $user->lastname=$request->get('lastname');
        $user->level=$request->get('level');
        $user->institution = $request->get('yes');
        $user->matric_num=$request->get('matric_num');
        $user->password=$request->get('password');
        $user->p_w=$request->get('con_pass');
        $user->save();
        redirect();
     // $this->validate([
     //    'matric_num' => 'required' ,
     //    'password' => 'required' 
     //    ]);

    }

     public function newcoursereg(Request $request)
    {

        // $this->validate($request, [
        // 'staff_id' => 'required' ,
        // 'institution' => 'required' ,
        // 'level' => 'required' ,
        // 'course_code' => 'required' 
        // ]);
        
        $course = new Newcoursereg;
        $course->staff_id = $request->get('staff_id');
        $course->institution=$request->get('institution');
        $course->level=$request->get('level');
        $course->course_code = $request->get('course_code');
        $course->save();
        redirect();
     // $this->validate([
     //    'matric_num' => 'required' ,
     //    'password' => 'required' 
     //    ]);


    }
}
