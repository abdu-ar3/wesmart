@extends('layouts.global')

@section('title') Edit TBM @endsection

@section('content')
<div class="col-md-8">

    <!-- Message -->
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif

    <!-- FORM -->
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('tbm.update', [$tbm->id])}}" method="POST">
        @csrf
        <input type="hidden" value="PUT" name="_method">
        <label for="nama_tbm">TBM Name</label>
        <input value="{{$tbm->nama_tbm}}" class="form-control" placeholder="Nama Taman Bacaan Masyarakat" type="text" name="nama_tbm" id="nama_tbm" />
        <br>

        <label for="alamat">Addres</label>
        <input value="{{$tbm->alamat}}" class="form-control" placeholder="alamat" type="text" name="alamat" id="alamat" />
        <br>


        <label for="nama_pengelola">Manager Name</label>
        <br>
        <input type="text" name="nama_pengelola" class="form-control" value="{{$tbm->nama_pengelola}}">
        <br>

        <label for="no_telpon">Phone number</label>
        <br>
        <input type="text" name="no_telpon" class="form-control" value="{{$tbm->no_telpon}}">
        <br>


        <input class="btn btn-primary" type="submit" value="Save" />
    </form>
</div>
@endsection