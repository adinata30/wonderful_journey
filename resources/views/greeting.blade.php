
@extends('master')

@section('navbar')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Category
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach($categories as $category)
            <a class="dropdown-item" href="#">{{$category->name}}</a>
            @endforeach
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
        </li>
        
        </ul>
        <ul class="navbar-nav">
        <div class="nav-item-with-icons">
            <i class="bi-box-arrow-in-right nav-icon"></i>
                <a class="nav-link" href="logout">Logout <span class="sr-only">(current)</span></a>
            </div>
        </li>
       
        
        </ul>
        
        </div>
    </nav>
@endsection
@section('content')
    <a class="header-subtitle" style="margin-left:5px;">Welcome {{$user->name}}</a>
@endsection
