<!DOCTYPE html>
<!--[if lte IE 8 ]>
<html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<!--<![endif]-->

<head>
    <title>@yield('title')    {{empty($seo) ? '梦心缘星' : $seo['title']}}</title>
    <!-- Meta data -->
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="generator" content="{{empty($seo) ? '梦心缘星' :  $seo['title']}}">
    <meta name="description" content="{{empty($seo) ? '梦心缘星博客' :  $seo['description']}}" />
    <meta name="keywords" content="{{empty($seo) ? '梦心缘星技术博客' :  $seo['seo_key']}}" />

    <!-- Favicon, (keep icon in root folder) -->
    <link rel="Shortcut Icon" href="https://odu38kv7q.qnssl.com/nice.png" type="image/ico">


    <link rel="stylesheet" href="https://odu38kv7q.qnssl.com/all1.css" media="screen" type="text/css">

    <link rel="stylesheet" href="http://zq.1i1l.com/myblog/public/Home/default/highlightjs/xcode.css" type="text/css">



    <!-- Custom stylesheet, (add custom styles here, always load last) -->
    <!-- Load our stylesheet for IE8 -->
    <!--[if IE 8]>
    <link rel="stylesheet" type="text/css" href="/Home/default/css/ie8.css" />
    <![endif]-->

    <!-- Google Webfonts (Monserrat 400/700, Open Sans 400/600) -->
    <!-- <link href='//fonts.useso.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> -->
    <!-- <link href='//fonts.useso.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'> -->

    <!-- Load our fonts individually if IE8+, to avoid faux bold & italic rendering -->
    <!--[if IE]>
    <link href='http://fonts.useso.com/css?family=Montserrat:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <![endif]-->

    <!-- jQuery | Load our jQuery, with an alternative source fallback to a local version if request is unavailable -->
    <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
    {{--<script>window.jQuery || document.write('<script src="https://odu38kv7q.qnssl.com/jquery-1.11.1.min.js"><\/script>')</script>--}}

    <!-- Load these in the <head> for quicker IE8+ load times -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/Home/default//js/html5shiv.min.js"></script>
    <script src="/Home/default//js/respond.min.js"></script>
    <![endif]-->


    @yield('css')


    {{--<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="atom.xml">--}}

    <style>.col-md-8.col-md-offset-2.opening-statement img{display:none;}</style>
</head>

<!--
<body class="home-template">
-->
<body id="index" class="lightnav animsition">

<!-- ============================ Off-canvas navigation =========================== -->

<div class="sb-slidebar sb-right sb-style-overlay sb-momentum-scrolling">
    <div class="sb-close" aria-label="Close Menu" aria-hidden="true">
        <img src="http://zq.1i1l.com/myblog/public/Home/default/img/close.png" alt="Close"/>
    </div>
    <!-- Lists in Slidebars -->
    <ul class="sb-menu">
        <li><a href="http://zq.1i1l.com/myblog/public/index" class="animsition-link" title="Home">Home</a></li>
    {{--<li><a href="http://zq.1i1l.com/myblog/public/archives" class="animsition-link" title="archive">archives</a></li>--}}
    <!-- Dropdown Menu -->
        {{--标签--}}
        <li>
            <a class="sb-toggle-submenu">tags<span class="sb-caret"></span></a>
            <ul class="sb-submenu">
                @foreach($tag as $item)
                    <li>
                        <a href="http://zq.1i1l.com/myblog/public/tags/{{$item['tag_name']}}" target="_BLANK" class="animsition-link">
                            {{$item['tag_name']}}
                            <small>({{$item['tag_number']}})</small>
                        </a>
                    </li>
                @endforeach

            </ul>
        </li>

        {{--分类--}}
        <li>
            <a class="sb-toggle-submenu">Categories<span class="sb-caret"></span></a>

            <ul class="sb-submenu">
                @foreach( $category as $item)
                    <li><a href="http://zq.1i1l.com/myblog/public/categories/{{$item['cate_name']}}/" class="animsition-link">{{$item['newHtml']}}</a></li>
                @endforeach

            </ul>

        </li>


        <li>
            <a class="sb-toggle-submenu">Links<span class="sb-caret"></span></a>
            <ul class="sb-submenu">
                @foreach( $link as $item)
                    <li><a href="{{$item['link']}}" target="_blank" class="link">{{$item['name']}}</a></li>
                @endforeach

            </ul>
        </li>

    </ul>
    <!-- Lists in Slidebars -->
    <ul class="sb-menu secondary">
        <li><a href="http://zq.1i1l.com/myblog/public/monthList" class="animsition-link" title="归档">归档</a></li>

        <li><a href="http://zq.1i1l.com/myblog/public/about" class="animsition-link" title="about">About</a></li>
    </ul>
</div>

<!-- ============================ END Off-canvas navigation =========================== -->

<!-- ============================ #sb-site Main Page Wrapper =========================== -->

<div id="sb-site">
    <!-- #sb-site - All page content should be contained within this id, except the off-canvas navigation itself -->

<!-- ============================ Header & Logo bar =========================== -->

<div id="navigation" class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <!-- Nav logo -->
            <div class="logo">
                <a href="http://zq.1i1l.com/myblog/public/" title="iphpt" class="animsition-link">
                    <img src="https://odu38kv7q.qnssl.com/nice.png" alt="logo" width="35px;"/>
                </a>
            </div>
            <!-- // Nav logo -->
            <!-- Info-bar -->
            <nav>
                <ul class="nav">
                    <li><a href="http://zq.1i1l.com/myblog/public/" class="animsition-link">{{empty($seo['title']) ? '梦心缘星的博客':  $seo['title']}}</a></li>
                    {{--<li class="nolink"><span>Always </span>Creative.</li>--}}

                    <li><a href="https://github.com/Yela528/laravel-5-myblog" title="Github" target="_blank"><i class="icon-github"></i></a></li>


                    {{--<li><a href="https://twitter.com/1tsKieran" title="Twitter" target="_blank"><i class="icon-twitter"></i></a></li>--}}




                    <li><a href="https://weibo.com/u/2774887182?topnav=1&wvr=6&topsug=1" title="Sina-Weibo" target="_blank"><i class="icon-sina-weibo"></i></a></li>

                    <li class="nolink"><span><a href="http://zq.1i1l.com/myblog/public/detail/1/">给我留言</a></span></li>
                    <li class="nolink"><span>Welcome!</span></li>

                </ul>
            </nav>
            <!--// Info-bar -->
        </div>
        <!-- // .container -->
        <div class="learnmore sb-toggle-right">More</div>
        <button type="button" class="navbar-toggle menu-icon sb-toggle-right" title="More">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar before"></span>
            <span class="icon-bar main"></span>
            <span class="icon-bar after"></span>
        </button>
    </div>
    <!-- // .navbar-inner -->
</div>

<!-- ============================ Header & Logo bar =========================== -->

@yield('content')
<section id="statement">
    <div class="container text-center wow fadeInUp" data-wow-delay="0.5s">
        <div class="row">
            <p>当你能力不能满足你的野心的时候,你就该沉下心来学习</p>
        </div>
    </div>
</section>
<!-- ============================ END Content =========================== -->
</div>

<!-- ============================ Footer =========================== -->

<footer>
    <div class="container">
        <div>
            <p>欢迎加入交流群(群号):440221268</p>
        </div>
        <div>
            <p>转载来自https://www.iphpt.com</p><i class="icon-facebook"></i>
        </div>
    </div>
    <div class="container">
        <div class="copy">
            <p>
                &copy; 2014<script>new Date().getFullYear()>2010&&document.write("-"+new Date().getFullYear());</script>, Content By 梦心缘星. All Rights Reserved.
            </p>

        </div>
        <div class="social">
            <ul>

                <li><a href="https://github.com/Yela528/laravel-5-myblog" title="Github" target="_blank"><i class="icon-github"></i></a>&nbsp;</li>


                <li><a href="#" title="哈哈" target="_blank"><i class="icon-qq"></i></a>&nbsp;</li>




                <li><a href="http://weibo.com/ylsc633?refer_flag=1001030101_&is_hot=1" title="Sina-Weibo" target="_blank"><i class="icon-sina-weibo"></i></a>&nbsp;</li>

            </ul>
            <script src="https://s95.cnzz.com/z_stat.php?id=1256842383&web_id=1256842383" language="JavaScript"></script>

        </div>

        <div class="clearfix"> </div>
    </div>
</footer>

<!-- ============================ END Footer =========================== -->
<!-- Load our scripts -->

<!-- Resizable 'on-demand' full-height hero -->
<script type="text/javascript">

    var resizeHero = function () {
        var hero = $(".cover,.heightblock"),
                window1 = $(window);
        hero.css({
            "height": window1.height()
        });
    };

    resizeHero();

    $(window).resize(function () {
        resizeHero();
    });
</script>
<script src="http://zq.1i1l.com/myblog/public/Home/default/js/plugins.min.js"></script><!-- Bootstrap core and concatenated plugins always load here -->
<script src="http://zq.1i1l.com/myblog/public/Home/default/js/jquery.flexslider-min.js"></script><!-- Flexslider plugin -->
<script src="http://zq.1i1l.com/myblog/public/Home/default/js/scripts.js"></script><!-- Theme scripts -->
{{--<script src="http://zq.1i1l.com/myblog/public/Home/default/js/Parser.js"></script><!-- 解析markdown -->--}}

<link rel="stylesheet" href="http://zq.1i1l.com/myblog/public/Home/default/fancybox/jquery.fancybox.css" media="screen" type="text/css">
<script src="http://zq.1i1l.com/myblog/public/Home/default/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
    $('#intro').find('img').each(function(){
        var alt = this.alt;

        if (alt){
            $(this).after('<span class="caption" style="display:none">' + alt + '</span>');
        }

        $(this).wrap('<a href="' + this.src + '" title="' + alt + '" class="fancybox" rel="gallery" />');
    });
    (function($){
        $('.fancybox').fancybox();
    })(jQuery);
</script>

<!-- Initiate flexslider plugin -->
<script type="text/javascript">
    $(document).ready(function($) {
        $('.flexslider').flexslider({
            animation: "fade",
            prevText: "",
            nextText: "",
            directionNav: true
        });

    });


</script>
<script>


    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();


</script>
@yield('js')
</body>
</html>
