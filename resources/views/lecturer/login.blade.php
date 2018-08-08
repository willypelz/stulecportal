<html>
<head><title>Login|Lecturer</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/AdminLTE.css">
<link rel="stylesheet" href="css/background.css">
</head>
<body class="bg">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><span style="color: black;font-weight: bold;">Stu</span><span style="color: red;font-style: italic;font-weight: bold">Lec</span><br><h5><b>LOGIN</b>AREA</a></h5>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <center><img src="images/page2_img2.jpg" width="60" height="60" class="img-circle" alt="Cinque Terre" width="304" height="236"></center>
    <p class="login-box-msg" id="truth" style="color: ;font-size: 15px;font-weight: bolder;">WELCOME</p>
    <p class="login-box-msg" id="false"><span style="color: green;font-size: 20px;font-weight: bold;font-family: sans-serif;">Largest educational platform</span></p>

    

    <form id="login" action="staff_login" method="POST">
    {{csrf_field()}}
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="staff_id" placeholder="staff_id">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-7">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-5">
          <button type="submit" name="staff_signin" class="btn btn-primary btn-raised btn-block btn-flat">Sign In</button>
        </div>
        <span >
        <!-- /.col -->
      </div><br>
      <p style="color: red" onclick="create_account();">Create an account</p></span>
    </form>




    <form id="registration" action="staff_registration" method="POST">
    {{csrf_field()}}
    <div class="form-group has-feedback">
        <input type="text" class="form-control" name="firstname" placeholder="Firstname" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="lastname" placeholder="Lastname" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group">
        <label for="sel1"></label>
        <select class="form-control" id="sel1" name="title" required>
          <option >Title</option>
          <option value="Emeritus professor" selected="">Emeritus professor </option>
          <option value="Professor">Professor</option>
          <option value="Reader">Reader</option>
          <option value="Phd">Phd</option>
          <option value="Mr">Mr</option>
        </select>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="staff_id" placeholder="staff_id" required>
        <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" onblur="check_pass();" name="password" placeholder="Password" id="pass" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" onchange="check_pass();" name="con_pass" placeholder="confirm Password" id="con_pass" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <span id="testing" style="color: green;"></span>
      </div>
      <div class="row">
        <<!-- div class="col-xs-7">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div> -->
        <!-- /.col -->
        <div class="col-xs-5">
          <input type="submit" name="signup" value="Sign Up" class="btn btn-primary btn-raised btn-block btn-flat">
        </div>
        <span >
        <!-- /.col -->
      </div><br>
      <span style="color: red" onclick="sign_in();">Click here to <b>SIGN IN</b></span></span>
    </form>




    <script src="js/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
          $("#truth").fadeOut(2000);
          $("#false").show(12000);
          $("#registration").hide();


      });

      function create_account() {
          $("#login").hide();
          $("#registration").show();
      }

      function sign_in()  {

          $("#login").show();
          $("#registration").hide();

      }

      function check_pass() {
        var  pass = document.getElementById('pass').value;
        var  con_pass = document.getElementById('con_pass').value;
        if(pass == con_pass){
         document.getElementById('testing').innerHTML="Password matched"

         
        } else {
         document.getElementById('testing').innerHTML="<span style=\"color:red;\">Password do not match"
        }

      } 
    </script>
    
    

  </div>
  </body>
 
  </html>