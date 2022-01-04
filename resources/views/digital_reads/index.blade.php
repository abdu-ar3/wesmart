@extends('layouts.global')
@section('title') Books list @endsection


@section('content')


<!-- Message -->
@if(session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif


<section class="section">
    <div class="section-header">
        <h1>Digital Reads</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Digital Reads</a></div>
            <div class="breadcrumb-item">Read Student</div>
        </div>
    </div>

    <!-- Title -->
    <h2 class="section-title">Read Student</h2>

    <!-- Create -->
    <div class="row mb-3">
        <div class="col-md-12 text-right">
            <a href="{{route('digital_reads.create')}}" class="btn btn-primary">Create List</a>
        </div>
    </div>


    <div class="row">
        @foreach($digital_reads as $digital_read)
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <article class="article article-style-b">
                <div class="article-header">
                    <div class="article-image" data-background="../assets/img/news/img13.jpg">
                    </div>
                    <div class="article-badge">
                        <div class="article-badge-item bg-danger"><i class="fas fa-fire"></i> Trending</div>
                    </div>
                </div>
                <div class="article-details">
                    <div class="article-title">
                        <h2><a href="#">{{ $digital_read->title }}</a></h2>
                    </div>
                    <p>{{ $digital_read->description }}</p>
                    <div class="article-cta">
                        <input type="hidden" id="file_pdf" value="http://localhost/wesmart1/storage/app/public/{{ $digital_read->file_pdf }}">
                        <a href="#" class="btn btn-primary" onclick="showModal(this)">Show</a>
                    </div>
                </div>
            </article>
        </div>
        @endforeach
    </div>
</section>

<div class="modal" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Let's read </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <embed id="modal_file" type="application/pdf" height="500px" width="100%">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

</div>
@endsection



@section('js-script')

<script type="text/javascript">
    function showModal(e) {
        var row = $(e).parent();
        var file_pdf = row.find('#file_pdf').val();
        //$('#modal_file').attr('src', file_pdf);
        console.log(file_pdf)
        $('#modal_file').attr("src", file_pdf);
        // var parent = $('embed#modal_file').parent();
        // var newElement = "<embed src='" + file_pdf + "' id='modal_file' type='application/pdf' height='500px' width='100%'>";

        // $('embed#modal_file').remove();
        // parent.append(newElement);
        //console.log($('#modal_file').attr('src'))
        $('#exampleModal').modal('show');
    }
</script>
@endsection