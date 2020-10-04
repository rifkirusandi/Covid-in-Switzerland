<?php

namespace App\Http\Controllers;

use Illuminate\Http\Rquest;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Covid19Controller extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {

	}

	public function list(){
		$data = Http::get('https://api.covid19api.com/total/dayone/country/switzerland')->json();
		return view('covid19', ['data'=>$data]);
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index() {
	}
}
