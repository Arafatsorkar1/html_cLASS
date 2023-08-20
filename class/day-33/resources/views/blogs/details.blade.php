@extends('master')

@section('title')
    Blog details
@endsection

@section('body')


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <img src="{{asset('/')}}assets/img/{{$arafat['image']}}" alt="" class="w-100">
                </div>
                <div class="col-mt-4">
                    <div class="col-md-12">
                        <h2>{{$arafat['title']}}</h2>
                        <p>{{$arafat['long_description']}}</p>
                    </div>

                </div>
            </div>
        </div>
    </section>




@endsection
