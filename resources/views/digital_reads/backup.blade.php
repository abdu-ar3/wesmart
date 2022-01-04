@extends('layouts.global')
@section('title') Books list @endsection


@section('content')


<div class="col-md-12">

    <!-- Message -->
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif

    <div class="bg-white shadow-sm p-3">

        <h4>Digital Reads</h4>

        <div class="row mb-3">
            <div class="col-md-12 text-right">
                <a href="{{route('digital_reads.create')}}" class="btn btn-primary">Create List</a>
            </div>
        </div>

        <div class="row">
            @foreach($digital_reads as $digital_read)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $digital_read->title }}</h5>
                        <p class="card-text">{{ $digital_read->description }}</p>
                        <input type="hidden" id="file_pdf" value="http://localhost/wesmart1/storage/app/public/{{ $digital_read->file_pdf }}">
                        <a href="#" class="btn btn-primary" onclick="showModal(this)">Show</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

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