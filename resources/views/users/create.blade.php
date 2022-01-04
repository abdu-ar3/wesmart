@extends("layouts.global")
@section("title") Create User @endsection
@section("content")

<!-- Title -->
<br><br>
<h1>Create User</h1>

<div class="col-md-8">

    <!-- Message -->
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif

    <!-- Form -->
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('users.store')}}" method="POST">
        @csrf
        <!-- Name -->
        <label for="name">Name</label>
        <input value="{{old('name')}}" class="form-control {{$errors->first('name')
? "is-invalid": ""}}" placeholder="Full Name" type="text" name="name" id="name" />
        <div class="invalid-feedback">
            {{$errors->first('name')}}
        </div>
        <br>

        <!-- Username -->
        <label for="username">Username</label>
        <input value="{{old('username')}}" class="form-control {{$errors->first('username') ? "is-invalid" : ""}}" placeholder="username" type="text" name="username" id="username" />
        <div class="invalid-feedback">
            {{$errors->first('username')}}
        </div>
        <br>

        <label for="">Roles</label>
        <br>
        <input type="checkbox" name="roles[]" id="ADMIN" value="ADMIN">
        <label for="ADMIN">Admin</label>
        <input type="checkbox" name="roles[]" id="USER" value="USER">
        <label for="USER">User</label>
        <br>
        <br>
        <label for="phone">Phone number</label>
        <br>
        <input type="text" name="phone" class="form-control">
        <br>
        <label for="address">Address</label>
        <textarea name="address" id="address" class="form-control"></textarea>
        <br>
        <label for="avatar">Avatar image</label>
        <br>
        <input id="avatar" name="avatar" type="file" class="form-control">
        <hr class="my-3">

        <!-- Email -->
        <label for="email">Email</label>
        <input value="{{old('email')}}" class="form-control {{$errors->first('email') ? "is-invalid" : ""}}" placeholder="user@mail.com" type="text" name="email" id="email" />
        <div class="invalid-feedback">
            {{$errors->first('email')}}
        </div>
        <br>

        <!-- Password -->
        <label for="password">Password</label>
        <input class="form-control {{$errors->first('password') ? "isinvalid" : ""}}" placeholder="password" type="password" name="password" id="password" />
        <div class="invalid-feedback">
            {{$errors->first('password')}}
        </div>
        <br>

        <!-- Confirm Password -->
        <label for="password_confirmation">Password Confirmation</label>
        <input class="form-control {{$errors->first('password_confirmation') ? "is-invalid" : ""}}" placeholder="password confirmation" type="password" name="password_confirmation" id="password_confirmation" />
        <div class="invalid-feedback">
            {{$errors->first('password_confirmation')}}
        </div>
        <br>

        <input class="btn btn-primary" type="submit" value="Save" />
    </form>
</div>
@endsection