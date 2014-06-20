<?php

class Student extends Eloquent{
	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these 3 attributes able to be filled
	protected $fillable = array('id', 'student_name', 'course_id');

	// DEFINE RELATIONSHIPS --------------------------------------------------
	// each bear HAS one fish to eat


	// each bear climbs many trees
	public function course() {
		return $this->belongsTo('Course');
	}

	public function events(){
		return $this->belongsToMany('Event1', 'attendances', 'student_id', 'event_id');
	}

	public function attendances(){
		return $this->hasMany('Attendance');
	}

}