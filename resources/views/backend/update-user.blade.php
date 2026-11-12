@extends('backend.master')
@section('title')
    Update User
@endsection
@section('content')
<form  action="/admin/user/update/submit" method="POST">
    @csrf
    <div class="mb-3">
        <input type="text" class="d-none" value="{{$user->id}}" name="id">
      <label for="exampleInputEmail1" class="form-label">User Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->name}}" required name="name">

    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->email}}" required name="email">

      </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" required name="password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
