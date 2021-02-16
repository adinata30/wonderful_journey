<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Wonderful Journey</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="header header-bg">
        <p class="header-title">
          Wonderful Journey  
        </p>
        <p class="header-subtitle">
          Blog of Indonesia Tourism  
        </p>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
        </li>
    @if(!Auth::check())
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Category
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach($categories as $category)
            <a class="dropdown-item" href="/category/<?=strtolower($category->name)?>">{{$category->name}}</a>
            @endforeach
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/about">About Us</a>
        </li>
      @else
      @if(Auth::check() && Auth::user()->role == "Member")
      <li class="nav-item">
            <a class="nav-link" href="/profile">Profil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/blog">Blog <span class="sr-only">(current)</span></a>
        </li>
      @else
      <li class="nav-item">
            <a class="nav-link" href="/admin">Admin <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/user">User <span class="sr-only">(current)</span></a>
        </li>
      @endif
      @endif
      </ul>
      <ul class="navbar-nav">
        @if(!Auth::check())
        <li class="nav-item">
            <div class="nav-item-with-icons">
                <i class="bi-person-fill nav-icon" ></i>
                <a class="nav-link" href="/register">Sign up <span class="sr-only">(current)</span></a>
            </div>
            
        </li>
        <li class="nav-item">
        <div class="nav-item-with-icons">
            <i class="bi-box-arrow-in-right nav-icon"></i>
                <a class="nav-link" href="/login">Sign in <span class="sr-only">(current)</span></a>
            </div>
        </li>
        @else
        <div class="nav-item-with-icons">
            <i class="bi-box-arrow-in-right nav-icon"></i>
                <a class="nav-link" href="/logout">Logout <span class="sr-only">(current)</span></a>
            </div>
        </li>
        @endif
        
        </ul>
        
        </div>
    </nav>
    @yield('content')
    

</body>
</html>