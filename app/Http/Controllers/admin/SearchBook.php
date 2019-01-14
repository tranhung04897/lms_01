<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Publisher;
use App\Models\Author;
use App\Models\Category;

class SearchBook extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = DB::table('books')->join('authors', 'authors.id', 'books.author_id')
            ->join('publisher', 'publisher.id', 'books.publisher_id')
            ->join('categorys', 'categorys.id', 'books.category_id')
            ->select('books.id', 'books.page', 'books.author_id', 'books.publisher_id', 'books.category_id', 'categorys.name as cat_name', 'books.title', 'books.preview', 'books.status', 'authors.name as auth_name', 'publisher.name as pub_name', 'books.picture')
            ->orderBy('books.id', 'desc')
            ->paginate(config('setting.paginate-default'));
        $publishers = Publisher::all();
        $categorys = Category::all();
        $authors = Author::all();

        return view('admin.book.index', compact('books', 'publishers', 'categorys', 'authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $keySearch = $request->search;
        $getSearch = DB::table('books')->join('authors', 'authors.id', 'books.author_id')
            ->join('publisher', 'publisher.id', 'books.publisher_id')
            ->join('categorys', 'categorys.id', 'books.category_id')
            ->where('books.title', 'like', "%$keySearch%")
            ->orWhere('authors.name', 'like', "%$keySearch%")
            ->orWhere('publisher.name', 'like', "%$keySearch%")
            ->orWhere('categorys.name', 'like', "%$keySearch%")
            ->select('books.id', 'books.page', 'books.author_id', 'books.publisher_id', 'books.category_id', 'categorys.name as cat_name', 'books.title', 'books.preview', 'books.status', 'authors.name as auth_name', 'publisher.name as pub_name', 'books.picture')
            ->orderBy('books.id', 'desc')
            ->paginate(config('setting.paginate-default'));
        $publishers = Publisher::all();
        $categorys = Category::all();
        $authors = Author::all();

        return view(('admin.book.search'), compact('getSearch', 'publishers', 'categorys', 'authors'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
