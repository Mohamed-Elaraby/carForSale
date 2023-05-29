<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use App\Models\Category;
use App\Models\Gallery;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class DropzoneController extends Controller
{
    use HelperTrait;

    public function upload_header_cover(Request $request)
    {
        if ($request -> ajax())
        {
            $car_id = $request->car_id;
            $car = Car::findOrFail($car_id);
            $car_header_cover = Gallery::where('car_id', $car_id)->getCarHeaderCover()->first();
            $header_cover_object = $request->header_cover;
            $header_cover_name = $header_cover_object -> getClientOriginalName();
            $location = $request -> location;
            $image_data = $this->uploadImageProcessing($header_cover_object, 'cars_cover', $car->name , 'header_cover', 'public', $car_header_cover); // Upload Image With Trait
//            dd($image_data);
            $car -> images()->updateOrCreate(
                ['location' => $location],
                $image_data + ['location' => $location]
            );
            return response() -> json(['message' => 'success'], 200);
        }
    }

    public function upload(Request $request)
    {
//        dd($request->all());
        $car = Car::findOrFail($request->car_id);

        $image_source = $request->file('file');

        $image_data = $this->uploadImageProcessing($image_source, 'cars', $car->name, 'gallery', 'public'); // Upload Image With Trait

        $car -> images()->create($image_data);

        return response()-> json(['message' => 'success'], 200);

    }

    public function destroy($id, Request $request)
    {
        if ($request -> ajax())
        {
            $image =  Gallery::findOrFail($id);
            $image_removed = $this->deleteImageHandel('public', $image);
            if ($image_removed)
            {
                $image ->delete();
            }
            return redirect() -> back();
        }
    }

    public function home_slideShow_upload(Request $request)
    {
//        dd($request->all());

        $image_source = $request->file('file');
        $location = $request -> location;
        $image_data = $this->uploadImageProcessing($image_source, 'homePage', 'slideShow', $location, 'public', 800, 400); // Upload Image With Trait
//dd($image_data);
        Gallery::create($image_data + ['location' => $location]);

        return response()-> json(['message' => 'success'], 200);
    }
//
//    function fetch()
//    {
//        $images = \File::allFiles(public_path('storage/categories'));
////        dd($images);
//        $output = '<div class="row">';
//        foreach($images as $image)
//        {
//            $output .= '
//      <div class="col-md-2" style="margin-bottom:16px;" align="center">
//                <img src="'.asset('storage/categories/' . $image->getRelativePathname()).'" class="img-thumbnail" width="370" height="390" style="height:175px;" />
//                <button type="button" class="btn btn-link remove_image" id="'.$image->getFilename().'">Remove</button>
//            </div>
//      ';
//        }
//        $output .= '</div>';
//        echo $output;
//    }
//
//    function delete(Request $request)
//    {
//        if($request->get('name'))
//        {
//            \File::delete(public_path('images/' . $request->get('name')));
//        }
//    }
}
