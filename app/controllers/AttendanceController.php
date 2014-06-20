<?php

class AttendanceController extends BaseController{

	public function index()
	{
		return View::make('content.attendance');// using compact $tasks = 'tasks'
	}
	public function index_submit(){
		
		$student = Student::find(Input::get('idnumber'));
		if ( count($student))
			return Redirect::action('AttendanceController@index')->with('student', $student->student_name );
		else
			return Redirect::action('AttendanceController@index');
	}

	public function login()
	{
		return View::make('content.index');
	}
	public function login_submit()
	{
		return Redirect::action('AttendanceController@student');
	}

	public function student()
	{
		return View::make('content.student');
	}
	public function new_event()
	{
		return View::make('content.new_event');
	}
	public function event_submit()
	{
		$event = new Event1;
		$event->event_name	=	ucwords(Input::get('event'));
		$event->event_date	= Input::get('date');
		$event->save();

		return Redirect::action('AttendanceController@new_event');
	}

	public function new_student()
	{
		$courses = Course::all();
		return View::make('content.new_student', compact('courses'));
	}
	public function student_submit()
	{
		$data = Input::all();

		$rules = array(
			'id'	=>	array('integer')
		);

		$validator = Validator::make($data, $rules);

		if( $validator->fails() ){
			return Redirect::action('AttendanceController@new_student')->withErrors($validator);
		}
		else{
			$course = Course::find(Input::get('course'));

			$student = new Student;
			$student->id = Input::get('id');
			$student->student_name = ucwords(Input::get('name'));
			$student->course()->associate($course);
			$student->save();

			return Redirect::action('AttendanceController@new_student');
		}
	}

	public function new_course()
	{
		$colleges = College::all();
		return View::make('content.new_course', compact('colleges'));
	}
	public function course_submit()
	{
		$college = College::find(Input::get('college'));
		$course = new Course;
		$course->course_name = ucwords(Input::get('course_name'));
		$course->college()->associate($college);
		$course->save();

		return Redirect::action('AttendanceController@new_course');
	}

	public function new_college()
	{
		return View::make('content.new_college');
	}
	public function college_submit()
	{
		$college = new College;
		$college->college_name = ucwords(Input::get('college_name'));
		$college->save();
		return Redirect::action('AttendanceController@new_college');
	}

	public function events()
	{
		$events = Event1::all();
		return View::make('content.events', compact('events'));
	}


}