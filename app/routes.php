<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// $languages = array('jp','en');
// $locale = Request::segment(1);

// if(in_array($locale, $languages)){
// 	\App::setLocale($locale);
// }else{
// 	$locale = null;
// }

// Route::group(array('prefix' => $locale), function()
// {
// 	Route::get('/', array('as' => 'home', function(){
// 		return "jp";
// 	}));
// 	Route::get('news', array('as' => 'news', function(){
// 		return "jp";
// 	}));
// });

Route::get('/', array('as' => 'home', function(){
	return View::make('home2')->with('index', 1);
}));

Route::get('/contact', array('as' => 'contact', function(){
	return View::make('emails.index');
}));

Route::post('/contact', array('as' => 'contact-send', 'before' => 'csrf', function(){

	$rules = array(
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required'
		);

	$messages = array(
			'name.required' => 'お名前を入力してください',
			'email.required' => 'メールアドレスを入力してください',
			'message.required' => 'ご記入欄を入力してください',
			'email' => '正しいメールアドレスを入力してください'
		);

	$validator = Validator::make(Input::all(), $rules, $messages);

	if($validator->fails()){
		return Redirect::to('/contact')->withErrors($validator->messages());
	}else{

		$data = array(
				'name' => Input::get('name'),
				'company' => Input::get('company'),
				'email' => Input::get('email'),
				'telephone' => Input::get('telephone'),
				'description' => Input::get('message'),
			);

		Mail::send('emails.templates.contact', $data, function($message)
		{
		    $message->to('wirawan@syscli.co.jp', 'Wirawan')
		    ->subject('New email has arrived from syscli.co.jp/contact')
		    ->from(Input::get('email'), Input::get('name'));
		});

		return Redirect::to('/contact')->withMessage('Message sent successfully!');
	};

}));

Route::get('/contact/template', function(){
	return View::make('emails.templates.contact');
});