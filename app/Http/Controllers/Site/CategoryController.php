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
        $header_cover = Gallery::with('car')->whereHas('car', function ($q) use ($category){
            $q -> where('status', '!=', 'مباعة');
            $q -> where('category_id', $category -> id);
        })->where('location', 'car_header_cover')->paginate(15);
        return view('site.category', compact('category', 'header_cover'));
    }
}
