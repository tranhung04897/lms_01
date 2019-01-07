<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Http\Requests\AuthorRequest;
use Excel;
class Authors extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::orderBy('id', 'desc')->paginate(config('setting.paginate-default'));

        return view('admin.authors.index', compact('authors') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $author_data = Author::orderBy('id', 'desc')->get();
        $author_array[] = array('ID', 'Name', 'Follow');
        foreach ($author_data as $author)
        {
            $id = $author->id;
            $name = $author->name;
            $follow = $author->follow;
            $author_array[] = array(
                'ID' => $id,
                'Name' => $name,
                'Follow' => $follow,
            );
        }
        Excel::create('Authors Data', function($excel) use ($author_array)
        {
            $excel->setTitle('User Data');
            $excel->sheet('User Data', function($sheet) use ($author_array)
            {
                $sheet->fromArray($author_array, null, config('setting.sheet-default'), false, false);
            });
        })->download('xlsx');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $author = new Author;
            $author->name = $request->name;
            $author->save();

            return redirect(route('author.index'))->with('success', trans('errors.add-success'));
        } catch (Exception $exception) {

            return redirect(route('author.index'))->with('fail', trans('errors.add-fail'));
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
    public function update(Request $request)
    {
        try {
            $author = Author::findOrFail($request->author_id);
            $author->update($request->all());

            return redirect(route('author.index'))->with('success', trans('errors.edit-success'));
        } catch (Exception $exception) {

            return redirect(route('author.index'))->with('fail', trans('errors.edit-fail'));
        }
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
            $author = Author::findOrFail($id);
            $author->delete();

            return redirect(route('author.index'))->with('success', trans('errors.del-success'));
        } catch (Exception $exception) {

            return redirect(route('author.index'))->with('fail', trans('errors.del-fail'));
        }
    }
}
