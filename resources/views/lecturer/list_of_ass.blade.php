@extends('layouts.dash_header')

@section('content')
  
  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <i class="fa fa-pencil"></i> Assignment Lists
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
              <input type="text" class="form-control" placeholder="Search posts...">
              <span class="input-group-btn">
                <button class="btn btn-primary">Search</button>
              </span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- POSTS -->

  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>DISPATCHED ASSIGNMENTS</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Date Posted</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">1</td>
                  <td>Post One</td>
                  <td>Web Development</td>
                  <td>July 11, 2017</td>
                  <td><a href="details.html" class="btn btn-secondary"><i class="fa fa-angle-double-right"></i> Details</a></td>
                </tr>

                <tr>
                  <td scope="row">2</td>
                  <td>Post Two</td>
                  <td>Web Development</td>
                  <td>July 11, 2017</td>
                  <td><a href="details.html" class="btn btn-secondary"><i class="fa fa-angle-double-right"></i> Details</a></td>
                </tr>

                <tr>
                  <td scope="row">3</td>
                  <td>Post Three</td>
                  <td>Tech Gadgets</td>
                  <td>July 12, 2017</td>
                  <td><a href="details.html" class="btn btn-secondary"><i class="fa fa-angle-double-right"></i> Details</a></td>
                </tr>

                <tr>
                  <td scope="row">4</td>
                  <td>Post Four</td>
                  <td>Health & Wellness</td>
                  <td>July 13, 2017</td>
                  <td><a href="details.html" class="btn btn-secondary"><i class="fa fa-angle-double-right"></i> Details</a></td>
                </tr>

                <tr>
                  <td scope="row">5</td>
                  <td>Post Five</td>
                  <td>Web Development</td>
                  <td>July 14, 2017</td>
                  <td><a href="details.html" class="btn btn-secondary"><i class="fa fa-angle-double-right"></i> Details</a></td>
                </tr>

                <tr>
                  <td scope="row">6</td>
                  <td>Post Six</td>
                  <td>Business</td>
                  <td>July 14, 2017</td>
                  <td><a href="details.html" class="btn btn-secondary"><i class="fa fa-angle-double-right"></i> Details</a></td>
                </tr>
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


