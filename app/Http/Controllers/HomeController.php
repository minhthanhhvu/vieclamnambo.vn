<?php

namespace App\Http\Controllers;

use DB;
use Request;
use App\Employer;
use App\Job_carrer;
use App\Job_list;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class HomeController extends Controller
{
    public function index()
	{
		$job_carrers = DB::collection('job_carrer')->select('_id','title')->get();
		$new_job_lists = DB::collection('job_list')->select('_id', 'title', 'wage.title', 'industrial_zone.name', 'ended_at')->take(5)->get();
		$high_job_list = DB::collection('job_list')->select('_id', 'title', 'wage.title', 'industrial_zone.name', 'ended_at', 'province.name')->first();
		$provinces = DB::collection('province')->select('_id', 'name', 'slug')->get();
		return view('home', compact('employers', 'job_carrers', 'new_job_lists', 'high_job_list', 'provinces'));
	}
}
