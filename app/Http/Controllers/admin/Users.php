<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Excel;
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

            return redirect(route('user.index'))->with('success', trans('errors.add-success'));
        } catch (Exception $exception) {

            return redirect(route('user.index'))->with('fail', trans('errors.add-fail'));
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
    public function create()
    {
        $user_data = User::orderBy('id', 'desc')->get();
        $user_array[] = array('ID', 'Name', 'Email', 'Role', 'Dob', 'Address', 'Phone', 'Gender');
        foreach ($user_data as $user)
        {
            $id = $user->id;
            $name = $user->name;
            $email = $user->email;
            $dob = $user->birthday;
            $address = $user->address;
            $phone = $user->phone;
            if($user->role === config('setting.role-mod') ) {
                $role = trans('user.role-mod');
            } else{
                $role = trans('user.role-admin');
            }
            if($user->gender === config('setting.default') ) {
                $gender = trans('user.select-female');
            } else{
                $gender = trans('user.select-male');
            }
            $user_array[] = array(
                'ID' => $id,
                'Name' => $name,
                'Email' => $email,
                'Role' => $role,
                'Dob' => $dob,
                'Address' => $address,
                'Phone' => $phone,
                'Gender' => $gender,
            );
        }
        Excel::create('User Data', function($excel) use ($user_array)
        {
            $excel->setTitle('User Data');
            $excel->sheet('User Data', function($sheet) use ($user_array)
            {
                $sheet->fromArray($user_array, null, config('setting.sheet-default'), false, false);
            });
        })->download('xlsx');
    }
}
