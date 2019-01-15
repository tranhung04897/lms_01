<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class Categorys extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('childs')->where('parent_id', '=', 0)->get();
        $allCategories = Category::all();

        return view('admin.category.index', compact('categories', 'allCategories'));
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
        $this->validate($request, [
            'name' => 'required',
        ]);
        $k = $request->parent_id;
        $cat = new Category;
        $cat->name = $request->name;
        if($request->parent_id)
        {
            $cat->parent_id = $request->parent_id;
        } else {
            $cat->parent_id = config('setting.default');
        }
        $cat->save();

        return back()->with('success', trans('errors.add-success'));
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
            $cat = Category::findOrFail($request->cat_id);
            $cat->update($request->all());

            return redirect("/admin/cat")->with('success', trans('errors.edit-success'));
        } catch (Exception $exception) {

            return redirect("/admin/cat")->with('fail', trans('errors.edit-fail'));
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
            $user = Category::findOrFail($id);
            $user->delete();

            return redirect(route('cat.index'))->with('success', trans('errors.del-success'));
        } catch (Exception $exception) {

            return redirect(route('cat.index'))->with('fail', trans('errors.del-fail'));
        }
    }
}
