@extends('layouts.global')
@section('title') Create Books @endsection
@section('content')

<!-- Main Content -->
<!-- <div class="main-content"> -->
<form enctype="multipart/form-data" action="{{route('book.store')}}" method="POST">

    <section class="section">
        @csrf
        <div class="section-header">
            <h1>Help Facilities</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Forms</a></div>
                <div class="breadcrumb-item">Book Donation</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Book Donation</h2>
            <p class="section-lead">Help reading growth in Tangerang district by donating</p>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        <div class="card-body">

                            <!-- Name -->
                            <label for="name">Name</label>
                            <input value="{{old('name')}}" class="form-control {{$errors->first('name')? "is-invalid": ""}}" placeholder="Ketikan name" type="text" name="name" id="name" />
                            <div class="invalid-feedback">
                                {{$errors->first('name')}}
                            </div>
                            <br>

                            <!-- Phone Number -->
                            <label for="name">Phone Number</label>
                            <input value="{{old('no_hp')}}" class="form-control {{$errors->first('no_hp')? "is-invalid": ""}}" placeholder="Ketikan name" type="text" name="no_hp" id="no_hp" />
                            <div class="invalid-feedback">
                                {{$errors->first('no_hp')}}
                            </div>
                            <br>


                            <!-- Address -->
                            <label for="alamat">Address</label>
                            <input value="{{old('alamat')}}" class="form-control {{$errors->first('alamat')? "is-invalid": ""}}" placeholder="Ketikan alamat" type="text" name="alamat" id="alamat" />
                            <div class="invalid-feedback">
                                {{$errors->first('alamat')}}
                            </div>
                            <br>


                            <!-- Profesi -->
                            <label for="pekerjaan">Profession</label>
                            <input value="{{old('pekerjaan')}}" class="form-control {{$errors->first('pekerjaan')? "is-invalid": ""}}" placeholder="Ketikan pekerjaan" type="text" name="pekerjaan" id="pekerjaan" />
                            <div class="invalid-feedback">
                                {{$errors->first('pekerjaan')}}
                            </div>
                            <br>

                            <!-- Instansi -->
                            <label for="instansi">Instance</label>
                            <input value="{{old('instansi')}}" class="form-control {{$errors->first('instansi')? "is-invalid": ""}}" placeholder="Ketikan instansi" type="text" name="instansi" id="instansi" />
                            <div class="invalid-feedback">
                                {{$errors->first('instansi')}}
                            </div>
                            <br>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Select</h4>
                        </div>
                        <div class="card-body">
                            <div class="section-title mt-0">Total</div>
                            <div class="form-group">
                                <label>Number of books</label>
                                <select class="form-control" name="jumlah">
                                    <option>10 (Sepuluh)</option>
                                    <option>20 (Dua Puluh)</option>
                                    <option>30 (Tiga Puluh)</option>
                                    <option>40 (Empat Puluh)</option>
                                    <option>50 (Lima Puluh)</option>
                                    <option>Etc</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Date</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label>Delivery Date</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                    </div>
                                    <input value="{{old('tanggal_pengiriman')}}" class="form-control {{$errors->first('tanggal_pengiriman')? "is-invalid": ""}}" placeholder="Ketikan tanggal_pengiriman" type="text" name="tanggal_pengiriman" id="tanggal_pengiriman" />
                                    <div class="invalid-feedback">
                                        {{$errors->first('tanggal_pengiriman')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <input class="btn btn-primary" type="submit" value="Save" />
</form>

@endsection