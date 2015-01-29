<?php

class ManageController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$name = "Anshuman";
		return View::make('manage.index', ['name' => $name]);
	}

}
