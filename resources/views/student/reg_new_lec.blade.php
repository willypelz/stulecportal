@extends('layouts.stu_dash_header')

@section('content')
  
	 <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <i class="fa fa-users"></i> Course Registered
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
          <a class="btn btn-primary btn-block" href="#" data-toggle="modal" data-target="#addPostModal">
            <i class="fa fa-plus"></i> Assignment
          </a>
        </div>
        <div class="col-md-3">
          <a class="btn btn-success btn-block" href="#" data-toggle="modal" data-target="#addCategoryModal">
            <i class="fa fa-plus"></i> Submitted
          </a>
        </div>
        <div class="col-md-3">  
          <a class="btn btn-warning btn-block" href="#" data-toggle="modal" data-target="#addUserModal">
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
              <h4>Register List</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>Staff ID</th>
                  <th>Course code</th>
                  <th>Registration date</th>
                </tr>
              </thead>
              <tbody>
              @foreach($Newcourseregs as $newcoursereg)
                <tr>
                  <td scope="row">{{$newcoursereg->staff_id}}</td>
                  <td>{{$newcoursereg->course_code}}</td>
                  <td>{{$newcoursereg->created_at}}</td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center card-primary text-white mb-3">
            <div class="card-block">
              <h3>Posts</h3>
              <h1 class="display-4"><i class="fa fa-pencil"></i> 6</h1>
              <a href="posts.html" class="btn btn-sm btn-outline-secondary text-white">View</a>
            </div>
          </div>

          <div class="card text-center card-success text-white mb-3">
            <div class="card-block">
              <h3>Categories</h3>
              <h1 class="display-4"><i class="fa fa-folder-open-o"></i> 4</h1>
              <a href="categories.html" class="btn btn-sm btn-outline-secondary text-white">View</a>
            </div>
          </div>

          <div class="card text-center card-warning text-white mb-3">
            <div class="card-block">
              <h3>Users</h3>
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

  <div class="modal fade" id="addPostModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="addPostModalLabel">Add Post</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form action="">
            <div class="form-group">
              <label for="title" class="form-control-label">Title</label>
              <input type="text" class="form-control">
            </div>

            <div class="form-group">
              <label for="title" class="form-control-label">Category</label>
              <select class="form-control">
                <option value="">Web Development</option>
                <option value="">Tech Gadgets</option>
                <option value="">Business</option>
                <option value="">Health & Wellness</option>
              </select>
            </div>

            <div class="form-group bg-faded p-3">
              <label for="file">Image Upload</label>
              <input type="file" class="form-control-file" id="file">
              <small id="fileHelp" class="form-text text-nuted">Max Size 3MB</small>
            </div>
            <div class="form-group">
              <label for="body">Body</label>
              <textarea name="editor1" class="form-control"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn btn-primary">Add Post</button>
        </div>
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


