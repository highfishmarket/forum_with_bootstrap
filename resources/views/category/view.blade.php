@extends('layouts.forum')

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <form action="/category/{{$category->id}}/update"></form>
                @method('PUT')
                @csrf
                <input type="text" class="form-control" name="title" value="{{$category->title}}">
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                    <button class="btn btn-info me-md-2" type="submit">Update</button>
                    <form action="/category/{{$category->id}}/delete">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="button">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
