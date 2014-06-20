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
<h1> EVENTS</h1>
      <div class="row row-offcanvas row-offcanvas-right">
       <div class="col-xs-12 col-sm-9 event-row">
       		@foreach( $events as $event)
       			<div class="event-box">
       				<h4>{{ $event->event_name }}</h4>
       				<p>{{ date("M d, Y",strtotime($event->event_date)) }}</p>
       			</div>
       		@endforeach
       </div>
          
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
        	<div class="jumbotron">
	    		<form class="search" role="form" action="new_student.php" method='get'>
	      		<label>Search</label>
    			<input type="text" class="form-control" placeholder="Search" name='search' required autofocus>
          </div>
        </div><!--/span-->
      </div><!--/row-->
@stop