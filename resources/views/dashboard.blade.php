@extends('frontend.main_master')

@section('content')
    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img class="card-img-top" src="{{ (!empty($editData->profile_photo_path))? url('upload/admin_images/'.$editData->profile_photo_path):url('upload/no_image.jpg') }}" height="100%" width="100%" style="border-radius:50%;" alt="" srcset="">
                    <ul class="list-group list-group-flush">
                        <a href="{{route('frontend.index')}}" class="btn btn-primary btn-sm btn-block">Home</a>
                        <a href="" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                        <a href="" class="btn btn-primary btn-sm btn-block">Change Password</a>
                        <a href="" class="btn btn-danger btn-sm btn-block">Logout</a>
                    </ul>
                </div> 
                <div class="col-md-2">

                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h3 class="text-center"><span class="text-danger">Hi.... </span><strong>{{Auth::user()->name}}</strong> Welcome to Ecommerce Shop</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection