<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;
use App\Models\User;
use App\Models\Borrow;
use App\Models\Borrow_Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;

class Detail extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request,$id)
    {
        try{
            $borrow = Borrow::create([
               'user_id' => Auth::user()->id,
                'day_borrow' => $request->dayborrow,
                'end_day_borrow' => $request->endborrow,
                'quantity' => $request->quantity,
            ]);
            $borrow_book = new Borrow_Book;
            $borrow_book->borrow_id = $borrow->id;
            $borrow_book->book_id = $id;
            $borrow_book->save();

            return redirect(route('detail.show',$id))->with('success', trans('public.message-borrow-success'));
        } catch (Exception $exception) {

            return redirect(route('detail.show',$id))->with('fail', trans('public.message-borrow-fail'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comments = DB::table('comments')->join('users', 'users.id', 'comments.user_id')
            ->select('comments.id', 'comments.content', 'comments.created_at', 'users.name')
            ->where('comments.book_id', $id)->get();
        $categories = Category::with('childs')->where('parent_id', config('setting.parent_id'))->get();
        $books = DB::table('books')->join('authors', 'authors.id', 'books.author_id')
            ->join('categorys', 'categorys.id', 'books.category_id')
            ->select('books.id', 'books.title', 'books.preview', 'categorys.name as cat_name' , 'books.picture', 'books.page', 'books.author_id', 'authors.name')
            ->where('books.id', $id)->first();

        return view('user.detail', compact('categories', 'books', 'comments'));
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
