<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Product extends Controller
{

	public function getCheckOut()
	{
		return view('checkout');
	}


	public function postCheckOut(Request $request)
	{
		\Stripe\Stripe::setApiKey("sk_test_mc6zZLwGJVD3tZoArgZYchux");

		\Stripe\Charge::create(array(
			"amount" => 2000,
			"currency" => "usd",
			"source" => $request->input('stripeToken'), // obtained with Stripe.js
			"description" => "Charge for joshua.robinson@example.com"
		));

	}
}
