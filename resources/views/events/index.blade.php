@extends("layouts.global")

@section("title") Events list @endsection

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
        <h4>Events List</h4>

        <div class="row mb-3">
            <div class="col-md-12 text-right">
                <a href="{{route('event.create')}}" class="btn btn-primary">Create Events</a>
            </div>
        </div>

        <!-- Table -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name Event</b></th>
                    <th>Tanggal</b></th>
                    <th>Description</b></th>
                    <!-- <th>Image</b></th> -->
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                <tr>
                    <td>{{$event->id}}</td>
                    <td>{{$event->name}}</td>
                    <td>{{$event->tanggal}}</td>
                    <td>{{$event->deskripsi}}</td>
                    <!-- <td>@if($event->avatar)
                        <img src="{{asset('storage/'.$event->avatar)}}" width="70px" />
                        @else
                        N/A
                        @endif
                    </td> -->
                    <td>
                        <a class="btn btn-info text-white btn-sm" href="{{route('event.edit', [$event->id])}}">Edit</a>
                        <form onsubmit="return confirm('Delete this TBM permanently?')" class="d-inline" action="#" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </form>
</div>
@endsection