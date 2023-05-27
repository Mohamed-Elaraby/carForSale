<?php


namespace App\Traits;


use App\Models\Setting;

trait SettingTrait
{
    public static function getSetting (){
        return Setting::first();
    }
}
