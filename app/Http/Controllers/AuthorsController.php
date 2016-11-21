<?php
namespace App\Http\Controllers;

use Request;
use App\Author;
use App\Http\Requests\AuthorRequest;

class AuthorsController extends Controller
{
    public function index()
	{
		$authors = Author::all();
 
        if (Request::wantsJson()) {
            return $authors;
        } else {
            return view('authors.index', compact('authors'));
        }
	}
	
	public function create()
	{
		$author = new Author;
		if(Request::wantsJson())
			return $author;
		else
			return view('authors.create', compact('author'));
	}
	
	public function store(AuthorRequest $request)
	{
		$author = Author::create($request->all());
		session()->flash('flash_message','Thêm tác giả thành công');
		if(Request::wantsJson())
			return $author;
		else
			return redirect('authors');
	}
	
	public function show(Author $author)
    {
        if (Request::wantsJson()) {
            return $author;
        } else {
            return view('authors.show', compact('author'));
        }
    }
	
	public function edit(Author $author)
	{
		return view('authors.edit', compact('author'));
	}
	
	public function update(AuthorRequest $request, Author $author)
	{
		$author->update($request->all());
		session()->flash('flash_message','Sửa tác giả thành công');
		if(Request::wantsJson())
			return $author;
		else
			return redirect('authors');
	}
	
	public function destroy(Author $author)
	{
		$deleted = $author->delete();
		sesion()->flash('flash_message','Xóa tác giả thành công');
		if(Request::wantsJson())
			return $deleted;
		else
			return redirect('authors');
	}
}
