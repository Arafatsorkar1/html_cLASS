@extends('master')

@section('title')
    Full name
@endsection

@section('body')


    <section class="py-5">
        <div class="container">
             <div class="row">
                 <div class="col-md-6 mx-auto">
                     <div class="card">
                         <div class="card-header"><h3>Full Name</h3></div>


                     <div class="card-body">
                         <form action="{{route('get-full-name')}}" method="post">

                             @csrf


                         <div class="row mt-3">
                             <label for="" class="col-md-4">First Name</label>
                             <div class="col-md-8">
                                 <input type="text" name="first_name" class="form-control">
                             </div>
                         </div>

                         <div class="row mt-3">
                             <label for="" class="col-md-4">Last Name</label>
                             <div class="col-md-8">
                                 <input type="text" name="last_name" class="form-control">
                             </div>
                         </div>


                         <div class="row mt-3">
                             <label for="" class="col-md-4">Full Name</label>
                             <div class="col-md-8">
                                 <input type="text" class="form-control" value="{{Session::get('result')}}">
                             </div>
                         </div>
                         <div class="row mt-3">
                             <label for="" class="col-md-4"></label>
                             <div class="col-md-8">
                                 <input type="submit" class="btn btn-success" value="Get Full Name">
                             </div>
                         </div>

                         </form>


                     </div>

                     </div>
                 </div>
             </div>
        </div>
    </section>





@endsection
