@extends('master')

@section('title')
    Blog Details
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <img src="{{ asset('/') }}assets/img/{{ $blog['image'] }}" alt="" class="w-100">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <h2>{{ $blog['title'] }}</h2>
                    <p>{{ $blog['long_description'] }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
