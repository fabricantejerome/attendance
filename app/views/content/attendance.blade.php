<!DOCTYPE html>
<html>
<head>
	<title>Welcome | Attendance</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>

	<div class="row">
		<nav id="primary">
			<div class="boxed">
				<ul>
					<li class="current-item"><a href"#">Welcome</a></li>
				</ul>
			</div>

		</nav>
		<br />
		<div class="col5">
			{{ Form::open(array('action' => 'AttendanceController@index_submit')) }}
				<h1 class="student">Name of the Student and College</h1>
				<input type="text" name="idnumber" autofocus="autofocus" class="form-control"/>
			{{ Form::close() }}
		</div>

		<footer id="foot" class="textcenter">
			<h3 id="attendance">Copyright &copy; 2014 Student Association</h3>
		</footer>
	</div>
</body>
</html>