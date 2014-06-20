@extends('layout.master2')

@section('title')
	<title>New Course</title>
	<!--<style>
		li#event,nav#primary ul li.current-item a, nav#primary ul li a:hover {
	    	color: #F4645F;
		}
	</style>-->
@stop

@section('content')
<h1> NEW COURSE</h1>
      <div class="row row-offcanvas row-offcanvas-right">
	    {{ Form::open(array('action' => 'AttendanceController@course_submit', 'class' => 'form-box')) }}
	      <label>Course Name</label>
		    <input type="text" class="form-control" placeholder="Bachelor of XXXX in XXXX" name='course_name' required>
	      <label>College ID</label>
		  <select  class="form-control" name="college">
		  		@foreach( $colleges as $college)
		  			<option value="{{ $college->id }}">{{ $college->college_name }}</option>
		  		@endforeach
		  </select>
		  
		    <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
    	{{ Form::close() }}
      </div><!--/row-->
@stop