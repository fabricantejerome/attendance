<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', 'AttendanceController@index');

Route::get('/login', 'AttendanceController@login');

Route::get('/student', 'AttendanceController@student');
Route::get('/new/event', 'AttendanceController@new_event');
Route::get('/new/student', 'AttendanceController@new_student');
Route::get('/new/course', 'AttendanceController@new_course');
Route::get('/new/college', 'AttendanceController@new_college');
Route::get('/events', 'AttendanceController@events');


Route::post('/attendance/submit', 'AttendanceController@index_submit');
Route::post('/login/submit', 'AttendanceController@login_submit');
Route::post('/new/college', 'AttendanceController@college_submit');
Route::post('/new/course', 'AttendanceController@course_submit');
Route::post('/new/student', 'AttendanceController@student_submit');
Route::post('/new/event', 'AttendanceController@event_submit');



