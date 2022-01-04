@extends('layouts.global')

@section('title') Trashed Categories @endsection

@section('content')
<div class="row">
    <div class="col-md-6 text-align-center">
        <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
                <a class="nav-link" href="
{{route('categories.index')}}">Published</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="
{{route('categories.trash')}}">Trash</a>
            </li>
        </ul>
    </div>
</div>
<hr class="my-3">
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Slug</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td>{{$category->slug}}</td>
                    <td>
                        @if($category->image)
                        <img src="{{asset('storage/' . $category->image)}}" width="48px" />
                        @endif
                    </td>
                    <td>
                        [TODO: actions]
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colSpan="10">
                        {{$categories->appends(Request::all())->links()}}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

@endsection