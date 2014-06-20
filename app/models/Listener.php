<?php

class Listener extends Eloquent{
	// Listener __belongs_to_many __ Song
	public function songs(){
		return $this->belongsToMany('Song');
	}
}