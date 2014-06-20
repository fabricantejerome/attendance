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
	      <form class="form-box" role="form" action="new_student.php" method='get'>
	      <label>ID Number</label>
    		<input type="text" class="form-control" placeholder="20XXXXX" name='id' required autofocus>
	      <label>Full Name</label>
		    <input type="text" class="form-control" placeholder="Dela Cruz, John Michael M." name='name' required>
	      <label>Course</label>
	      
		  <select  class="form-control" name=course_id>
		  </select>
		  
		  
		    <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
    	</form>
      </div><!--/row-->
@stop