<?php
namespace App\Http\Controllers;

use Request;
use App\Http\Requests\ArticleRequest;
use App\Article;
use App\Author;

class ArticlesController extends Controller
{
	public function index()
	{
		$articles = Article::all();
		if(Request::wantsJson())
			return $articles;
		else
			return view('articles.index', compact('articles'));
	}
	
	public function create()
	{
		$authors = Author::lists('name','id')->all();
		$article = new Article;
		return view('articles.create', compact('article', 'authors'));
	}
	
	public function store(ArticleRequest $request)
	{
		session()->flash('flash_message', 'Thêm bài viết thành công');
		$article = Article::create($request->all());
		if(Request::wantsJson())
			return $article;
		else
			return redirect('articles');
	}
	
	public function show(Article $article)
	{
		if(Request::wantsJson())
			return $article;
		else
			return view('articles.show',compact('article'));
	}
	
	public function edit(Article $article)
	{
		$authors = Author::lists('name', 'id')->all();
		return view('articles.edit',compact('article', 'authors'));
	}
	
	public function update(ArticleRequest $request, Article $article)
	{
		$article->update($request->all());
		session()->flash('flash_message','Sửa bài viết thành công');
		if(Request::wantsJson())
			return $article;
		else
			return redirect('articles');
	}
	
	public function destroy(Article $article)
	{
		$deleted = $article->delete();
		session()->flash('flash_message','Xóa bài viết thành công');
		if(Request::wantsJson())
			return (string) $deleted;
		else
			return redirect('articles');
	}
}
