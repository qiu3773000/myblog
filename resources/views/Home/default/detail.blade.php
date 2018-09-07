@extends('Home.default.master')
@section('title',$article['title']."&nbsp;&nbsp;-&nbsp;&nbsp;")
@section('css')
    <link rel="stylesheet" href="http://zq.1i1l.com/myblog/public/Home/default/js/highlight/styles/atom-one-dark.css">
    <link rel="stylesheet" href="http://zq.1i1l.com/myblog/public/Home/default/css/share.min.css">
@endsection

@section('content')
    <section id="intro">
        <div class="container">
            <div class="row col-md-offset-2">
                <div class="col-md-8">
    			<span class="post-meta">
      <time datetime="{{$article['created_at']}}" itemprop="datePublished">
          {{$article['created_at']}}
      </time>
    |<i class="icon-tag"> </i>
    @foreach( $article['get_tags'] as $item)
        <a href='http://zq.1i1l.com/myblog/public/tags/{{$item['tag_name']}}/' > {{$item['tag_name']}}</a>,
    @endforeach

</span>
                    <h1>{{$article['title']}}</h1>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                {!! $article['content'] !!}


                <div class="clearfix"></div>
                <hr class="nogutter">
                <span style="color: #19A1F9">欢迎转载,但请附上原文地址哦,尊重原创,谢谢大家 本文地址: <a style="color: #19A1F9" href="http://zq.1i1l.com/myblog/public/detail/{{$article['id']}}/">http://www.iphpt.com/detail/{{$article['id']}}/</a></span>
                <hr class="nogutter">
            </div>
            <nav class="pagination" role="pagination">
                @if (!empty($last))
                    <a class="pull-left" href="http://zq.1i1l.com/myblog/public/detail/{{$last->id}}/" style="float: left;">
                        ← {{$last->title}}
                    </a>
                @endif
                @if (!empty($next))
                    <a class="pull-right" href="http://zq.1i1l.com/myblog/public/detail/{{$next->id}}/">
                        {{$next->title}} →
                    </a>
                @endif

            </nav>


        </div>
    </section>

    <div class="duoshuo " style="text-align: center">

    <div id="container"></div>
    <link rel="stylesheet" href="https://imsun.github.io/gitment/style/default.css">
        <style>
            .gitment-container a {
                border: none;
            }
            .comments {
                margin: 60px 0 0;
            }
        </style>
    <script src="https://imsun.github.io/gitment/dist/gitment.browser.js"></script>
    <script>

        var gitment = new Gitment({
            id: "{{$article['id']}}", // 可选。默认为 location.href

            owner: 'qiu3773000',

            title: "{{$article['title']}}",
            repo: 'xiaohei',
            oauth: {
                client_id: 'cb577847bf64715af81c',
                client_secret: 'a8035cc3b4bcfb9864d1e198750d88b4f9dbfa87',
            },
        })
        gitment.render('container')
    </script>
    </div>
@endsection

@section('js')
    <script src="http://zq.1i1l.com/myblog/public/Home/default/js/highlight/highlight.pack.js"></script>
    <script src="http://zq.1i1l.com/myblog/public/Home/default/js/jquery.share.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

@endsection