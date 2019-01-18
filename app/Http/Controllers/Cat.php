<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class Cat extends Controller
{
    public function show($cat_id){
        $cat_name = Category::where('id', $cat_id)->get();
        $categories = Category::with('childs')->where('parent_id', config('setting.parent_id'))->get();
        $books = DB::table('books')->join('categorys', 'categorys.id', 'books.category_id')
            ->select('books.id', 'books.title', 'books.picture', 'books.preview', 'books.category_id')
            ->where('books.category_id', $cat_id)->orWhere('categorys.parent_id', config('setting.parent_id'))
            ->orWhere('categorys.parent_id', $cat_id)->get();

        return view('user.cat', compact('categories', 'books', 'cat_name'));
    }
}
