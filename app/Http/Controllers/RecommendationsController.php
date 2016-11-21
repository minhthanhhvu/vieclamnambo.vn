<?php
 
namespace App\Http\Controllers;
 
use Request;
use App\Http\Requests\RecommendationRequest;
use App\Http\Controllers\Controller;
use App\Article;
use App\Mailers\ArticleMailer;
 
class RecommendationsController extends Controller
{
    public function create(Article $article)
    {
        return view('recommendations.create', compact('article'));
    }
 
    public function store(RecommendationRequest $request, Article $article, ArticleMailer $mailer)
    {
		$mailer->recommendTo($request->input('email'), $article);
		session()->flash('flash_message','Gửi email thành công');
		if(Request::wantsJson())
			return ['Gửi email thành công'];
		else
			return redirect('articles');
    }
}