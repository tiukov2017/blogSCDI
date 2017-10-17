@extends('bloq')

@section('content')

    <div class="col-sm-8 blog-main">
        <h1>Publish a Post</h1>

        <hr>

        <form method="POST" action="/public/bloq/show">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value={{$post->title}}>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body" value={{$post->body}}  class="form-control" ></textarea >
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>



        </form>

        {{--@include('layout.errors')--}}
    </div>

@endsection

