@extends('bloq')


@section('content')

    <div class="col-sm-8 blog-main">


        <hr>

    @foreach($bloqs as $post)
        @if($post->id > 0 and $post->id < 9999999)
            <div class="blog-post">

                 <p> <a href="/public/bloq/show/{{$post->id}}">  {{$post->title}} </a></p>

                <p class="blog-post-meta">{{$post->updated_at}}</p>


                <p> <a href="/public/bloq/{{$post->id}}"> {{$post->body}} </a></p>

            </div><!-- /.blog-post -->
            <hr>
        @endif
        @endforeach
    </div>

@endsection

