<?php

class PagesController extends BaseController {
	public function home() {
		// return "foo";
		return View::make('home');
	}

	public function manage() {
		$name = "Anshuman";
		return View::make('manage')->with('name',$name);
	}
}