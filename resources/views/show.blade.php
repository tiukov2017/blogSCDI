@extends('bloq')


@section('content')

    <div class="col-sm-8 blog-main">


        <hr>

    @foreach($bloqs as $post)
        @if($post->id > 0 and $post->id < 999999)
            <div class="blog-post">

                 <p> <a href="/public/bloq/show/{{$post->id}}">  {{$post->title}} </a></p>
{{--                {{dd($post->title)}}--}}


                <p class="blog-post-meta">{{$post->updated_at}}</p>

                <?php  $wordCount=0;


                    $words=str_word_count($post->body, 1);

                foreach($words as $word)
                {
                    if($word!='')
                    {
                        $wordCount++;

                        if(empty($arr[$word])) $arr[$word]=1;
                        else $arr[$word]++;


                    }
                }
                ?>

                <p> <a href="/public/bloq/{{$post->id}}"> {{$post->body}} </a><br>{{"words =".$wordCount}}</p>

            </div><!-- /.blog-post -->
            <hr>
        @endif
        @endforeach
        {{--{{arsort($arr)}}--}}
        {{--{{dd(array_slice($arr,0,10))}}--}}
{{--        {{dd(array_sort($arr))}}--}}
    </div>

@endsection


