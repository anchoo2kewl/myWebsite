<?php

class PagesController extends \BaseController {
	public function home() {
		// return "foo";
		return View::make('home');
	}

	public function manage() {
		// Create initial User
		// $user = new User;
		// $user->username = 'anshuman';
		// $user->name = 'Anshuman Biswas';
		// $user->email = 'hi@anshumanbiswas.com';
		// $user->type = 1;
		// $user->password = Hash::make('qweasd');
		// $user->save();
		// return User::all();
	}
}