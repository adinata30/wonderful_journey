@extends('master')
@section('content')
<div class="blog-container">
<a href="/new-article"><button class="btn btn-primary btn-add-blog">Create New Blog</button></a>
<table class="table view-blog-table table-bordered">
  <thead class="thead   table-striped table-hover">
    <tr class="bg-success">
        <th scope="col">Title</th>
        <th scope="col">Action</th>
    </tr>
    @foreach($user->articles as $blog)
    <tr>
        <td scope="col"><a href="/article/{{$blog->id}}">{{$blog->title}}</td>
        <td scope="col">
        <form action="/delete-article/{{$blog->id}}" method="post">
        @csrf
        <input type="submit" class="btn btn-primary" value="Delete">
        </form>
        </td>
    </tr>
    @endforeach
  </thead>
  <tbody>
    
  </tbody>
</table>
</div>
@endsection