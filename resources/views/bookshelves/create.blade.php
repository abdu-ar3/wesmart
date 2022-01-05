@extends('layouts.global')
@section('title') Create Bookshelf @endsection
@section('content')

<!-- Main Content -->
<!-- <div class="main-content"> -->
<form enctype="multipart/form-data" action="{{route('bookshelves.store')}}" method="POST">

    <section class="section">
        @csrf
        <div class="section-header">
            <h1>Help Facilities</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Help Facilities</a></div>
                <div class="breadcrumb-item">Bookshelf Donation</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Bookshelf Donation</h2>
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
                                {{$errors->first('Name')}}
                            </div>
                            <br>

                            <div class="form-group">
                                <label>Phone Number</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="phone_number" class="form-control phone-number" placeholder="Masukan No Telpon">
                                </div>
                            </div>

                            <!-- Address -->
                            <label for="addres">Address</label>
                            <input value="{{old('addres')}}" class="form-control {{$errors->first('addres')? "is-invalid": ""}}" placeholder="Ketikan alamat" type="text" name="addres" id="addres" />
                            <div class="invalid-feedback">
                                {{$errors->first('Address')}}
                            </div>
                            <br>

                            <!-- Profession -->
                            <label for="profesion">Profesion</label>
                            <input value="{{old('profesion')}}" class="form-control {{$errors->first('profesion')? "is-invalid": ""}}" placeholder="Ketikan Pekerjaan Anda" type="text" name="profesion" id="profesion" />
                            <div class="invalid-feedback">
                                {{$errors->first('Profesion')}}
                            </div>
                            <br>

                            <!-- Instance -->
                            <label for="instance">Instance</label>
                            <input value="{{old('instance')}}" class="form-control {{$errors->first('instance')? "is-invalid": ""}}" placeholder="Ketikan Instansi" type="text" name="instance" id="instance" />
                            <div class="invalid-feedback">
                                {{$errors->first('Instance')}}
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
                                <label>Number of bookshelves (Rak Buku)</label>
                                <select class="form-control" name="total">
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
                                    <input value="{{old('delivery_date')}}" class="form-control {{$errors->first('delivery_date')? "is-invalid": ""}}" placeholder="Ketikan tanggal pengiriman" type="text" name="delivery_date" id="delivery_date" />
                                    <div class="invalid-feedback">
                                        {{$errors->first('Delivery Date')}}
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