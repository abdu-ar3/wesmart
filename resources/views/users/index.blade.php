@extends("layouts.global")
@section("title") Users list @endsection
@section("content")

<div class="col-md-12">

    <!-- Message -->
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif

    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3">

        <!-- Title -->
        <h3>User List</h3>

        <!-- Input User -->
        <div class="row mb-3">
            <div class="col-md-12 text-right">
                <a href="{{route('users.create')}}" class="btn btn-primary">Create User</a>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th><b>Name</b></th>
                    <th><b>Username</b></th>
                    <th><b>Email</b></th>
                    <th><b>Avatar</b></th>
                    <th><b>Action</b></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if($user->avatar)
                        <img src="{{asset('storage/'.$user->avatar)}}" width="70px" />
                        @else
                        N/A
                        @endif
                    </td>
                    <td>

                        <a class="btn btn-info text-white btn-sm" href="{{route('users.edit', [$user->id])}}">Edit</a>
                        <form onsubmit="return confirm('Delete this user permanently?')" class="d-inline" action="{{route('users.destroy', [$user->id])}}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                        </form>
                        <a href="{{route('users.show', [$user->id])}}" class="btn btn-primary btn-sm">Detail</a>
                </tr>
                @endforeach
            </tbody>
        </table>
    </form>
</div>
@endsection