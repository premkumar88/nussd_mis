<?php

class UsersTableSeeder extends Seeder{
	public function run(){
		DB::table('users')->delete();

		$users = array(
			array(
						'name' => 'Prem',
						'password' => Hash::make('prem'),
						'email' => 'prem@gmail.com'
				),
			array(
						'name' => 'Rakesh',
						'password' => Hash::make('rakesh'),
						'email' => 'rakesh@gmail.com'
				)
		);

		DB::table('users')->insert($users);
	}
}