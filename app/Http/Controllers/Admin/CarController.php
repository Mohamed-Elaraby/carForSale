<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CarDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Car\AddAndUpdateCarRequest;
use App\Models\Car;
use App\Models\Category;
use App\Models\File;
use App\Models\Gallery;
use App\Models\relation_car_specification;
use App\Models\Specification;
use App\Traits\HelperTrait;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Collection;

class CarController extends Controller
{
    use HelperTrait;
    public function index(CarDatatable $carDatatable)
    {
        return $carDatatable -> render('admin.cars.index');
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id')->toArray();
        $manufacturing_years = [];
        for ($x = 1990; $x <= Carbon::now()->year; $x++) {
            $manufacturing_years[$x] = $x;
        }
        $manufacturing_years = array_reverse($manufacturing_years, true);
        return view('admin.cars.create', compact('categories', 'manufacturing_years'));
    }

    public function store(AddAndUpdateCarRequest $request)
    {
//        dd($request->all());
        Car::create($request -> except('warranty_status'));
        return redirect() -> route('admin.cars.index') -> with('success', __('trans.car added successfully'));
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('admin.cars.show', compact('car'));
    }

    public function edit($id)
    {
        $car = Car::findOrFail($id);
        $header_cover = Gallery::where('car_id', $id)->getCarHeaderCover()->first();
        $categories = Category::pluck('name', 'id')->toArray();
        $specifications = Specification::all();
        $manufacturing_years = [];
        for ($x = 1990; $x <= Carbon::now()->year; $x++) {
            $manufacturing_years[$x] = $x;
        }
        $manufacturing_years = array_reverse($manufacturing_years, true);
        $selected_specifications = relation_car_specification::where('car_id', $car->id)->pluck('specification_id')->toArray();
        return view('admin.cars.edit', compact('car', 'header_cover', 'categories', 'specifications', 'manufacturing_years', 'selected_specifications'));
    }

    public function update(AddAndUpdateCarRequest $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->update($request -> except('warranty_status'));
        return response()-> json('success', 200);
    }


    public function destroy($id)
    {
        Car::findOrFail($id) -> delete();
        return redirect()->back()->with('delete', __('trans.car delete successfully'));
    }
    public function get_car_images(Request $request)
    {
        if ($request -> ajax())
        {
            $car_id = $request->car_id;
            $images = Gallery::where('car_id', $car_id)->whereNull('location')->get();
            return response() -> json(['images' => $images], 200);
        }
    }

    public function get_car_header_cover(Request $request)
    {
        if ($request -> ajax())
        {
            $car_id = $request->car_id;
            $header_cover = Gallery::where(['car_id' => $car_id, 'location' => 'car_header_cover'])->first();
            return response() -> json(['header_cover' => $header_cover], 200);
        }
    }

    public function syncSpecificationsCar(Request $request)
    {
        if ($request->ajax())
        {
            $specification_status = $request->specification_status;
            $specification_id = $request->specification_id;
            $car_id = $request->car_id;
            $car = Car::findOrFail($car_id);
            if ($specification_status == "true")
            {
                $car -> specifications()->syncWithoutDetaching($specification_id);
            }
            else
            {
                $car -> specifications()->detach($specification_id);
            }
            return response()->json('success', 200);
        }
    }
}
