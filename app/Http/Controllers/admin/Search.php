<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class Search extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(config('setting.paginate-default'));

        return view('admin.users.index', compact('users') );
    }

    public function store(Request $request)
    {
        $keySearch = $request->search;
        $getSearch = DB::table('users')
            ->where('users.name', 'like', "%$keySearch%")
            ->paginate(config('setting.paginate-default'));

        return view(('admin.users.search'), compact('getSearch'));
    }
}
