<?php

//app/filters/Birthday.php
class BirthdayFilter
{
	public function filter($route, $result, $date)
	{
		if (date('d/m') ==  $date ){
			return View::make('birthday');
		}
	}
}
