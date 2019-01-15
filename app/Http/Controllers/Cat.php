<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cat extends Controller
{
    public function show($cat_id){
        return view('user.cat');
    }
}
