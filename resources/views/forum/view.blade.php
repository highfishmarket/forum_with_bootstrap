@extends('layouts.forum')

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-12 border border-1 mt-5">
                <h3>Lorem ipsum dolor sit amet.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam assumenda at aut consequuntur
                    culpa cumque delectus, dicta dolorem dolores, dolorum ducimus, ea eos eveniet facere id magni minima
                    nemo neque nobis nulla numquam odio perferendis placeat quis repellat repudiandae sed similique sit
                    suscipit tempore temporibus vel voluptate. Blanditiis, consequuntur!</p>
                <hr>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                    <button class="btn btn-secondary me-md-2" type="button">Edit</button>
                    <button class="btn btn-danger" type="button">Delete</button>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <div class="d-grid gap-2 col-3 mx-auto">
                    <button class="btn btn-outline-danger fs-4"><i class="fa-solid fa-heart fs-4"></i>3</button>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action">A second item</li>
                    <li class="list-group-item list-group-item-action">A third item</li>
                    <li class="list-group-item list-group-item-action">A fourth item</li>
                    <li class="list-group-item list-group-item-action">And a fifth one</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row my-3">
            <div class="col-12">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="row my-3">
            <div class="col12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary" type="button">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection