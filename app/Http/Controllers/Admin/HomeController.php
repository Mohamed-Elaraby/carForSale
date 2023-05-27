<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::first();
        return view('admin.homePage.edit', compact('home'));
    }

    public function get_slideShow_images(Request $request)
    {
        if ($request -> ajax())
        {
            $images = Gallery::getHomeSlideShow()->get();
            return response() -> json(['images' => $images], 200);
        }
    }

}
