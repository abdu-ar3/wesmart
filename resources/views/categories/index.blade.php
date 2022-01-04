@extends("layouts.global")

@section("title") Category list @endsection

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
        <h4>Categories List</h4>

        <div class="row ">
            <div class="col-md-6 text-align-center">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="
{{route('categories.index')}}">Published</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="
{{route('categories.trash')}}">Trash</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12 text-right">
                <a href="{{route('categories.create')}}" class="btn btn-primary">Create List</a>
            </div>
        </div>


        <!-- Table -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><b>Name</b></th>
                    <th><b>Slug</b></th>
                    <th><b>Image</b></th>
                    <th><b>Actions</b></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td>{{$category->slug}}</td>
                    <td>
                        @if($category->image)
                        <img src="{{asset('storage/' . $category->image)}}" width="48px" />
                        @else
                        No image
                        @endif
                    </td>
                    <td>

                        <a href="{{route('categories.edit', [$category->id])}}" class="btn btn-info btn-sm"> Edit </a>
                        <a href="{{route('categories.show', [$category->id])}}" class="btn btn-primary btn-sm"> Show </a>
                        <form class="d-inline" action="{{route('categories.destroy', [$category->id])}}" method="POST" onsubmit="return confirm('Move category to trash?')">
                            @csrf
                            <input type="hidden" value="DELETE" name="_method">
                            <input type="submit" class="btn btn-danger btn-sm" value="Trash">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </form>
</div>
@endsection