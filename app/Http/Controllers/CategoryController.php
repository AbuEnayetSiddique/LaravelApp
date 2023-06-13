<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('categories.index',compact("categories"));
    }
    public function show($category) {
        $category = Category::find($category);
        return view('categories.show', compact("category"));
    }
}
