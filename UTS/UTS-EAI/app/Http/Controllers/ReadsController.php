<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ReadsController extends Controller
{
  /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {

	}

  public function list(){
      $data = Http::get('http://universities.hipolabs.com/search?country=Indonesia');
			$data = json_decode($data, true);
      return view('universitas', ['data'=>$data]);
    }

    /**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index() {
	}
}
