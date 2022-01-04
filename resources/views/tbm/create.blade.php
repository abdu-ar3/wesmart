@extends("layouts.global")
@section("title") Create TBM @endsection
@section("content")


<div class="col-md-8">

    <!-- Message -->
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif


    <!-- Form -->
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('tbm.store')}}" method="POST">

        <!-- Title -->
        <h4>Create TBM</h4>
        <br>

        @csrf
        <label for="name">TBM Name</label>
        <input class="form-control" placeholder="Nama Taman Bacaan Masyarakat" type="text" name="nama_tbm" id="nama_tbm" />
        <br>
        <label for="address">Address</label>
        <textarea name="alamat" id="alamat" class="form-control"></textarea>
        <br>
        <label for="name">Manager Name</label>
        <input class="form-control" placeholder="Nama Pengelola" type="text" name="nama_pengelola" id="name" />
        <br>
        <label for="phone">Phone number</label>
        <br>
        <input type="text" name="no_telpon" class="form-control">
        <br>

        <input class="btn btn-primary" type="submit" value="Save" />
    </form>
</div>
@endsection