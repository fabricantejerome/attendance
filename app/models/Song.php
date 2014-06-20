<?php

class Song extends Eloquent
{
	// Song __belongs_to__ Artist
	public function artist(){
		return $this->belongsTo('Artist');
	}

	//Song __belongs_to_may__ Listeners
	public function listeners(){
		return $this->belongsToMany('Listener');
	}
}