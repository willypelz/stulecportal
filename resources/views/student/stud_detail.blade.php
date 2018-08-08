@extends('layouts.stu_dash_header')

@section('content')
  
	  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            Assignment Details and Upload
          </h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->

  <section id="actions" class="py-4 mb-4 bg-faded">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mr-auto">
          <a href="stu_dash" class="btn btn-secondary btn-block"><i class="fa fa-arrow-left"></i> Back To Dashboard</a>
        </div>
        <div class="col-md-3">
          <a href="index.html" class="btn btn-success btn-block"><i class="fa fa-check"></i> Save Changes</a>
        </div>
        <!-- <div class="col-md-3">
          <a href="index.html" class="btn btn-danger btn-block"><i class="fa fa-remove"></i> Delete Post</a>
         --></div>
      </div>
    </div>
  </section>

  <!-- POST EDIT -->

  <section id="edit-post">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Upload assignment</h4>
            </div>
            <div class="card-block">
            <form action="grading_system" method="POST">
              {{csrf_field()}}
              <div class="form-group">
                <label for="title" class="form-control-label" value="Post One">Title</label>
                <input type="text" class="form-control" name="title" value="{{ $Assignments->staff_id }}" readonly>
              </div>

              <div class="form-group">
                <label for="title" class="form-control-label" value="Post One">Matric number </label>
                <input type="text" class="form-control" name="matric_num" value="{{session()->pull('matric_num')}}" readonly>
              </div>

              <div class="form-group">
                <label for="title" class="form-control-label" value="Post One">Institution</label>
                <input type="text" class="form-control" name="institution" value="{{ $Assignments->institution }}" readonly>
              </div>

              <div class="form-group">
                <label for="title" class="form-control-label" value="Post One">Level</label>
                <input type="text" class="form-control" name="level" value="{{ $Assignments->level }}" readonly>
              </div>

              <div class="form-group">
                <label for="title" class="form-control-label" value="Post One">Course Code</label>
                <input type="text" class="form-control" name="course_code" value="{{ $Assignments->course_code }}" readonly>
              </div>

              <div class="form-group">
                <label for="title" class="form-control-label" value="Post One">ASSIGNMENT question UPLOAD</label><br>
                <img src="{{ $Assignments->ass_upload }}" width="300px" height="300px" download>
                <!-- <input type="text" class="form-control" value="{{ $Assignments->ass_upload }}" readonly> -->
              </div>

          
              <div class="form-group">
                <label for="body">QUESTION(S)</label>
                <textarea name="editor1" class="form-control" >{{ $Assignments->ass_question }}</textarea>
              </div>
              <button class="btn btn-success" >Assignment Grade</button>
            </form>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- FOOTER -->
@endsection

@section('myModal')
  
   <!-- ADD POST MODAL -->

  
  

@endsection
<!--==============================
              footer
=================================-->


