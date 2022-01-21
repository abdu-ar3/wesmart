@extends('layouts.global')

@section('title') Edit User @endsection

@section('content')
<div class="col-md-8">

    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif

    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('users.update', [$user->id])}}" method="POST">
        @csrf
        <input type="hidden" value="PUT" name="_method">
        <label for="name">Name</label>
        <input value="{{$user->name}}" class="form-control" placeholder="Full Name" type="text" name="name" id="name" />
        <br>

        <label for="username">Username</label>
        <input value="{{$user->username}}" class="form-control" placeholder="username" type="text" name="username" id="username" />
        <br>

        <label for="phone">Phone number</label>
        <br>
        <input type="text" name="phone" class="form-control" value="{{$user->phone}}">
        <br>
        <label for="address">Address</label>
        <textarea name="address" id="address" class="form-control">{{$user->address}}
        </textarea>
        <br>
        <label for="avatar">Avatar image</label>
        <br>

        Current avatar: <br>
        @if($user->avatar)
        <img src="{{asset('storage/'.$user->avatar)}}" width="120px" />
        <br>
        @else
        No avatar
        @endif
        <br>
        <input id="avatar" name="avatar" type="file" class="form-control">
        <small class="text-muted">Kosongkan jika tidak ingin mengubah
            avatar</small>

        <hr class="my-3">

        <label for="email">Email</label>
        <input value="{{$user->email}}" disabled class="form-control" placeholder="user@mail.com" type="text" name="email" id="email" />
        <br>

        <label for="level">Level (Tidak perlu diubah)</label>
        <input value="{{$user->level}}" placeholder="user" class="form-control" type="text" name="level" id="level" />
        <br>

        <input class="btn btn-primary" type="submit" value="Save" />
    </form>
</div>
@endsection