<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;
use App\Models\User;
use App\Models\Borrow;
use App\Models\Borrow_Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $categories = Category::with('childs')->where('parent_id', '=', 0)->get();
        $books = DB::table('books')->join('authors', 'authors.id', 'books.author_id')
        ->select('books.id', 'books.title', 'books.preview', 'books.picture', 'books.page', 'books.author_id', 'authors.name')
        ->where('books.id', '=', $id)->first();

        return view('user.detail', compact('categories', 'books'));
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

    public function postPost(Request $request)
    {
        request()->validate(['rate' => 'required']);
        $book = Book::find($request->id);
        $rating = new \willvincent\Rateable\Rating;
        $rating->rating = $request->rate;
        $rating->user_id = auth()->user()->id;
        $book->ratings()->save($rating);

        return redirect()->route("detail.show", $request->id);
    }
}
