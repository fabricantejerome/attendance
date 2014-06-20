@extends('layout.master2')

@section('title')
	<title>Welcome | Events</title>
	<!--<style>
		li#event,nav#primary ul li.current-item a, nav#primary ul li a:hover {
	    	color: #F4645F;
		}
	</style>-->
@stop

@section('content')
<h1>{{ $event->event_name }}</h1>
      <div class="row row-offcanvas row-offcanvas-right">
       <div class="col-xs-12 col-sm-9 event-row">
    		<table class='table table-striped'>
    			<thead>
    			<tr>
    				<th>ID Number</th>
    				<th>Student Name</th>
    				<th>Course</th>
    			</tr>
    			</thead>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->student_name }}</td>
                    <td>{{ $student->course_name }}</td>
                    
                </tr>
                @endforeach
    		</table>
       </div>
          
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
        	<div class="jumbotron">
            	<h5>Summary</h5>
            	Attendee: {{ count($students) }}
          </div>
        </div><!--/span-->
      </div><!--/row-->
@stop