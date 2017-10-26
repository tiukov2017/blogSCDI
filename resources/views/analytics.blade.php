
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/public/css/Test.css" rel="stylesheet">
    {{--<link href="/public/css/Bloq.css" rel="stylesheet">--}}
</head>

<body>

<div class="blog-masthead" >
    <div class="container">
        <nav class="nav">
            <a class="nav-link" href="/public/bloq/show">Show</a>
            <a class="nav-link" href="/public/bloq/show/create">Create</a>
            <a class="nav-link" href="/public/bloq">Blog</a>
            <a class="nav-link" href="/public/bloq/laravel">Laravel</a>
            <a class="nav-link" href="/public/about">About</a>
            <a class="nav-link active" href="/public/test">Analytics</a>
        </nav>
    </div>
</div>

<div class="blog-header ">
    <div class="container-fluid ">
        <div class="row center-block">
                    <h1 class="blog-title ">Analytics</h1>
                    <p class="lead blog-description">An example analytic.</p>
        </div>
    </div>
</div>

<div class="container">

    <div class="row">

        {{--<div class="col-sm blog-main">--}}
        {{--<div class="blog-post">--}}
        {{--<b>test</b>--}}
        {{--</div>--}}
        {{--</div>--}}
        @section('tab')
            <div class="col offset-sm-1 blog-sidebar">
                <div class="sidebar-module sidebar-module-inset">
                    <h4>About</h4>
                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>
                <div class="sidebar-module">
                    <h4>Archives</h4>
                    <ol class="list-unstyled testColor">
                        <li><a href="#">March 2014</a></li>
                        <li><a href="#">February 2014</a></li>
                        <li><a href="#">January 2014</a></li>


                    </ol>
                </div>
                <div class="sidebar-module">
                    <h4>Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>  {{--sidebar-module-inset--}}
            </div><!-- /.blog-sidebar -->
        @endsection
        @yield('tab')
        <div class="col-5 blog-main">


                 @section('content')
                    <div class="blog-post">
                        <h2 class="blog-post-title">Top words in posts</h2><br>

                        {{--@foreach($bloqs as $post)--}}

                                    {{--<  $wordCount=0;--}}


                                    {{--$words=str_word_count($post->body, 1);--}}

                                    {{--foreach($words as $word)--}}
                                    {{--{--}}
                                        {{--if($word!='')--}}
                                        {{--{--}}
                                            {{--$wordCount++;--}}

                                            {{--if(empty($arr[$word])) $arr[$word]=1;--}}
                                            {{--else $arr[$word]++;--}}
                                        {{--}--}}
                                    {{--}--}}
                                    {{--?>--}}


                        {{--@endforeach--}}
                        <?php

                        //$top->testFunction->mySortArr(arr);

//                        arsort($arr);
//                        $top=array_slice($arr,0,10);
                        $i=0;
                        ?>
                        @foreach($top as $word=>$count)

                            <p>{{++$i.") ". $word }} - {{$count }}</p>

                        @endforeach

                        <hr>

                    </div><!-- /.blog-post-->
                @endsection

            @yield('content')

            {{--<nav class="blog-pagination">--}}
            {{--<a class="btn btn-outline-primary" href="#">Older</a>--}}
            {{--<a class="btn btn-outline-secondary disabled" href="#">Newer</a>--}}
            {{--</nav>--}}

        </div><!-- /.blog-main -->

        @yield('tab')
    </div><!-- /.row -->

</div><!-- /.container -->

<div class="container"><hr>
    <div class="row">
        <div class="col-4">
            <div class="card" style="width: 19rem;">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 19rem;">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div><div class="col-4">
            <div class="card" style="width: 19rem;">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.container -->
<br>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>
<footer class="blog-footer">
    <p>Blog template built for <a href="https://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
