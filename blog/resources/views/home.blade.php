<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', '100 Days Of Code')

@section('content')
<div class="overlay text-dark py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12 text-center">
                <h1 class="display-4 fw-bold text-black">
                    100 Days Of Code
                </h1>
                <p class="lead text-black">Documenting 100 days of Code</p>
                <a href="/posts" class="btn btn-primary btn-lg mb-3">Get Started</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/hero.png') }}" class="img-fluid" style="max-width: 100%;" alt="Hero Image">
            </div>
        </div>
    </div>
</div>


@endsection
