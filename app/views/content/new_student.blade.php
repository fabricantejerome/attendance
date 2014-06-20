@extends('layout.master2')

@section('title')
	<title>New Student</title>
	<!--<style>
		li#event,nav#primary ul li.current-item a, nav#primary ul li a:hover {
	    	color: #F4645F;
		}
	</style>-->
@stop

@section('content')
	<h1>NEW STUDENT</h1>
      <div class="row row-offcanvas row-offcanvas-right">
	    {{ Form::open(array('action' => 'AttendanceController@student_submit', 'class' => 'form-box')) }}
	      <label>Course Name</label>
		      <label for="id">ID Number</label>
	    		<input type="text" class="form-control" placeholder="20XXXXX" name='id' required autofocus>
		      <label for="name">Full Name</label>
			    <input type="text" class="form-control" placeholder="Dela Cruz, John Michael M." name="name" required>
		      <label>Course</label>
		      
			  <select  class="form-control" name="course">
			  		@foreach( $courses as $course)
			  			<option value="{{ $course->id }}">{{ $course->course_name }}</option>
			  		@endforeach
			  </select>
			  
			  
			    <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
    	{{ Form::close() }}
      </div><!--/row-->
@stop