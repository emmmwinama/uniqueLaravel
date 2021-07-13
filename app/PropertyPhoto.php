<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyPhoto extends Model
{
    protected $table = "property_photos";

    protected $fillable = [
        'property_id',
        'category',
        'path',
    ];

    public function property(){
        return $this->belongsTo(\App\Property::class);
    }
}
