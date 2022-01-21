@extends("layouts.global")
@section("title") Users Detail @endsection
@section("content")

<div class="card col-md-8">
    <div class="card-header">
        <h3>Users Show</h3>
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <b>Name:</b> <br />
            {{$user->name}}

            <br><br>
            <b>Image:</b><br>
            @if($user->avatar)
            <img src="{{asset('storage/'. $user->avatar)}}" width="128px" />
            @else
            No avatar
            @endif
            <br>
            <br>
            <b>Username:</b><br>
            {{$user->email}}
            <br>
            <br>
            <b>Phone number</b> <br>
            {{$user->phone}}
            <br><br>
            <b>Address</b> <br>
            {{$user->address}}
            <br><br>
            <b>Level:</b> <br />
            {{$user->level}} <br><br>

            <a class="btn btn-info text-white btn-sm" href="{{route('users.edit', [$user->id])}}">Edit Profile</a>

            <footer class="blockquote-footer">Budayakan baca <cite title="Source Title">Menjadi Habit</cite></footer>
        </blockquote>
    </div>
</div>

@endsection