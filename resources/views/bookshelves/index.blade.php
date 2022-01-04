@extends("layouts.global")

@section("title") Bookshelves Donation List @endsection

@section("content")

<div class="col-md-12">

    <!-- Message -->
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif


    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3">

        <!-- Title -->
        <h4>Donation Bookshelves List</h4> <br>

        <!-- Table -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</b></th>
                    <th>Phone Number</b></th>
                    <th>Profesi</b></th>
                    <th>Instance</b></th>
                    <th>Action</b></th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookshelves as $bs)
                <tr>
                    <td>{{$bs->id}}</td>
                    <td>{{$bs->name}}</td>
                    <td>{{$bs->phone_number}}</td>
                    <td>{{$bs->profesion}}</td>
                    <td>{{$bs->instance}}</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm"> Show </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </form>
</div>
@endsection