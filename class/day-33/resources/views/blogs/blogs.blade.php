@extends('master')

@section('title')
    blogs
@endsection

@section('body')




    <section class="py-5">
        <div class="container">
            <div class="row">

                @foreach($lop as $blog)

                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="{{asset('/')}}assets/img/{{$blog['image']}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h2>{{$blog['title']}}</h2>
                            <p>{{$blog['short_description']}}</p>

                            <a href="{{route('details',['id_id'=>$blog['id']])}}" class="btn btn-success">Read More..</a>
                        </div>
                    </div>
                </div>

                @endforeach


            </div>
        </div>
    </section>






@endsection

