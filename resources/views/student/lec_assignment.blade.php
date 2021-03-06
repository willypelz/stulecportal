@extends('layouts.stu_dash_header')

@section('content')
  
	 <header id="main-header" class="py-2 bg-success text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <i class="fa fa-folder-open-o"></i> Assignment
          </h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->

  <section id="actions" class="py-4 mb-4 bg-faded">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-6">
          <div class="input-group">
              <input type="text" class="form-control" placeholder="Search categories...">
              <span class="input-group-btn">
                <button class="btn btn-success">Search</button>
              </span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- POSTS -->

  <section id="categories">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Submitted Assignments</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>Staff id</th>
                  <th>Course Code</th>
                  <th>assignment question</th>
                  <th>assignment Answer</th>
                </tr>
              </thead>
              <tbody>
              @foreach($Submittedassignments as $submittedassignments)
                <tr>
                  <td scope="row">{{$submittedassignments->staff_id}}</td>
                  <td>{{$submittedassignments->course_code}}</td>
                  <td>{{$submittedassignments->ass_question_id}}</td>
                  <td>{{$submittedassignments->ass_upload}}</td>
                </tr>
              @endforeach
              </tbody>
            </table>

            <nav class="ml-4">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a href="#" class="page-link">Previous</a>
                </li>

                <li class="page-item active">
                  <a href="#" class="page-link">1</a>
                </li>

                <li class="page-item">
                  <a href="#" class="page-link">2</a>
                </li>

                <li class="page-item">
                  <a href="#" class="page-link">3</a>
                </li>

                <li class="page-item">
                  <a href="#" class="page-link">Next</a>
                </li>
              </ul>
            </nav>
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


