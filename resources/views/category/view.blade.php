@extends('layouts.forum')

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <input type="text" class="form-control" value="Movie">
            </div>
        </div>
        <div class="row my-3">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                <button class="btn btn-info me-md-2" type="button">Update</button>
                <button class="btn btn-danger" type="button">Delete</button>
            </div>
        </div>
    </div>
@endsection
