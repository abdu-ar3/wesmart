@extends('layouts.global')
@section('title') Create Category @endsection
@section('content')
<div class="col-md-8">
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('categories.store')}}" method="POST">
        @csrf

        <!-- Category Name -->
        <label for="name">Category Name</label>
        <input value="{{old('name')}}" class="form-control {{$errors->first('name')? "is-invalid": ""}}" placeholder="Masukan nama kategori" type="text" name="name" id="name" />
        <div class="invalid-feedback">
            {{$errors->first('Category Name')}}
        </div>
        <br>

        <!-- Deskripsi -->
        <label for="deskripsi">Deskripsi</label>
        <input value="{{old('deskripsi')}}" class="form-control {{$errors->first('deskripsi')? "is-invalid": ""}}" placeholder="Ketikan Deskripsi" type="text" name="deskripsi" id="deskripsi" />
        <div class="invalid-feedback">
            {{$errors->first('Deskripsi')}}
        </div>
        <br>

        <!-- Sinopsis -->
        <label for="sinopsis">Sinopsis</label>
        <input value="{{old('sinopsis')}}" class="form-control {{$errors->first('sinopsis')? "is-invalid": ""}}" placeholder="Ketikan sinopsis" type="text" name="sinopsis" id="sinopsis" />
        <div class="invalid-feedback">
            {{$errors->first('Sinopsis')}}
        </div>
        <br>


        <label>Category image</label>
        <input type="file" class="form-control" name="image" />

        <br>
        <input type="submit" class="btn btn-primary" value="Save" />
    </form>
</div>
@endsection