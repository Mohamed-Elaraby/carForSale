<?php

namespace App\Http\Controllers\Site;

use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index($id)
    {
        $category = Category::findOrFail($id);
        $gallery = Gallery::where('category_id', $id)->whereNull('location')->get();
        $header_cover = Gallery::where('category_id', $id)->getCategoryHeaderCover()->first();
        return view('site.category', compact('category', 'gallery', 'header_cover'));
    }
}
