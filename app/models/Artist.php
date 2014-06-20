<?php

class Artist extends Eloquent
{
	// Artist __has_may__ Song
	public function songs(){
		return $this->hasMany('Song');
	}
}