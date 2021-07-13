@extends('layouts.app')

@section('content')

<div class="properties" id="properties">
    <div class="container">
        <div class="text-center row">
            <div class="mb-4 col-md-12">
                @if(Session::has('message'))
                    <div class="my-4 alert alert-success">
                        <a class="close" data-dismiss="alert">×</a>
                        {{ Session('message') }}
                    </div>
                @endif
                <h1 class="mb-3 display-3 fw-bold text-capitalize">Properties</h1>
                <p class="mx-auto col-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae provident, optio, quaerat libero iure velit at, esse dicta similique beatae voluptatem pariatur a repellat molestiae perferendis laudantium sit? Laborum accusamus ipsam deleniti provident inventore!</p>
            </div>
        </div>
        <div class="text-center row">
            <div class="col-md-12 mb">
                <button class="btn btn-outline-primary" type="button">ALL</button>
                <button class="btn btn-outline-primary" type="button">land</button>
                <button class="btn btn-outline-primary" type="button">Offices</button>
                <button class="btn btn-outline-primary" type="button">Residences</button>
                <button class="btn btn-outline-primary" type="button">Commercial</button>
            </div>
        </div>
        @guest

        @else
            <div class="m-2 col">
                <div class="border rounded-0 card card-default">
                    <div class="card-body">
                        <a href="{{ route('property.create') }}" class="btn btn-lg bg-primary text-light">Create <i class="fas fa-plus text-light"></i></a>
                    </div>
                </div>
            </div>
        @endguest
    </div>
    <div class="container">
        <div class="mb-6 products">
            @foreach ($properties as $property)
                <div class="mb-3 card " style="flex: 0 1 350px;">
                    <img class="card-img-top" src="{{ asset('storage/'.$property->path) }}" alt="Card image" style="width:100%; height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h4 class="card-title">${{ number_format($property->price, 2) }}</h4>
                        <p class="card-text">{{ $property->location }}</p>
                        <a href="/properties/{{ $property->id }}" class="btn btn-primary">View <i class="fas fa-eye"></i></a>
                        @guest

                        @else

                        <a href="/admin/properties/{{ $property->id }}/edit" class="btn btn-success">Edit <i class="fas fa-edit"></i></a>

                        <form id="propdelete" action="/admin/properties/{{ $property->id }}" method="POST" style="display: inline-block">
                            @method('DELETE')
                            @csrf
                            <button type="button" data-toggle="modal" data-target="#deletemodal" class="btn btn-danger text-light">Delete <i class="fas fa-trash-alt"></i></button>
                            <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Delete</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete the property located in {{ $property->location }}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary" onclick="document.getElementById('propdelete').submit()">OK</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endguest
                    </div>
                </div>
            @endforeach
        </div>
        <div class="" style="margin: 10px 0">
            {{ $properties->links() }}
        </div>
    </div>
</div>


@endsection
