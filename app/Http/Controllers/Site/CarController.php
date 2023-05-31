<?php

namespace App\Http\Controllers\Site;

use App\Models\Car;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function show($id)
    {
        $car = Car::findOrFail($id);
        $gallery = Gallery::whereNull('location')->where('car_id', $car -> id)->get();
        return view('site.car', compact('car', 'gallery'));
    }
}
