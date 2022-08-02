@extends('layouts.forum')

@section('inside_head_tag')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
@endsection
@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <label for="">Title</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <label for="">Category</label>
                <select class="form-select" aria-label="Default select example">
                    <option value="Movie">Movie</option>
                    <option value="Music">Music</option>
                </select>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <div id="editor"></div>
            </div>
        </div>
        <div class="row my-3">
            <col-12>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                    <button class="btn btn-success" type="button">Submit</button>
                </div>
            </col-12>
        </div>
    </div>
@endsection
@section('before_body_head_tag')
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

@endsection
