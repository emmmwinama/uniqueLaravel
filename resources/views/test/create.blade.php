@extends('layouts.app')

@section('content')
<div class="property-form-wrapper">
    <div class="container">
        <div class="my-4 card">
            <div class="card-header">
                Create a new property
            </div>
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    @if ($errors->any())
                        <div class="w-1 text-center alert alert-danger w-75" id="error-container">
                            <ul style="list-style: none;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session('message') }}
                        </div>
                    @endif
                </div>
                <form action="{{ route('property.store') }}" enctype="multipart/form-data" method="POST" autocomplete="on">
                    @csrf
                    <div class="form-group">
                        <label for="typropertyselect">Type of property</label>
                        <select class="form-control" id="typropertyselect" name="type">
                            <option>---Type of property---</option>
                            <option value="Residential">Residential</option>
                            <option value="Commercial">Commercial</option>
                            <option value="Land">Land</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="typeofofferselect">Type of Offer</label>
                        <select class="form-control" id="typeofofferselect" name="offer">
                            <option>---Type of Offer---</option>
                            <option value="Sale">Sale</option>
                            <option value="Rent">Rent</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="area">Area</label>
                        <input type="number" class="form-control" id="area" name="area">
                    </div>
                    <div class="form-group">
                        <label for="bedrooms">Bedrooms</label>
                        <input type="number" class="form-control" id="bedrooms" name="bedrooms">
                    </div>
                    <div class="form-group">
                        <label for="rooms">Rooms</label>
                        <input type="number" class="form-control" id="rooms" name="rooms">
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location">
                    </div>
                    <div class="form-group">
                        <label for="status">Availability</label>
                        <select name="status" id="status" class="form-control" name="status">
                            <option value="">---Select the availability---</option>
                            <option value="Available">Available</option>
                            <option value="Unavailable">Unavailable</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" name="price">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pictures">Pictures</label>
                        <input type="file" name="images[]" multiple accept="image/*" class="form-control-file" id="pictures">
                    </div>
                    <div class="form-group">
                        <label for="faetures">Other Features</label>
                        <input type="text" class="form-control" id="faetures" placeholder="List property features separated by commas" name="features">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
