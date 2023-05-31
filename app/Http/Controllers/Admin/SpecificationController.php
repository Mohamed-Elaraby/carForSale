<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SpecificationDataTable;
use App\Http\Controllers\Controller;
use App\Models\Specification;
use Illuminate\Http\Request;

class SpecificationController extends Controller
{
    public function index(SpecificationDataTable $specificationDataTable)
    {
        return $specificationDataTable -> render('admin.specification.index');
    }

    public function create()
    {
        return view('admin.specification.create');
    }

    public function store(Request $request)
    {
        foreach ($request -> data as $data) {
            Specification::create($data);
        }
        return redirect() -> route('admin.specifications.index') -> with('success', __('trans.specification added successfully'));
    }

    public function show($id)
    {
        $specification = Specification::findOrFail($id);
        return view('admin.specification.show', compact('specification'));
    }

    public function edit($id)
    {
        $specification = Specification::findOrFail($id);
        return view('admin.specification.edit', compact('specification'));
    }

    public function update(Request $request, $id)
    {
        $specification = Specification::findOrFail($id);
        $specification->update($request -> all());
        return redirect() -> route('admin.specifications.index')->with('success', __('trans.specification edit successfully'));

//        return response()-> json('success', 200);
    }


    public function destroy($id)
    {
        Specification::findOrFail($id) -> delete();
        return redirect()->back()->with('delete', __('trans.specification delete successfully'));
    }
}
