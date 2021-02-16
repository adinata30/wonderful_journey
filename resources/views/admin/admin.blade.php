@extends('master')
@section('content')
<table class="table users-table table-bordered">
  <thead class="thead   table-striped table-hover">
    <tr class="bg-success">
        <th scope="col">Article ID</th>
        <th scope="col">Title</th>
        <th scope="col">Writer ID</th>
        <th scope="col">Writer</th>
        <th scope="col">Action</th>
    </tr>
    @foreach($articles as $article)
    <tr>
        <td scope="col">{{$article->id}}</td>
        <td scope="col">{{$article->title}}</td>
        <td scope="col">{{$article->user->id}}</td>
        <td scope="col">{{$article->user->name}}</td>
        <td scope="col">
            <form action="/delete/article/{{$article->id}}" method="post">
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
@endsection