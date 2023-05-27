<?php

namespace App\Http\Controllers\Site;

use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::with(['images' => function($q){
            $q->whereNull('location');
        }])->whereHas('images', function ($query){
            $query -> whereNull('location');
        })->get();
        $shuffle_gallery_images = Gallery::whereNull('location')->get()->shuffle()->take(6);
        $slideShow_images = Gallery::getHomeSlideShow()->get()->shuffle();
        return view('site.index', compact('categories', 'shuffle_gallery_images', 'slideShow_images'));
    }
}
