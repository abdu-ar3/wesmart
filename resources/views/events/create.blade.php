@extends("layouts.global")
@section("title") Create Events @endsection
@section("content")


<div class="col-md-8">

    <!-- Message -->
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif


    <!-- Form -->
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('event.store')}}" method="POST">

        <!-- Title -->
        <h4>Create Events</h4>
        <br>

        @csrf

        <!-- Name Events -->
        <label for="name">Event Name</label>
        <input value="{{old('name')}}" class="form-control {{$errors->first('name')? "is-invalid": ""}}" placeholder="Ketikan nama Kegiatan" type="text" name="name" id="name" />
        <div class="invalid-feedback">
            {{$errors->first('Event Name')}}
        </div>
        <br>

        <!-- tanggal -->
        <label for="tanggal">Tanggal</label>
        <input value="{{old('tanggal')}}" class="form-control {{$errors->first('tanggal')? "is-invalid": ""}}" placeholder="Ketikan tanggal" type="text" name="tanggal" id="tanggal" />
        <div class="invalid-feedback">
            {{$errors->first('Tanggal')}}
        </div>
        <br>

        <!-- deskripsi -->
        <label for="deskripsi">Deskripsi</label>
        <input value="{{old('deskripsi')}}" class="form-control {{$errors->first('deskripsi')? "is-invalid": ""}}" placeholder="Ketikan deskripsi" type="text" name="deskripsi" id="deskripsi" />
        <div class="invalid-feedback">
            {{$errors->first('Deskripsi')}}
        </div>
        <br>

        <!-- Image -->
        <label for="avatar">Avatar image</label>
        <br>
        <input id="avatar" name="avatar" type="file" class="form-control">
        <hr class="my-3">

        <input class="btn btn-primary" type="submit" value="Save" />
    </form>
</div>
@endsection