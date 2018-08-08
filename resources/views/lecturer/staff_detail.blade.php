@extends('layouts.dash_header')

@section('content')
  
	  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            Update Assignment
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
          <a href="staff_dash" class="btn btn-secondary btn-block"><i class="fa fa-arrow-left"></i> Back To Dashboard</a>
        </div>
        <div class="col-md-3">
          <a href="index.html" class="btn btn-success btn-block"><i class="fa fa-check"></i> Save Changes</a>
        </div>
        <div class="col-md-3">
          <a href="index.html" class="btn btn-danger btn-block"><i class="fa fa-remove"></i> Delete Assignment</a>
        </div>
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
              <h4>Ass details</h4>
            </div>
            <div class="card-block">
            <form action="grading_system" method="POST">
              <div class="form-group">
                <label for="title" class="form-control-label" value="Post One">Title</label>
                <input type="text" class="form-control" name="title" value="{{ $Submittedassignments->title }}" readonly>
              </div>

              <div class="form-group">
                <label for="title" class="form-control-label" value="Post One">Matri number</label>
                <input type="text" class="form-control" name="matric_num" value="{{ $Submittedassignments->matric_num }}" readonly>
              </div>

              <div class="form-group">
                <label for="title" class="form-control-label" value="Post One">Title</label>
                <input type="text" class="form-control" name="institution" value="{{ $Submittedassignments->institution }}" readonly>
              </div>

              <div class="form-group">
                <label for="title" class="form-control-label" value="Post One">Title</label>
                <input type="text" class="form-control" name="level" value="{{ $Submittedassignments->level }}" readonly>
              </div>

              <div class="form-group">
                <label for="title" class="form-control-label" value="Post One">Course Code</label>
                <input type="text" class="form-control" name="course_code" value="{{ $Submittedassignments->course_code }}" readonly>
              </div>

              <div class="form-group">
                <label for="title" class="form-control-label" value="Post One">Title</label>
                <input type="text" class="form-control" value="{{ $Submittedassignments->title }}" readonly>
              </div>

          
              <div class="form-group">
                <label for="body">Body</label>
                <textarea name="editor1" class="form-control" >{{ $Submittedassignments->ass_upload }}</textarea>
              </div>

              <div class="form-group">
                <label for="title" class="form-control-label" value="Post One">Grade</label>
                <input type="text" class="form-control" name="grades" value="{{ $Submittedassignments->grades }}" required>
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


