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
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Ketikan nama">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="no_hp" class="form-control phone-number" placeholder="Masukan No Telpon">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Addres</label>
                                <input type="text" class="form-control" placeholder="Ketikan Alamat" name="alamat">
                            </div>

                            <div class="form-group">
                                <label>Profession</label>
                                <input type="text" class="form-control" placeholder="Ketikan Pekerjaan Anda" name="pekerjaan">
                            </div>

                            <div class="form-group">
                                <label>Instance</label>
                                <input type="text" class="form-control" placeholder="Ketikan Instansi terkait" name="instansi">
                            </div>
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
                                    <input type="text" name="tanggal_pengiriman" class="form-control timepicker" placeholder="Masukan tanggal pengeriman buku">
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