@extends('Home.default.master')


@section('content')
    <!-- ============================ Hero Image =========================== -->
    {{--顶部大图--}}
    <section id="hero" class="scrollme">
        <div class="container-fluid element-img" style="background: url(https://odu38kv7q.qnssl.com/index.jpg) no-repeat center center fixed;background-size: cover">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 vertical-align cover boost text-center">
                    <div class="center-me animateme" data-when="exit" data-from="0" data-to="0.6" data-opacity="0" data-translatey="100">
                        <div>

                            <h2>
                                <a href="#intro" class="more scrolly">
                                    命定的局限尽可永在，不屈的挑战却不可须臾或缺！
                                </a>
                            </h2>
                            <p></p>

                            <h2></h2>
                            <p></p>


                        </div>
                    </div>
                </div>
                <!-- // .col-md-12 -->
            </div>
            <div class="herofade beige-dk"></div>
        </div>
    </section>

    <!-- Height spacing helper -->
    <div class="heightblock"></div>
    <!-- // End height spacing helper -->

    <!-- ============================ END Hero Image =========================== -->
    <!-- ============================ Content =========================== -->

    <section id="intro">
        <div class="container">
            @foreach( $article as $item)
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 opening-statement">
                        <div class="col-md-4">
                            <h3><a href="detail/{{$item['id']}}/">{{$item['title']}}</a></h3>
                            <span>
                                <span class="post-meta">
                                  <time datetime="{{$item['created_at']}}" itemprop="datePublished">
                                      {{$item['created_at']}}
                                  </time>
                                    |
                                    @foreach($item['get_tags'] as $v)
                                        <a href="http://zq.1i1l.com/myblog/public/tags/{{$v['tag_name']}}">{{$v['tag_name']}};</a>
                                    @endforeach
                                    |
                                    <span>浏览数:({{$item['views']}})</span>
                                </span>
                            </span>
                        </div>
                        <div class="col-md-8">
                            {!! $item['content'] !!}

                            <p class="pull-right readMore">
                                <a href="http://zq.1i1l.com/myblog/public/detail/{{$item['id']}}/">Read More...</a>
                            </p>

                        </div>
                        <div class="clearfix"></div>
                        <hr class="nogutter">
                    </div>
                </div>
            @endforeach


            {{--<nav class="pagination" role="pagination">--}}
            {!! $paginate->render() !!}
            {{--<a class="pull-right" href="http://zq.1i1l.com/myblog/public/page/2/">Older Posts →</a>--}}
            {{--</nav>--}}
        </div>
    </section>
@endsection

