@extends("layouts.global")
@section("title") Books Donation @endsection
@section("content")


<div class="card col-md-8">
    <div class="card-header">
        <h3>Detail Donation Books</h3>
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <b>Name</b> <br />
            {{$book->name}}
            <br><br>
            <b>Address</b> <br>
            {{$book->alamat}}
            <br><br>
            <b>Phone number</b> <br>
            {{$book->no_hp}}
            <br><br>
            <b>Profesion</b> <br>
            {{$book->pekerjaan}}
            <br><br>
            <b>Instance</b> <br>
            {{$book->instansi}}
            <br><br>
            <b>Total</b> <br>
            {{$book->jumlah}}
            <br><br>
            <b>Delivery Date</b> <br>
            {{$book->tanggal_pengiriman}}
            <br>
            <footer class="blockquote-footer">Budayakan baca <cite title="Source Title">Menjadi Habit</cite></footer>
        </blockquote>
    </div>
</div>
@endsection