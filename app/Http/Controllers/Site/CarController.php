<?php

namespace App\Http\Controllers\Site;

use App\Models\Car;
use App\Models\Gallery;
use App\Models\relation_car_specification;
use App\Models\Setting;
use App\Models\Specification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function show($id)
    {
        $car = Car::findOrFail($id);
        $gallery = Gallery::whereNull('location')->where('car_id', $car -> id)->get();
        $specifications = Specification::whereHas('cars', function ($q)use ($car){$q -> where('car_id', $car -> id);})->get();
        $site_currency = Setting::first()->currency ;
        return view('site.car', compact('car', 'gallery', 'specifications', 'site_currency'));
    }
}
