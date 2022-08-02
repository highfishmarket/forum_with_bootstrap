@extends('layouts.forum')

@section('contents')
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{url('/')}}/create" class="btn btn-success">New Post</a>
            </div>
        </div>
    </div>
    <hr>
    <div class="row mt-3">
        <div class="col-12">
            <h4>Movie</h4>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action"><a href="{{url('/')}}/1/view">Three days</a>
                    <span class="badge bg-info text-dark">4</span>
                    <span class="badge bg-info text-dark"><i class="fa-solid fa-heart"></i>3</span>
                    <br>
                    <small>2022-01-22 | by SB Hero</small>
                </li>
                <li class="list-group-item list-group-item-action">Four days
                    <span class="badge bg-info text-dark">4</span>
                    <span class="badge bg-info text-dark"><i class="fa-solid fa-heart"></i>3</span>
                    <br>
                    <small>2022-01-22 | by B Hero</small>
                </li>
                <li class="list-group-item list-group-item-action">Five days
                    <span class="badge bg-info text-dark">4</span>
                    <span class="badge bg-info text-dark"><i class="fa-solid fa-heart"></i>3</span>
                    <br>
                    <small>2022-01-22 | by S Hero</small>
                </li>
            </ul>
        </div>
        <div class="col-12 my-3">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-dark">All Movies</button>
            </div>
        </div>
    </div>
    <hr>
    <div class="row mt-5">
        <div class="col-12">
            <h4>Music</h4>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action"><a href="#">Three days</a>
                    <span class="badge bg-info text-dark">4</span>
                    <span class="badge bg-info text-dark"><i class="fa-thin fa-heart"></i>3</span>
                    <br>
                    <small>2022-01-22 | by SB Hero</small>
                </li>
                <li class="list-group-item list-group-item-action">Four days
                    <span class="badge bg-info text-dark">4</span>
                    <span class="badge bg-info text-dark"><i class="fa-thin fa-heart"></i>3</span>
                    <br>
                    <small>2022-01-22 | by B Hero</small>
                </li>
                <li class="list-group-item list-group-item-action">Five days
                    <span class="badge bg-info text-dark">4</span>
                    <span class="badge bg-info text-dark"><i class="fa-thin fa-heart"></i>3</span>
                    <br>
                    <small>2022-01-22 | by S Hero</small>
                </li>
            </ul>
        </div>
        <div class="col-12 my-3">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-dark">All Musics</button>
            </div>
        </div>
    </div>
</div>
@endsection
