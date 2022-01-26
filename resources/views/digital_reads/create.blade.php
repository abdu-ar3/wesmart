@extends('layouts.global')
@section('title') Digital Reads Create book @endsection

@section('content')
<div class="row">
    <div class="col-md-8">

        <!-- Message -->
        @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        @endif

        <form action="{{route('digital_reads.store')}}" method="POST" enctype="multipart/form-data" class="shadow-sm p-3 bg-white">
            @csrf
            <label for="title">Title</label> <br>
            <input value="{{old('title')}}" class="form-control {{$errors->first('title')? "is-invalid": ""}}" placeholder="E-Book title" type="text" name="title" id="title" />
            <div class="invalid-feedback">
                {{$errors->first('title')}}
            </div>
            <br>

            <label for="cover">Cover</label>
            <input type="file" class="form-control" name="cover">
            <br>

            <label for="file_pdf">File PDF</label> <br>
            <input value="{{old('file_pdf')}}" class="form-control {{$errors->first('file_pdf')? "is-invalid": ""}}" type="file" name="file_pdf" id="file_pdf" />
            <div class="invalid-feedback">
                {{$errors->first('file_pdf')}}
            </div>
            <br>

            <label for="category">Category E-Books</label> <br>
            <select value="{{old('category')}}" class="form-control {{$errors->first('category')? "is-invalid": ""}}" name="category" id="category" />
            <option value=""></option>
            </select>
            <div class="invalid-feedback">
                {{$errors->first('category')}}
            </div>
            <br>

            <label for="description">Description</label><br>
            <textarea name="description" id="description" class="form-control" placeholder="Give a description about this book"></textarea>
            <br>

            <label for="author">Author</label> <br>
            <input value="{{old('author')}}" class="form-control {{$errors->first('author')? "is-invalid": ""}}" placeholder="E-Book author" type="text" name="author" id="author" />
            <div class="invalid-feedback">
                {{$errors->first('author')}}
            </div>
            <br>

            <label for="publisher">Publisher</label> <br>
            <input value="{{old('publisher')}}" class="form-control {{$errors->first('publisher')? "is-invalid": ""}}" placeholder="E-Book publisher" type="text" name="publisher" id="publisher" />
            <div class="invalid-feedback">
                {{$errors->first('publisher')}}
            </div>
            <br>

            <button class="btn btn-primary" name="save_action" value="PUBLISH">Publish</button>
        </form>
    </div>
</div>
@endsection


@section('js-script')

<script type="text/javascript">
    $(document).ready(function() {
        $.get("{{ route('category.search')}}", function(data, status) {
            $("#category").append(data);
        });
    });
</script>

@endsection