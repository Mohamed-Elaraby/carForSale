<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class relation_car_specification extends Model
{
    protected $fillable = ['car_id', 'specification_id'];
    public $timestamps = false;
}
