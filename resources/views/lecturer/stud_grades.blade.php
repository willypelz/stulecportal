@extends('layouts.dash_header')

@section('content')
  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <i class="fa fa-pencil"></i> Student Grades
          </h1>
        </div>
      </div>
    </div>
  </header>
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
              <h4>STUDENTS GEADES</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Date Posted</th>
                </tr>
              </thead>
              <tbody>
              <!-- @foreach($Assignments as $assignment) -->
                <tr>
                  <td scope="row">1</td>
                  <td>Web Development</td>
                  <td>July 11, 2017</td>
                </tr>
              <!-- @endforeach -->
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


