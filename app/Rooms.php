<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
    
}
