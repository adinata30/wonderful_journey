@extends('master')
@section('content')
<table class="table users-table table-bordered">
  <thead class="thead   table-striped table-hover">
    <tr class="bg-success">
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td scope="col">{{$user->name}}</td>
        <td scope="col">{{$user->email}}</td>
        <td scope="col">
            <form action="/delete/user/{{$user->id}}" method="post">
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