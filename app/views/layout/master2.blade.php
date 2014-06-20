<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/offcanvas/ -->
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        @yield('title')

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="{{ asset('css/offcanvas.css') }}" />
    </head>
    <body>
        <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <!--<a href="//laravel.com"><img src="logo-head.png" alt="Laravel"></a>-->
              <a class="navbar-brand" href="#">SA Acquaintance Attendance</a>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li  class="dropdown"><a href="#" data-toggle="dropdown">EVENTS</a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        <li >{{ link_to('/events', 'EVENT LIST')}}</li>
                        <li >{{ link_to('/new/event', 'NEW EVENT')}}</li>
                    </ul>
                </li>
                <li  class="dropdown"><a href="#" data-toggle="dropdown">NEW</a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        <li >{{ link_to('/new/student', 'STUDENT')}}</li>
                        <li >{{ link_to('/new/course', 'COURSE')}}</li>
                        <li >{{ link_to('/new/college', 'COLLEGE')}}</li>
                    </ul>
                </li>
                <li><a href="#">LOGOUT</a></li>
                
              </ul>
              <!-- /.nav-collapse -->
            
        
          </div><!-- /.container -->
          </div><!-- /.container -->
        </div><!-- /.navbar -->

        <div class="container">

            @yield('content')
          <hr>
          <footer>
            <p>© Company 2014</p>
          </footer>

        </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/offcanvas.js') }}"></script>

    </body>
</html>