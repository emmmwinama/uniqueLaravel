<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Property;
use App\PropertyPhoto;
use App\PropertyFeature;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    public function index(){
        $properties = DB::table('properties')
            ->select('properties.id', 'type', 'typeofoffer', 'area', 'bedrooms', 'rooms', 'location', 'status', 'price', 'description', 'path')
            ->join('property_photos', function($join){
                $join->on('properties.id', '=', 'property_photos.property_id')
                    ->where('category', '=', 'main');
            })
            ->orderBy('properties.id', 'desc')
            ->paginate(9);

        return view('test.index', [
            'properties' => $properties
        ]);
    }

    public function show($id){
        $property = Property::find($id);
        $property_pics = DB::table('property_photos')
            ->where('property_id', '=', $id)
            ->orderBy('category', 'desc')
            ->get();

        return view('test.show', [
            'property' => $property,
            'pictures' => $property_pics
        ]);
    }

    public function create(){
        return view('test.create');
    }

    public function edit(){
        return view('test.edit');
    }

    public function store(Request $request){
        $request->validate([
            'type' => 'required|string',
            'offer' => 'required|string',
            'area' => 'required|numeric|gt:0',
            'bedrooms' => 'required|numeric|gte:0',
            'rooms' => 'required|numeric|gte:0',
            'location' => 'required|string',
            'status' => 'required',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'features' => 'string',
            'images' => 'required',
            'images.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        $property = new Property();
        $property->type = $request->type;
        $property->typeofoffer = $request->offer;
        $property->area = $request->area;
        $property->bedrooms = $request->bedrooms;
        $property->rooms = $request->rooms;
        $property->location = $request->location;
        $property->status = $request->status == 'Available'? 1 : 0;
        $property->price = $request->price;
        $property->description = $request->description;
        $property->save();


        if($request->hasFile('images')){
            $checker = true;
            foreach($request->file('images') as $image){
                $filename = time().'_'.$image->getClientOriginalName();
                $image->storeAs('public', $filename);

                $propertyPhoto = new PropertyPhoto();
                $propertyPhoto->category = $checker ? 'main' : 'other';
                $checker = false;
                $propertyPhoto->path = $filename;
                $propertyPhoto->property_id = $property->id;
                $propertyPhoto->save();
            }
        }

        $features = array_map('trim',explode(",", $request->features));

        foreach($features as $feature){
            $propertyFeature = new PropertyFeature();
            $propertyFeature->property_id = $property->id;
            $propertyFeature->name = $feature;
            $propertyFeature->save();
        }

        Session::flash('message', 'Property has been added successfully. Thank you.');
        return redirect(route('properties'));

    }

    public function update($id){
        return view('test.update');
    }

    public function destroy(Property $property){
        $property->delete();
        Session::flash('delete', 'Property has been deleted successfully. Thank you');
        return redirect(route('properties'));
    }
}
