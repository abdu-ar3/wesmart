@extends("layouts.global")
@section("title") Tbm Detail @endsection
@section("content")


<div class="card col-md-8">
    <div class="card-header">
        <h3>Detail Taman Baca</h3>
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <b>TBM Name</b> <br />
            {{$tbm->nama_tbm}}
            <br><br>
            <b>Address</b> <br>
            {{$tbm->alamat}}
            <br><br>
            <b>Phone number</b> <br>
            {{$tbm->no_telpon}}
            <br><br>
            <b>Manager Name</b> <br>
            {{$tbm->nama_pengelola}}
            <br>
            <footer class="blockquote-footer">Budayakan baca <cite title="Source Title">Menjadi Habit</cite></footer>
        </blockquote>
    </div>
</div>
@endsection