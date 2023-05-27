<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CategoryDatatable;
use App\Http\Requests\Category\AddAndUpdateCategoryRequest;
use App\Models\Category;
use App\Models\Gallery;
use App\Traits\HelperTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    use HelperTrait;
    public function index(CategoryDatatable $categoryDatatable)
    {
        return $categoryDatatable -> render('admin.categories.index');
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(AddAndUpdateCategoryRequest $request)
    {
        Category::create($request -> all());
        return redirect() -> route('admin.categories.index') -> with('success', __('trans.category added successfully'));
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $header_cover = Gallery::where('category_id', $id)->getCategoryHeaderCover()->first();
        return view('admin.categories.edit',compact('category', 'header_cover'));
    }

    public function update(AddAndUpdateCategoryRequest $request, $id)
    {
//        dd($request->all());
        $category = Category::findOrFail($id);
        $category->update($request -> all());
        return response()-> json('success', 200);
    }


    public function destroy($id)
    {
        Category::findOrFail($id) -> delete();
        return redirect()->back()->with('delete', __('trans.category delete successfully'));
    }

    public function get_category_images(Request $request)
    {
        if ($request -> ajax())
        {
            $category_id = $request->category_id;
            $images = Gallery::where('category_id', $category_id)->whereNull('location')->get();
            return response() -> json(['images' => $images], 200);
        }
    }

}
