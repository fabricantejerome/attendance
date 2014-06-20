<!DOCTYPE html>
<html>
<head>
	@yield('title')
	<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
</head>
<body>

	<div class="row">
		<nav id="primary">
			<div class="boxed">
				<ul>
					<li id="student">{{ link_to('student', 'Students')}}</li>
					<li id="event">{{ HTML::link('/event', 'Events')}}</li>
					<li id="college"><a href"#">College</a></li>
					<li id="course"><a href"#">Course</a></li>
					<li id="logout"><a href"#">Logout</a></li>
				</ul>
			</div>

		</nav>
		@yield('content')
		<footer id="foot" class="textcenter">
			<h3 id="attendance">Copyright &copy; 2014 Student Association</h3>
		</footer>
	</div>
</body>
</html>