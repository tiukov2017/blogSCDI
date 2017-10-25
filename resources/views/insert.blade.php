@extends('bloq')

@section('content')

    <div class="col-sm-8 blog-main">
        <h1>Update a Post</h1>

        <hr>

        <form method="post" action="/public/bloq/insert/{{$post->id}}">
            {{ csrf_field() }}

            {{--<div class="form-group">--}}
                {{--<label for="title">id</label>--}}
                {{--<input type="text" class="form-control" id="id" name="id" value={{$post->id}}>--}}
            {{--</div>--}}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body"   class="form-control" >{{$post->body}}</textarea >
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>

            {{--<div class="top-right">test</div>--}}


        </form>

        {{--@include('layout.errors')--}}
    </div>

@endsection

