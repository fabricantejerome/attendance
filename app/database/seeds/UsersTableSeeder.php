<?php

class UsersTableSeeder extends Seeder{

	public function run()
	{
		User::truncate();

		User::create([
			'username' => 'JeffreyWay',
			'email' => 'jeffrey@laracasts.com',
			'password' => '1234'
		]);

		User::create([
			'username' => 'AllieWay',
			'email' => 'allie@example.com',
			'password' => '1234'
		]);
	}
}