@extends('layouts.stu_dash_header')

@section('content')
  
	 <header id="main-header" class="py-2 bg-warning text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <i class="fa fa-gear"></i> Grades
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
              <input type="text" class="form-control" placeholder="Search users...">
              <span class="input-group-btn">
                <button class="btn btn-warning">Search</button>
              </span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- POSTS -->

  <section id="users">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>My Grades</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>id</th>
                  <th>staff_id</th>
                  <th>course code</th>
                  <th>grade</th>
                  <th></th>
                </tr>
              </thead>
              @foreach($Submittedassignments as $submittedassignment)
                <tr>
                  <th>{{$submittedassignment->id}}</th>
                  <th>{{$submittedassignment->staff_id}}</th>
                  <th>{{$submittedassignment->course_code}}</th>
                  <th>{{$submittedassignment->grades}}</th>
                </tr>
              </thead>
              <tbody>
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


