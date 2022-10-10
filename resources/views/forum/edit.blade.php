@extends('layouts.forum')

@section('inside_head_tag')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
@endsection
@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <label for="">Title</label>
                <input id="title" type="text" class="form-control" value="{{$post->title}}">
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <label for="category_id">Category</label>
                <select id="category_id" class="form-select" aria-label="Default select example">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" {{$category->id == $post->category_id ? "selected" : ""}}>{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
{{--                TODO 여기 확인 해 볼것 --}}
                <div id="editor">{!! $post->content !!}</div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                    <button id="submit" class="btn btn-success" type="submit">Update</button>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="post_id" value="{{$post->id}}">
@endsection
@section('before_body_head_tag')
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        let CSRF_TOKEN = $("meta[name='csrf-token']").attr('content');
        $(document).ready(function (){
            $("#submit").on("click", function(){
                let title = $("#title").val();
                let post_id = $("#post_id").val();
                let category_id = $("#category_id").val();
                let content = $(".ck-content").html();
                $.ajax({
                    type: "POST",
                    url:"/update",
                    data : {
                        _token: CSRF_TOKEN,
                        title: title,
                        post_id: post_id,
                        category_id: category_id,
                        content: content
                    },
                    dataType: "JSON",
                    success:function(data){
                        console.log(data.result);
                        window.location.href='/'+post_id+'/view';
                    },
                    error:function(response){
                        console.log(response);
                    }
                });
            })

        });
    </script>
@endsection
