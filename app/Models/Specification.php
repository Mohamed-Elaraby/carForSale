<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    protected $guarded = [];

    public function cars()
    {
        return $this -> belongsToMany(Car::class, 'relation_car_specifications', 'specification_id', 'car_id');
    }

}
