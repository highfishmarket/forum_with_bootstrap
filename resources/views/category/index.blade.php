@extends('layouts.forum')

@section('contents')
    <div class="container">
        <div class="row my-3">
            <div class="col-12">
                <label for="">Category Title</label>
                <input type="text" class="form-control">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                    <button class="btn btn-primary" type="button">Create</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{url('/')}}/category/1/view"> Movie</a>
                    </li>
                    <li class="list-group-item"><a href=""> Music</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
