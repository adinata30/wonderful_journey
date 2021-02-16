@extends('master')
@section('content')

<form action="/update/user" method="post">
    @csrf
    <div class="card update-profile-container">
        <div class="card-header ">
            Profile
        </div>
        <div class="card-body">
            
            <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Name :</label>

            <div class="col-md-6">
            <input name="name" type="text" class="form-control" value="{{$user->name}}">
                        
            </div>
            </div>
            <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">Email :</label>

            <div class="col-md-6">
            <input name="email" type="email" class="form-control" value="{{$user->email}}">
                        
            </div>
            </div>
            <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right">Phone :</label>

            <div class="col-md-6">
            <input name="phone" type="text" class="form-control" value="{{$user->phone}}">
                        
            </div>
            </div>
            <input type="submit" value="Update" class="btn btn-primary update-btn">
        </div>
    </div>
</form>
@endsection