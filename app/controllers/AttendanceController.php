<?php

class AttendanceController extends BaseController{

	public function index()
	{
		return View::make('content.attendance');// using compact $tasks = 'tasks'
	}
	public function index_submit(){
		date_default_timezone_set('Asia/Manila');

		$student = Student::find(Input::get('idnumber'));
		if ( count($student)){
			$events = DB::table('events')
				->orderBy('id', 'desc')
				->take(1)
				->select('id')
				->get();

			foreach( $events as $event ){
				$check = DB::table('attendances')
					->where('attendances.event_id', '=', $event->id)
					->where('attendances.student_id', '=', $student->id)
					->get();

				if ( count($check) ){

					return Redirect::action('AttendanceController@index')->with('student', $student->student_name );
				}
				else{
					$now = new DateTime();
					//return $now->format('h:i:s A');
					$event1 = Event1::find($event->id);

					$attendance = new Attendance;
					$attendance->event()->associate($event1);
					$attendance->student()->associate($student);
					$attendance->time = $now->format('G:i:s');
					$attendance->save();

					return Redirect::action('AttendanceController@index')->with('student', $student->student_name );
				}	
			}
			return Redirect::action('AttendanceController@index')->with('student', $student->student_name );
		}
		else{
			return Redirect::action('AttendanceController@index');
		}
		
	}
	public function events_view($id){
		$event = Event1::find($id);

		$students = DB::table('attendances')
			->where('attendances.event_id', '=', $id)
			->join('students', 'attendances.student_id', '=', 'students.id')
			->join('courses', 'students.course_id', '=', 'courses.id')
			->select('students.id', 'students.student_name', 'courses.course_name' )
			->get();
			
		return View::make('content.event_list', compact('event', 'students'));
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