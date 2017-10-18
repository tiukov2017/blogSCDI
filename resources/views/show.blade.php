@extends('bloq')


@section('content')

    <div class="col-sm-8 blog-main">


        <hr>

    @foreach($bloqs as $post)
        @if($post->id > 0 and $post->id < 9999999)
            <div class="blog-post">

                {{--<h5 class="blog-post-title"> {{'title : '.$post->title }} </h5>--}}
                {{--<h5 class="blog-post-title"> {{'href=http://bloq10102017.loc/public/bloq/show/'.$post->id}}</h5>--}}

                <p> <a href="/public/bloq/show/{{$post->id}}">  {{$post->title}} </a></p>

                <p class="blog-post-meta">{{$post->updated_at}}</p>


                {{--<h8 class="blog-post-title">{{ 'body : '.$post->body }}</h8>--}}
                <p> <a href="/public/bloq/{{$post->id}}"> {{$post->body}} </a></p>

            </div><!-- /.blog-post -->
            <hr>
        @endif
        @endforeach
    </div>

@endsection

