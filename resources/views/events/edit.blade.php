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
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('event.update', [$event->id])}}" method="POST">
        @csrf
        <input type="hidden" value="PUT" name="_method">
        <label for="name">Event Name</label>
        <input value="{{$event->name}}" class="form-control" placeholder="Nama Taman Bacaan Masyarakat" type="text" name="name" id="name" />
        <br>

        <label for="tanggal">Date</label>
        <input value="{{$event->tanggal}}" class="form-control" placeholder="tanggal" type="text" name="tanggal" id="tanggal" />
        <br>


        <label for="deskripsi">Description</label>
        <br>
        <input type="text" name="deskripsi" class="form-control" value="{{$event->deskripsi}}">
        <br>

        <label for="avatar">Avatar image</label>
        <br>
        Current avatar: <br>
        @if($event->avatar)
        <img src="{{asset('storage/'.$event->avatar)}}" width="120px" />
        <br>
        @else
        No avatar
        @endif
        <br>
        <input id="avatar" name="avatar" type="file" class="form-control">
        <small class="text-muted">Kosongkan jika tidak ingin mengubah
            avatar</small>

        <hr class="my-3">


        <input class="btn btn-primary" type="submit" value="Save" />
    </form>
</div>
@endsection