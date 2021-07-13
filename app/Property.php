<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';

    protected $fillable = [
        'type',
        'typeofoffer',
        'area',
        'bedrooms',
        'rooms',
        'location',
        'status',
        'price',
        'description'
    ];

    public function propertyFeatures(){
        return $this->hasMany(\App\PropertyFeature::class);
    }
    public function propertyPhotos(){
        return $this->hasMany(\App\PropertyPhoto::class);
    }
}
