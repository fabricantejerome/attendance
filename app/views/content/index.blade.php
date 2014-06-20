<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->

    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
   <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>
<body>

    <div class="container">
        <div class="flat-form">
            <div id="login" class="form-action">
                <h1>Login</h1>
                {{ Form::open(array('action' => 'AttendanceController@login_submit')) }}
                        <input type="text" name="user" placeholder="Username" />
                        <input type="password" name="password" placeholder="Password" />
                        <input type="submit" value="Login" class="button" />
                    <br />
                {{ Form::close() }}
            </div>
        </div>
    </div>
</body>
</html>


