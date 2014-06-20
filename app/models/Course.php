<?php

class Course extends Eloquent{
	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these 3 attributes able to be filled
	protected $fillable = array('course_name', 'college_id');
	// DEFINE RELATIONSHIPS --------------------------------------------------
	// each bear HAS one fish to eat


	// each bear climbs many trees
	public function college() {
		return $this->belongsTo('College');
	}

	public function students(){
		return $this->hasMany('Student');
	}

	// each bear BELONGS to many picnic
	// define our pivot table also
}