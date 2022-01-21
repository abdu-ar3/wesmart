@extends('layouts.global')
@section('title') E-Books Category @endsection


@section('content')


<!-- Message -->
@if(session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif


<section class="section">
    <div class="section-header">
        <h1>E-Books Category</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Digital Reads</a></div>
            <div class="breadcrumb-item">E-Books Category</div>
        </div>
    </div>

    <!-- Title -->
    <h2 class="section-title">Category</h2>

    <!-- Create -->
    @if (auth()->user()->level == "admin")
    <div class="row mb-3">
        <div class="col-md-12 text-right">
            <a href="{{route('digital_reads.create')}}" class="btn btn-primary">Create List</a>
        </div>
    </div>
    @endif


    <div class="row">
        @foreach ($categories as $category)
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <article class="article article-style-b">
                <div class="article-header">
                    <div class="article-image" data-background="http://localhost/wesmart1/storage/app/public/{{ $category->image }}">
                    </div>
                    <!-- <div class="article-badge">
                        <div class="article-badge-item bg-danger"><i class="fas fa-fire"></i> Trending</div>
                    </div> -->
                </div>
                <div class="article-details">
                    <div class="article-title">
                        <h2><a href="#">{{$category->name}}</a></h2>
                    </div>
                    <a class="btn btn-primary btn-sm" href="{{route('category_ebook', [$category->id])}}">SHOW</a>
                </div>
            </article>
        </div>
        @endforeach
    </div>
</section>
@endsection