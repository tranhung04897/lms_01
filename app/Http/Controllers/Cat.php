<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Author;

class Cat extends Controller
{
    public function show($cat_id){
        $menus = Category::where('parent_id',0)->orderBy('id')->get();
        $submenus = Category::where('parent_id','!=',0)->get();

        return view('user.cat', compact('menus', 'submenus'));
    }
}
