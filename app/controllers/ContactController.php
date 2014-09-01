<?php

class ContactController extends BaseController {

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

	public function getContact()
	{
		return View::make('contact');
	}

	public function getContactForm(){

		$data = Input::all();

		$rules = array(
			'name' => 'required|alpha',
			'email' => 'required|max:255',
			'message' => 'required'
		);

		$validator = Validator::make($data, $rules);

		if($validator->passes())
		{

			Mail::send('emails.contact-form', $data, function($message) use ($data){
				$message->from($data['email'], $data['name']);
				$message->to('internettestx@gmail.com', 'the Internettes')->subject('Hey, Internettes! We\'ve got mail!');
			});

			Session::flash('success', 'Your message was sent!');
			return View::make('contact');
		}
		else
		{
			Session::flash('fail', 'Please enter in all required data!');
			return Redirect::back()->withErrors($validator)->withInput();
		}

	}

}