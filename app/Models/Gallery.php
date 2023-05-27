<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded=[];

    public function scopeGetHomeSlideShow($query)
    {
        return $query -> where('location', 'home_slideShow');
    }

    public function scopeGetCategoryHeaderCover($query)
    {
        return $query -> where('location', 'category_header_cover');
    }
//    protected $appends = ['image_full_path'];
//
//    public function getImageFullPathAttribute()
//    {
//        return 'storage' . DIRECTORY_SEPARATOR . $this->image_path . DIRECTORY_SEPARATOR . $this->image_name;
//    }

    public function home()
    {
        return $this->belongsTo(Home::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
