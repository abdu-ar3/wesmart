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
        <label for="name">Name Event</label>
        <input class="form-control" placeholder="Ketik nama kegiatan" type="text" name="name" id="name" />
        <br>
        <label for="tanggal">Tanggal</label>
        <input class="form-control" placeholder="Ketik tanggal kegiatan" type="text" name="tanggal" id="tanggal" />
        <br>
        <label for="dekripsi">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
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