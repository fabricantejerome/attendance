@extends('layout.master')

@section('title')
	<title>Students</title>
	<style>
		li#student,nav#primary ul li.current-item a, nav#primary ul li a:hover {
	    	color: #F4645F;
		}
	</style>
@stop

@section('content')
	<div class="content">
		<div class="col5">
			<form>
				<label for="idnumber">ID Number</label>
				<input type="text" name="idnumber" class="student"/>
				<label for="idnumber">Full Name</label>&nbsp;
				<input type="text" name="fullname" class="student" />
				<label for="course">Course&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<select name="course">
						<option>Test</option>
						<option>Test1</option>
						<option>Test2</option>
						<option>Test3</option>
					</select>
				</label>

			</form>
		</div>
	</div>
@stop