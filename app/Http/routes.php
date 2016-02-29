<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/{referral?}', function ($referral = null) {

	if ($referral) {
		$referral = "?referral={$referral}";
	}

    return \Illuminate\Support\Facades\Redirect::to('https://talent4startups.org/'.$referral);
});
