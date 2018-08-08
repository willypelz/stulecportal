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
            <form action="update_profile" method="POST"> 
            {{csrf_field()}}
            @foreach ($profiles as $profile)
              <div class="form-group">
                <label for="title" class="form-control-label" >Firstname</label>
                <input type="text" class="form-control" value="{{ $profile->id }}">
              </div>
              <div class="form-group">
                <label for="title" class="form-control-label" >Lastname</label>
                <input type="text" class="form-control" value="{{ $profile->lastname }}">
              </div>
              <div class="form-group">
                <label for="title" class="form-control-label" >Firstname</label>
                <input type="text" class="form-control" value="{{ $profile->firstname }}">
              </div>
              <div class="form-group">
              <label for="title" class="form-control-label" >title</label>
              <select class="form-control" name="institution">
                <option value="if({{ $profile->title }} == 'Mr') echo selected">Mr</option>
                <option value="if({{ $profile->title }} == 'Phd') echo selected">Dr</option>
                <option value="if({{ $profile->title }} == 'Reader') echo selected">Reader</option>
                <option value="if({{ $profile->title }} == 'prof') echo selected">Professor</option>
                <option value="if({{ $profile->title }} == 'Emeritus Professor') echo selected">Professor Emeritus</option>
              </select>
            </div>

              <div class="form-group">
                <label for="title" class="form-control-label" >Staff ID</label>
                <input type="text" class="form-control" value="{{ $profile->staff_id }}">
              </div>




              <div class="form-group">
                <label for="email" class="form-control-label">Email</label>
                <input type="text" class="form-control" value="{{ $profile->email }}">
              </div>

              <div class="form-group">
                <label for="body">Bio</label>
                <textarea name="editor1" class="form-control">More about you</textarea>
              </div>
              @endforeach
              <input type="submit" name="update_account" value="Update Account" class="btb btn-success">
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


