<?php

namespace App\Http\Controllers;

use Request;
use App\Employer;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class HomeController extends Controller
{
    public function index()
	{
		$employers = Employer::all();
		return view('home', compact('employers'));
	}
}
