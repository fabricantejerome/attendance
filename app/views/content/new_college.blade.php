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
<h1> NEW COLLEGE</h1>
      <div class="row row-offcanvas row-offcanvas-right">
	    {{ Form::open(array('action' => 'AttendanceController@college_submit', 'class' => 'form-box')) }}
	      <label>College Name</label>
		    <input type="text" class="form-control" placeholder="COLLEGE OF XXXX" name='college_name' required>
		  
		    <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
    	{{ Form::close() }}
      </div><!--/row-->
@stop