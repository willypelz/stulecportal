@extends('layouts.stu_dash_header')

@section('content')
  
	  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <i class="fa fa-user"></i> Profile
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
          <a href="index.html" class="btn btn-secondary btn-block"><i class="fa fa-arrow-left"></i> Back To Dashboard</a>
        </div>
        <div class="col-md-3">
          <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#passwordModal"><i class="fa fa-lock"></i> Change Password</a>
        </div>
        <div class="col-md-3">
          <a href="index.html" class="btn btn-danger btn-block"><i class="fa fa-remove"></i> Delete Account</a>
        </div>
      </div>
    </div>
  </section>

  <!-- EDIT PROFILE -->

  <section id="edit-post">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              <h4>Edit Profile</h4>
            </div>
            <div class="card-block">
            <form>
              <div class="form-group">
                <label for="title" class="form-control-label" >Name</label>
                <input type="text" class="form-control" value="Brad Marks">
              </div>

              <div class="form-group">
                <label for="email" class="form-control-label">Email</label>
                <input type="text" class="form-control" value="brad@gmail.com">
              </div>

              <div class="form-group">
                <label for="body">Bio</label>
                <textarea name="editor1" class="form-control">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed aperiam quam labore praesentium fugit facilis numquam delectus officia ratione tempore nisi veritatis, quos ducimus laboriosam modi commodi velit deleniti rerum neque fugiat voluptate? Tempore, laborum deleniti dolores rem dolore quos.</textarea>
              </div>
            </form>
            </div>
            
          </div>
        </div>

        <div class="col-md-3">
          <h3>Your Avatar</h3>
          <img src="images/avatar.png" alt="" class="d-block img-fluid mb-3">
          <button class="btn btn-primary btn-block">Edit Image</button>
          <button class="btn btn-danger btn-block">Delete Image</button>
        </div>
      </div>
    </div>
  </section>



  <!-- FOOTER -->

  <footer id="main-footer" class="bg-inverse text-white mt-5 p-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead text-center">Copyright &copy; 2017 Blogen</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- PASSWORD MODAL -->

  <div class="modal fade" id="passwordModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-warning text-white">
          <h5 class="modal-title" id="passwordModalLabel">Edit Password</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form>
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
          <button class="btn btn-success">Edit Password</button>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
@endsection

@section('myModal')
  
   <!-- ADD POST MODAL -->

  
  

@endsection
<!--==============================
              footer
=================================-->


