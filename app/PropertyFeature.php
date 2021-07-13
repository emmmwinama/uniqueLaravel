<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyFeature extends Model
{
    //
    protected $table = 'property_features';
    protected $fillable = [
        'property_id', 'name'
    ];

    public function property(){
        return $this->belongsTo(\App\Property::class);
    }
}
