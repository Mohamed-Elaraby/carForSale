<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(Gallery::class);
    }
}
