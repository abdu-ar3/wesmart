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
        <!-- TBM Name -->
        <label for="nama_tbm">TBM Name</label>
        <input value="{{old('nama_tbm')}}" class="form-control {{$errors->first('nama_tbm')? "is-invalid": ""}}" placeholder="Nama Taman Bacaan Masyarakat" type="text" name="nama_tbm" id="nama_tbm" />
        <div class="invalid-feedback">
            {{$errors->first('TBM Name')}}
        </div>
        <br>

        <!-- Addres -->
        <label for="alamat">Addres</label>
        <input value="{{old('alamat')}}" class="form-control {{$errors->first('alamat')? "is-invalid": ""}}" placeholder="Ketikan Alamat TBM" type="text" name="alamat" id="alamat" />
        <div class="invalid-feedback">
            {{$errors->first('Address')}}
        </div>
        <br>

        <!-- Manager Name -->
        <label for="nama_pengelola">Manager Name</label>
        <input value="{{old('nama_pengelola')}}" class="form-control {{$errors->first('nama_pengelola')? "is-invalid": ""}}" placeholder="Ketikan Nama Pengelola" type="text" name="nama_pengelola" id="nama_pengelola" />
        <div class="invalid-feedback">
            {{$errors->first('Manager Name')}}
        </div>
        <br>

        <!-- Phone Number -->
        <label for="no_telpon">Phone Number</label>
        <input value="{{old('no_telpon')}}" class="form-control {{$errors->first('no_telpon')? "is-invalid": ""}}" placeholder="Ketikan Nomor Telpon" type="text" name="no_telpon" id="no_telpon" />
        <div class="invalid-feedback">
            {{$errors->first('Phone Number')}}
        </div>
        <br>

        <input class="btn btn-primary" type="submit" value="Save" />
    </form>
</div>
@endsection