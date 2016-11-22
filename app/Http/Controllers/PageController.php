<?php

namespace App\Http\Controllers;

use Requests;
use DB;
use App\Job_list;
use App;

class PageController extends Controller
{
    public function show($categorySlug,$subjectSlug,$pageSlug)
	{
		//Kiểm tra URL chi tiết việc làm
		$job_lists = DB::collection('job_list')->select('_id', 'title', 'industrial_zone.slug', 'province.slug')->get();
		foreach($job_lists as $job_list){
			if((str_slug($job_list['title'],'-') == $pageSlug) && ($job_list['industrial_zone']['slug'] == $subjectSlug) && ($job_list['province']['slug'] == $categorySlug)){
				$detail = $job_list;
				break;
			}
		}
		if(isset($detail)){
			return view('jobs.detail',compact('detail'));	
		}else{
			return redirect('/');
		}
	}
}
