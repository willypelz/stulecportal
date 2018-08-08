<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<meta name="format-detection" content="telephone=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <div id="app">
        <body class="page1" id="top">
<!--==============================
              header
=================================-->
        <header>
          <div class="container">
            <div class="row">
              <div class="grid_12 rel">
                <h1>
                  <a href="#">
                    <img src="images/logo.png" alt="Logo alt">
                  </a>
                </h1>
                 <div class="panel-body">
                    
                </div>
              </div>
            </div>
          </div>
          <section id="stuck_container">
          <!--==============================
                      Stuck menu
          =================================-->
            <div class="container">
              <div class="row">
                <div class="grid_12 ">
                  <div class="navigation ">
                    <nav>
                      <ul class="sf-menu">
                       <li class="current"><a href="home">Home</a></li>

                       <li><a href="stu_login">Student</a></li>
                       <li><a href="login">Staff</a></li>
                       <li><a href="about">About</a></li>
                       <li><a href="blog">Blog</a></li>
                       <li><a href="contact">Contacts</a></li>
                       
                     </ul>
                    </nav>
                    <div class="clear"></div>
                  </div>       
                 <div class="clear"></div>  
                </div>
             </div> 
            </div> 
          </section>
          <section class="page1_header">
          

        @yield('content')
    </div>
    <footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12"> 
        <div class="copyright"><span class="brand">StuLek</span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
          <div class="sub-copy">Website designed by <a href="#" rel="nofollow">StuLec.com</a></div>
        </div>
      </div>
    </div>
  </div>  
</footer>
    <a href="#" id="toTop" class="fa fa-chevron-up"></a>
    

    <!-- Scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/script.js"></script> 
    <script src="js/superfish.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/tmStickUp.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
<script src="js/TMForm.js"></script>
<script src="js/modal.js"></script>
    <script>
     $(window).load(function(){
      $().UItoTop({ easingType: 'easeOutQuart' });
      $('#stuck_container').tmStickUp({});  
     }); 
    </script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>

