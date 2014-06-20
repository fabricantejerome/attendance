<?php

class Event1 extends Eloquent{
	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these 3 attributes able to be filled
	protected $fillable = array('event_name', 'event_date');

	public $timestamps = false;
	protected $table = 'events';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	// each bear HAS one fish to eat


	// each bear climbs many trees

	public function students(){
		return $this->belongsToMany('Student', 'attendances', 'event_id', 'student_id');
	}

	public function attendances(){
		return $this->hasMany('Attendance');
	}


	// each bear BELONGS to many picnic
	// define our pivot table also
}