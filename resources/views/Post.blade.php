@extends('bloq')


@section('content')

    <div class="col-sm-8 blog-main">


        <hr>

        @if($post->id > 0 and $post->id < 9999999)
            <div class="blog-post">

                {{--<h5 class="blog-post-title"> {{'title : '.$post->title }} </h5>--}}
                {{--<h5 class="blog-post-title"> {{'href=http://bloq10102017.loc/public/bloq/show/'.$post->id}}</h5>--}}

                <p> {{$post->title}} </p>

                <p class="blog-post-meta">{{$post->created_at}}</p>


                {{--<h8 class="blog-post-title">{{ 'body : '.$post->body }}</h8>--}}
                <p>  {{$post->body}} </p>

            </div><!-- /.blog-post -->
            <hr> <br>

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="/public/bloq/show/{{$post->id}}">Delete</a>
                <a class="btn btn-outline-primary" href="/public/bloq/insert/{{$post->id}}">Update</a>
                 </nav><br><br>
    @endif
    </div>

@endsection

