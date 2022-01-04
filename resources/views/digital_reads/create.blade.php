@extends('layouts.global')
@section('title') Digital Reads Create book @endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <form action="{{route('digital_reads.store')}}" method="POST" enctype="multipart/form-data" class="shadow-sm p-3 bg-white">
            @csrf
            <label for="title">Title</label> <br>
            <input type="text" class="form-control" name="title" placeholder="Book title">
            <br>
            <label for="cover">Cover</label>
            <input type="file" class="form-control" name="cover">
            <br>
            <label for="file_pdf">File PDF</label>
            <input type="file" class="form-control" name="file_pdf">
            <br>
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control">
                <option value=""></option>
            </select>
            <br>
            <label for="description">Description</label><br>
            <textarea name="description" id="description" class="form-control" placeholder="Give a description about this book"></textarea>
            <br>
            <label for="author">Author</label><br>
            <input type="text" class="form-control" name="author" id="author" placeholder="Book author">
            <br>
            <label for="publisher">Publisher</label> <br>
            <input type="text" class="form-control" id="publisher" name="publisher" placeholder="Book publisher">
            <br>
            <button class="btn btn-primary" name="save_action" value="PUBLISH">Publish</button>
            <button class="btn btn-secondary" name="save_action" value="DRAFT">Save as draft</button>
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