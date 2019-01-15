<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Borrow;
use App\Models\Borrow_Book;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class Borrowbook extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borrows = DB::table('borrows')->join('users', 'borrows.user_id', 'users.id')
            ->join('borrow_book', 'borrow_book.borrow_id', 'borrows.id')
            ->join('books', 'books.id', 'borrow_book.book_id')
            ->select('borrows.id', 'users.name', 'books.title', 'borrows.day_borrow', 'borrows.end_day_borrow', 'borrows.status')
            ->paginate(config('setting.paginate-default'));
        return view('admin.borrow.index', compact('borrows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateStatus(Request $request)
    {
        $id = $request->id;
        $presentStatus = $request->presentStatus;
        if($presentStatus == 1){
            Borrow::where('id', $id)->update(['status' => 0]);
        }
        else{
            Borrow::where('id', $id)->update(['status' => 1]);
        }
        return view('admin.borrow.ajaxUpdateStatus', compact('presentStatus', 'id'));
    }

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
        //
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
        try {
            $borrow = Borrow::findOrFail($id);
            $borrow->delete();

            return redirect(route('borrow.index'))->with('success', trans('errors.del-success'));
        } catch (Exception $exception) {

            return redirect(route('borrow.index'))->with('fail', trans('errors.del-fail'));
        }
    }
}
