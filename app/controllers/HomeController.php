<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	// public function showWelcome()
	// {
	// 	return View::make('hello');
	// }

	public function getIndex(){

		$items = Auth::user()->items;

		return View::make('home', array(
				'items' => $items
			));
	}

	public function postIndex(){
		// $id = Input::get('id');
		// echo $id;
	}

	public function getSignOut()
	{
		Auth::logout(); // log the user out of our application
		return Redirect::route('login'); // redirect the user to the login screen
	}


}