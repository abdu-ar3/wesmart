@extends('layouts.global')

@section('title') Edit E Book @endsection

@section('content')
<div class="col-md-8">

    <!-- Message -->
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif


    <!-- FORM -->
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('digital_reads.update', [$digital_read->id])}}" method="POST">
        <h4>EDIT E-Books</h4>
        @csrf
        <input type="hidden" value="PUT" name="_method">
        <label for="nama_tbm">TBM Name</label>
        <input value="{{$digital_read->title}}" class="form-control" placeholder="Edit Nama Judul" type="text" name="title" id="title" />
        <br>

        <label for="author">Author (Penulis)</label>
        <input value="{{$digital_read->author}}" class="form-control" placeholder="author" type="text" name="author" id="author" />
        <br>


        <label for="publisher">Publisher (Penerbit)</label>
        <br>
        <input type="text" name="publisher" class="form-control" value="{{$digital_read->publisher}}">
        <br>

        <input class="btn btn-primary" type="submit" value="Save" />
    </form>
</div>
@endsection