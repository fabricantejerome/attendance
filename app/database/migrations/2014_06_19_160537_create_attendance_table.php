<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('colleges', function($table){
			$table->increments('id');
			$table->string('college_name', 64)->unique();
			$table->timestamps();
		});

		Schema::create('courses', function($table){
			$table->increments('id');
			$table->string('course_name', 80)->unique();
			$table->integer('college_id')->unsigned();
			$table->foreign('college_id')->references('id')->on('colleges')->onUpdate('cascade')->onDelete('cascade');
			$table->timestamps();
		});

		Schema::create('events', function($table){
			$table->increments('id');
			$table->string('event_name', 64);
			$table->date('event_date');
		});

		Schema::create('students', function($table){
			$table->integer('id')->unsigned();
			$table->primary('id');
			$table->string('student_name', 64)->unique();
			$table->integer('course_id')->unsigned();
			$table->foreign('course_id')->references('id')->on('courses')->onUpdate('cascade')->onDelete('cascade');
			$table->timestamps();
		});

		Schema::create('attendances', function($table){
			$table->increments('id');
			$table->integer('event_id')->unsigned();
			$table->foreign('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
			$table->integer('student_id')->unsigned();
			$table->foreign('student_id')->references('id')->on('students')->onUpdate('cascade')->onDelete('cascade');
			$table->time('time');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('attendances');
		Schema::drop('students');
		Schema::drop('events');
		Schema::drop('courses');
		Schema::drop('colleges');
	}

}
