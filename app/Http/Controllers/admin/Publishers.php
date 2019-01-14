<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Excel;
use App\Http\Requests\PublisherRequest;

class Publishers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publishers = Publisher::orderBy('id', 'desc')->paginate(config('setting.paginate-default'));

        return view('admin.publisher.index', compact('publishers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publisher_data = Publisher::orderBy('id', 'desc')->get();
        $publisher_array[] = array('ID', 'Name', 'Description');
        foreach ($publisher_data as $publisher)
        {
            $id = $publisher->id;
            $name = $publisher->name;
            $description = $publisher->description;
            $publisher_array[] = array(
                'ID' => $id,
                'Name' => $name,
                'Description' => $description,
            );
        }
        Excel::create('Publisher Data', function($excel) use ($publisher_array)
        {
            $excel->setTitle('Publisher Data');
            $excel->sheet('Publisher Data', function($sheet) use ($publisher_array)
            {
                $sheet->fromArray($publisher_array, null, config('setting.sheet-default'), false, false);
            });
        })->download('xlsx');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublisherRequest $request)
    {
        try{
            $publisher = new Publisher;
            $publisher->name = $request->name;
            $publisher->description = $request->description;
            $publisher->save();

            return redirect(route('publisher.index'))->with('success', trans('errors.add-success'));
        } catch (Exception $exception) {

            return redirect(route('publisher.index'))->with('fail', trans('errors.add-fail'));
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
    public function update(PublisherRequest $request)
    {
        try {
            $publisher = Publisher::findOrFail($request->publisher_id);
            $publisher->update($request->all());

            return redirect(route("/admin/publisher"))->with('success', trans('errors.edit-success'));
        } catch (Exception $exception) {

            return redirect(route("/admin/publisher"))->with('fail', trans('errors.edit-fail'));
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
            $publisher = Publisher::findOrFail($id);
            $publisher->delete();

            return redirect(route('publisher.index'))->with('success', trans('errors.del-success'));
        } catch (Exception $exception) {

            return redirect(route('publisher.index'))->with('fail', trans('errors.del-fail'));
        }
    }
}
