@extends('layouts.app')

@section('content')
<div class="container-fluid p-0" style="margin-top: 80px; border-radius: 25%">
    <div class="row g-0">
        <div class="col-md-7">
            <div id="carouselControl" class="carousel slide h-100" data-bs-ride="carousel">
                <div class="carousel-inner h-100">
                    <div class="carousel-item active">
                        <img src="https://placekitten.com/800/400" class="d-block w-100 h-100" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://placekitten.com/800/401" class="d-block w-100 h-100" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="https://placekitten.com/800/402" class="d-block w-100 h-100" alt="Slide 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselControl" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselControl" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-5 d-flex align-items-center">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Lorem Ipsum</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    #carouselControl {
        max-width: 100%;
        margin: auto;
        height: 100%;
    }
</style>
@endsection
