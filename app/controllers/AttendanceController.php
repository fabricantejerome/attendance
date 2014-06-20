<?php

class AttendanceController extends BaseController{

	public function index()
	{
		return View::make('content.attendance');// using compact $tasks = 'tasks'
	}
	public function index_submit(){
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
	public function new_student()
	{
		return View::make('content.new_student');
	}
	public function new_course()
	{
		$colleges = College::all();
		return View::make('content.new_course', compact('colleges'));
	}
	public function new_college()
	{
		return View::make('content.new_college');
	}
	public function events()
	{
		return View::make('content.events');
	}

	public function course_submit()
	{
		dd(Input::all());
	}

	public function college_submit()
	{
		$college = new College;
		$college->college_name = ucwords(Input::get('college_name'));
		$college->save();
		return Redirect::action('AttendanceController@new_college');
	}

}