@extends('layouts.app')

@section('content')

<div class="property">
    <div class="container py-4">
        <div class="carousel-wrapper">
            <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php
                        $isFirst = true;
                        $number = 0;
                    ?>

                    @foreach ($pictures as $picture)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $number++ }}" class="active {{ $isFirst ? 'active' : '' }}"></li>
                    {{ $isFIrst = false }}
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    <?php
                        $isFirst = true;
                    ?>
                    @foreach ($pictures as $picture)
                    <div class="carousel-item {{ $isFirst ? 'active': '' }}">
                        <img class="d-block w-100" src="{{ asset('storage/'.$picture->path) }}" alt="First slide">
                    </div>
                    {{ $isFirst = false }}
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="mt-4">
            <div class="property-det">
                <div class="details-header border-bottom d-flex justify-content-between align-items-center">
                    <h1 class="py-2 w-100">Property Details</h1>
                    <div class="flex-row d-flex">
                        <button type="button" class="mr-2 btn btn-primary text-nowrap print-property">Print bronchure</button>
                        <a type="button" class="btn btn-success text-nowrap ">Talk to our agent</a>
                    </div>
                </div>
                <div class="border-bottom-0 details">

                    <p>Location: <span class="ml-2 text-muted">{{ $property->location }}</span></p>
                    <p>Offer: <span class="ml-2 text-muted">{{ $property->typeofoffer }}</span></p>
                    <p>Price: <span class="ml-2 text-muted"> US${{ number_format($property->price, 2) }}</span></p>
                    <p>Type: <span class="ml-2 text-muted">{{ $property->type }}</span></p>
                    <p>Lot Area: <span class="ml-2 text-muted">{{ $property->area }}</span></p>
                    <p>Living space: <span class="ml-2 text-muted">{{ $property->area }}</span></p>
                    <p>Bedrooms: <span class="ml-2 text-muted">{{ $property->bedrooms }}</span></p>
                    <p>Rooms: <span class="ml-2 text-muted">{{ $property->rooms }}</span></p>
                    <p class="my-4">
                        {{ $property->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/custom/property.js') }}"></script>

@endsection
