@extends('layouts.dash_header')

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
          <a class="btn btn-primary btn-block" href="#" data-toggle="modal" data-target="#addAssignmenttModal">
            <i class="fa fa-plus"></i> Dispatch Assignment
          </a>
        </div>
        <div class="col-md-3">
          <a class="btn btn-success btn-block" href="#" data-toggle="modal" data-target="#addCategoryModal">
            <i class="fa fa-plus"></i> Grades
          </a>
        </div>
        <div class="col-md-3">  
          <a class="btn btn-warning btn-block" href="reg_student" >
            <i class="fa fa-plus"></i> Registered Students
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
              <h4>submitted assignments</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th>Matric number</th>
                  <th>title</th>
                  <th>Date Posted</th>

                  <th></th>
                </tr>
              </thead>
              <tbody>
              @foreach($Submittedassignments as $Submittedassignment)
                <tr>
                  <td scope="row">{{$Submittedassignment->id}}</td>
                  <td>{{ $Submittedassignment->matric_num }}</td>
                  <td>{{ $Submittedassignment->title   }}</td>
                  <td>{{  $Submittedassignment->created_at }}</td>
                  <td><a href="staff_detail/{{$Submittedassignment->id}}" class="btn btn-secondary"><i class="fa fa-angle-double-right"></i> Details</a></td>
                </tr>

                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center card-primary text-white mb-3">
            <div class="card-block">
              <h3>Unmarked Assignment</h3>
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

  <div class="modal fade" id="addAssignmenttModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="addPostModalLabel">Dispatch New Assignment</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form action="dispatch_ass" method="POST" enctype="multipart/form-data "/>
          {{csrf_field()}}
            <div class="form-group">
              <label for="title" class="form-control-label"></label>
              <input type="hidden" class="form-control" name="staff_id" value="{{ $Session->get('staff_id')}}">
            </div>

            <div class="form-group">
              <label for="title" class="form-control-label" >INSTITUTION</label>
              <select class="form-control" name="institution">
                <option value="OSUSTECH">Ondo State Univ of SCI and Tech</option>
                <option value="FUTA">Federal univ of Sci and Tech</option>
                <option value="AAUA">Adekunle university Akungba Akoko</option>
              </select>
            </div>

            <div class="form-group">
              <label for="title" class="form-control-label">Level</label>
              <select class="form-control"  name="level" >
                <option value="100">100L</option>
                <option value="200">200L</option>
                <option value="300">300L</option>
                <option value="400">400L</option>
                <option value="500">500</option>
              </select>
            </div>

            <div class="form-group">
              <label for="title" class="form-control-label">COURSE CODE</label>
              <input type="text" class="form-control" placeholder="e.g CSC301 " name="course_code">
            </div>

            <div class="form-group">
              <label for="body">QUESTION</label>
              <textarea class="form-control" name="ass_question" placeholder="e.g what is science?"></textarea>
            </div>

            <div class="form-group bg-faded p-3">
              <label for="file">File Upload</label>
              <input type="file" class="form-control-file" name="ass_upload">
              <small id="fileHelp" class="form-text text-nuted">Max Size 3MB</small>
            </div>
            <div class="form-group">
              <label for="body">Remark</label>
              <textarea name="editor1" class="form-control" name="remark"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="dispatch">Dispatch</button>
        </div>
      </div>
    </div>
  </div>
</form>

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


