@extends("layouts.global")

@section("title")Donation Books @endsection

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
        <h4>Donation Book List</h4> <br>

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
                @foreach($book as $b)
                <tr>
                    <td>{{$b->id}}</td>
                    <td>{{$b->name}}</td>
                    <td>{{$b->no_hp}}</td>
                    <td>{{$b->pekerjaan}}</td>
                    <td>{{$b->instansi}}</td>
                    <td>
                        <a href="{{route('book.show', [$b->id])}}" class="btn btn-primary btn-sm"> Show </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </form>
</div>
@endsection