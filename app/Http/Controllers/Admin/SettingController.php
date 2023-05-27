<?php

namespace App\Http\Controllers\Admin;

use App\Models\Media;
use App\Models\Setting;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    use HelperTrait;
    public function index()
    {
        $setting = Setting::first();
        return view('admin.setting.index', compact('setting'));
    }

    public function update(Request $request)
    {
//        dd($request->all());
        $setting_data = $request -> except('media');
        $media = $request -> media;
        Setting::updateOrCreate(['id' => 1],$setting_data);
        return redirect() ->back() -> with('success', __('trans.modifications saved successfully'));
    }
}
