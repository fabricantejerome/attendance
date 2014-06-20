@extends('layout.master2')

@section('title')
	<title>New Events</title>
	<!--<style>
		li#event,nav#primary ul li.current-item a, nav#primary ul li a:hover {
	    	color: #F4645F;
		}
	</style>-->
@stop

@section('content')
    <h1> NEW EVENT</h1>
        <div class="row row-offcanvas row-offcanvas-right">
            {{ Form::open(array('action' => 'AttendanceController@event_submit', 'class' => 'form-box')) }}
              	<label>Event Name</label>
                <input type="text" class="form-control" placeholder="College Acquaintance" name='event' required autofocus>
              	<label>Date</label>
                <input type="date" class="form-control" placeholder="YYYY-MM-DD" name='date' required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
            {{ Form::close() }}
        </div><!--/row-->
@stop