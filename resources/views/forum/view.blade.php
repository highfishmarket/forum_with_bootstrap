@extends('layouts.forum')

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-12 border border-1 mt-5">
                <h3 class="bg-light border border-1 py-3 px-3 mt-3">{{$post->title}}</h3>
                {{--                TODO 씐기해 확인해 봐야 할것--}}
                {!!$post->content!!}
                {{--                작성자만 나오도록 --}}
                @auth
                    @if($post->user_id == auth()->user()->id)
                        <hr>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                            <a href="{{url('/')}}/{{$post->id}}/edit" class="btn btn-secondary me-md-2" type="button">Edit</a>
                            <form method="POST" action="/{{$post->id}}/delete">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger me-md-2" type="submit">Delete</button>
                            </form>
                        </div>
                    @endif
                @endauth
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <form method="POST" action="/heart">
                    @csrf
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <button class="btn btn-outline-danger fs-4" type="submit"><i class="fa-solid
                         fa-heart fs-4"></i>{{App\Models\Heart::where('post_id', $post->id)->count()}}
                        </button>
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                    </div>
                </form>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <ul class="list-group">
                    @php
                        $replies = App\Models\Reply::where('post_id', $post->id)->orderby('created_at', 'asc')->get();
                    @endphp
                    @if(count($replies) >0)
                        @foreach($replies as $reply)
                            <li class="list-group-item list-group-item-action">{{$reply->reply}}
                                <br><small>{{$reply->created_at}} |
                                    by @php $user = App\Models\User::find($reply->user_id);@endphp {{$user->name}}</small>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
        <hr>
        @auth
            <form method="POST" action="/reply/store">
                @csrf
                <div class="row my-3">
                    <div class="col-12">
                        <input type="text" class="form-control" name="reply">
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col12">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        @endauth
    </div>
@endsection
