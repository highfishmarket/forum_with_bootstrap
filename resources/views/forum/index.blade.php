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
{{--        TODO 여기도 다 컨트롤러에서 할 수 있도록 변경해 둘것--}}
        @php
            $categories = App\Models\Category::orderby('title', 'asc')->get();
        @endphp
        @if(count($categories)> 0 )
            @foreach($categories as $category)
                @php
                    $posts = App\Models\Post::where('category_id', $category->id)->orderby('created_at', 'desc')->limit(3)->get();
                @endphp
                @if(count($posts)> 0 )

                    <div class="row mt-3">
                        <div class="col-12">
                            <h4>{{$category->title}}</h4>
                            <ul class="list-group">
                                @foreach($posts as $post)
                                    <li class="list-group-item list-group-item-action"><a
                                            href="{{url('/')}}/{{$post->id}}/view" style="text-decoration: none" class="text=dark">{{$post->title}}</a>
                                        <span class="badge bg-info text-dark">4</span>
                                        <span class="badge bg-info text-dark"><i class="fa-solid fa-heart"></i>3</span>
                                        <br>
                                        <small>{{$post->created_at}} | by SB Hero</small>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-12 my-3">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a class="btn btn-dark" href="{{url('/')}}/{{$category->id}}/category">All {{$category->title}}</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endif
            @endforeach
        @endif
    </div>
@endsection
