@extends("layouts.global")

@section("title") TBM list @endsection

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
        <h4>Taman Bacaan List</h4>

        <div class="row mb-3">
            <div class="col-md-12 text-right">
                <a href="{{route('tbm.create')}}" class="btn btn-primary">Create TBM</a>
            </div>
        </div>

        <!-- Table -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>TBM Name</b></th>
                    <th>Manager Name</b></th>
                    <th>Phone</b></th>
                    <th>Action</b></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                ?>
                @foreach($tbms as $tbm)
                <tr>
                    <td><?= $no++; ?></td>
                    <td>{{$tbm->nama_tbm}}</td>
                    <td>{{$tbm->nama_pengelola}}</td>
                    <td>{{$tbm->no_telpon}}</td>
                    <td>
                        <a class="btn btn-info text-white btn-sm" href="{{route('tbm.edit', [$tbm->id])}}">Edit</a>
                        <a href="{{route('tbm.show', [$tbm->id])}}" class="btn btn-primary btn-sm"> Show </a>
                        <form onsubmit="return confirm('Delete this TBM permanently?')" class="d-inline" action="{{route('tbm.destroy', [$tbm->id])}}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- {{ $tbms->links() }} -->
        {{$tbms->appends(Request::all())->links()}}
    </form>
</div>
@endsection