<?php

class College extends Eloquent{
	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these 3 attributes able to be filled
	protected $fillable = array('college_name');

	// DEFINE RELATIONSHIPS --------------------------------------------------
	// each bear HAS one fish to eat


	// each bear climbs many trees
	public function courses() {
		return $this->hasMany('Course');
	}

	// each bear BELONGS to many picnic
	// define our pivot table also
}