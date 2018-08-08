<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <base href="{{env('BASE_URL')}}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style_admin.css">
  <title>StuLec Admin Area</title>
</head>
<body>
  
  <nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse p-0">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="/staff_dash_home" class="navbar-brand mr-3"><span style="color:green;font-weight: bolder;">Stu</span><span style="color:red;font-weight: bolder;">Lek</span> </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="staff_dash" class="nav-link active">Dashboard</a>
          </li>

          <li class="nav-item px-2">
            <a href="list_of_ass" class="nav-link">List Of Assignment</a>
          </li>

          <li class="nav-item px-2">
            <a href="stud_grades" class="nav-link">Student Grade</a>
          </li>

          <li class="nav-item px-2">
            <a href="reg_student" class="nav-link">Registered Students</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Welcome Brad</a>

            <div class="dropdown-menu">
              <a href="staff_profile" class="dropdown-item">
                <i class="fa fa-user-circle"></i> Profile
              </a>

              <a href="settings.html" class="dropdown-item">
                <i class="fa fa-gear"></i> Settings
              </a>
            </div>
          </li>

          <li class="nav-item">
            <a href="login.html" class="nav-link">
              <i class="fa fa-user-times"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')

  <footer id="main-footer" class="bg-inverse text-white mt-5 p-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead text-center">Copyright &copy; 2017 Blogen</p>
        </div>
      </div>
    </div>
  </footer>

  @yield('myModal')

  <script src="js/jquery.min.js"></script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>

  <script>
    CKEDITOR.replace('editor1');
  </script>
  
</body>
</html>