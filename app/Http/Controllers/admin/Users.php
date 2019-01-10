<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\UserRequest;
class Users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(config('setting.paginate-default'));

        return view('admin.users.index', compact('users') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        try{
            $user = new User;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->gender = $request->gender;
            $user->birthday = $request->dob;
            $user->save();

            return redirect(route('admin.users.index'))->with('success', trans('errors.add-success'));
        } catch (Exception $exception) {

            return redirect(route('admin.users.index'))->with('fail', trans('errors.add-fail'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request)
    {
        try {
            $user = User::findOrFail($request->user_id);
            $user->update($request->all());

            return redirect("/admin/user")->with('success', trans('errors.edit-success'));
        } catch (Exception $exception) {

            return redirect("/admin/user")->with('fail', trans('errors.edit-fail'));
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
            $user = User::findOrFail($id);
            $user->delete();

            return redirect("/admin/user")->with('success', trans('errors.del-success'));
        } catch (Exception $exception) {

            return redirect("/admin/user")->with('fail', trans('errors.del-fail'));
        }
    }
}
