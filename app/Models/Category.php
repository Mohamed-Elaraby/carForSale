<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

//    protected $fillable = ['name'];
    protected $guarded = [];

//    protected $appends = ['display_name'];
//
//    public function getDisplayNameAttribute()
//    {
//        return str_replace(' ', '_', $this->name);
//    }

    public function getDescriptionAttribute($value)
    {
        return nl2br($value);
    }
    public function images()
    {
        return $this->hasMany(Gallery::class);
    }

    public function subCategories()
    {
        return $this->hasMany(SubCategories::class);
    }
}
