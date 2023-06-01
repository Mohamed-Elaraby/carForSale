<?php

namespace App\Http\Controllers\Site;

use App\Models\Car;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Images;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use function foo\func;

class HomeController extends Controller
{
    public function index()
    {
        $header_cover = Gallery::with('car')->whereHas('car', function ($q){
            $q -> where('status', '!=', 'مباعة');
        })->where('location', 'car_header_cover')->paginate(15);
        return view('site.index', compact('header_cover'));
    }
}
