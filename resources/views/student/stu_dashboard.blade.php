@extends('layouts.stu_dash_header')

@section('content')
  

	 <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <i class="fa fa-gear"></i> Dashboard
          </h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->

  <section id="actions" class="py-4 mb-4 bg-faded">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a class="btn btn-primary btn-block" href="#" data-toggle="modal" data-target="#newRegistrationModal">
            <i class="fa fa-plus"></i>New Registration
          </a>
        </div>
        <div class="col-md-3">
          <a class="btn btn-success btn-block" href="#" data-toggle="modal" data-target="#addCategoryModal">
            <i class="fa fa-plus"></i> Submitted
          </a>
        </div>
        <div class="col-md-3">  
          <a class="btn btn-warning btn-block" href="reg_student" data-toggle="modal" data-target="#addUserModal">
            <i class="fa fa-plus"></i> Registration Lists
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- POSTS -->

  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              <h4>Recents Assignments</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th>Staff ID</th>
                  <th>Course code</th>
                  <th>Assignments</th>
                  <th>File</th>
                  <th>Created at</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              @foreach($Assignments as $assignment)
                <tr>
                  <td scope="row">{{$assignment->id}}</td>
                  <td>{{$assignment->staff_id}}</td>
                  <td>{{$assignment->course_code}}</td>
                  <td>{{$assignment->ass_question}}</td>
                  <td>{{$assignment->ass_upload}}</td>
                  <td>{{$assignment->created_at }}</td>
                  <td><a href="stud_detail/{{$assignment->id}}" class="btn btn-secondary"><i class="fa fa-angle-double-right"></i> Details</a></td>
                </tr>

               @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center card-primary text-white mb-3">
            <div class="card-block">
              <h3>Unviewed Assignment</h3>
              <h1 class="display-4"><i class="fa fa-pencil"></i> 6</h1>
              <a href="posts.html" class="btn btn-sm btn-outline-secondary text-white">View</a>
            </div>
          </div>

          <div class="card text-center card-success text-white mb-3">
            <div class="card-block">
              <h3>Messages</h3>
              <h1 class="display-4"><i class="fa fa-folder-open-o"></i> 4</h1>
              <a href="categories.html" class="btn btn-sm btn-outline-secondary text-white">View</a>
            </div>
          </div>

          <div class="card text-center card-warning text-white mb-3">
            <div class="card-block">
              <h3>Forum</h3>
              <h1 class="display-4"><i class="fa fa-users"></i> 6</h1>
              <a href="users.html" class="btn btn-sm btn-outline-secondary text-white">View</a>
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

  <div class="modal fade" id="newRegistrationModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="addPostModalLabel">Register Under New Lecturer</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form action="newcoursereg" method="POST">
         {{csrf_field()}}
            <div class="form-group">
              <label for="title" class="form-control-label">Lecturer ID</label>
              <input type="" class="form-control" name="staff_id" >
            </div>

            <div class="form-group">
              <label for="institution" class="form-control-label" >Institution</label>
              <select class="form-control" name="institution">
                <option>SELECT INSTITUTION</option>
                <option value="AAUA">Adekunle Ajasiin univ akoko</option>
                <option value="OSUSTECH">Ondo State Univ of Sci and Tech</option>
                <option value="FUTA">Federal univ of sci and Tech</option>
              </select>
            </div>

            <div class="form-group">
              <label for="level" class="form-control-label" >Level</label>
              <select class="form-control" name="level">
                <option>SELECT LEVEL</option>
                <option value="AAUA">100</option>
                <option value="OSUSTECH">200</option>
                <option value="FUTA">300</option>
                <option value="OSUSTECH">400</option>
                <option value="FUTA">500</option>
                <option value="FUTA">Carryover</option>
              </select>
            </div>

            <div class="form-group">
              <label for="title" class="form-control-label">COURSE CODE</label>
              <input type="text" class="form-control" name="course_code" placeholder="e.g EEE101">
            </div>
          
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Register</button>
        </div></form>
      </div>
    </div>
  </div>

  <!-- ADD CATEGORY MODAL -->

  <div class="modal fade" id="addCategoryModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title" id="addCategoryModalLabel">Add Category</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="title" class="form-control-label">Title</label>
              <input type="text" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn btn-success">Add Category</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ADD USER MODAL -->

  <div class="modal fade" id="addUserModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-warning text-white">
          <h5 class="modal-title" id="addUserModalLabel">Add User</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="name" class="form-control-label">Name</label>
              <input type="text" class="form-control">
            </div>

            <div class="form-group">
              <label for="email" class="form-control-label">Email</label>
              <input type="text" class="form-control">
            </div>

            <div class="form-group">
              <label for="password" class="form-control-label">Password</label>
              <input type="text" class="form-control">
            </div>

            <div class="form-group">
              <label for="password" class="form-control-label">Confirm Password</label>
              <input type="text" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-warning" data-dismiss="modal">Close</button>
          <button class="btn btn-success">Add User</button>
        </div>
      </div>
    </div>
  </div>
  

@endsection
<!--==============================
              footer
=================================-->


