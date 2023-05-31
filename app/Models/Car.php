<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(Gallery::class);
    }

    public function specifications()
    {
        return $this -> belongsToMany(Specification::class, 'relation_car_specifications', 'car_id', 'specification_id');
    }
}
