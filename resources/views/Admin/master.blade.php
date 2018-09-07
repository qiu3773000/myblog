<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>梦心缘星的博客</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->

    <script type="text/javascript" src="{{asset('Admin/assets/js/jquery.js')}}"></script>

    <link rel="stylesheet" href="{{asset('Admin/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/assets/css/loader-style.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/assets/css/media.css')}}">
    {{--<link rel="stylesheet" href="{{asset('Admin/assets/css/social.css')}}">--}}
    <link rel="stylesheet" href="{{asset('Admin/assets/css/mail.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/assets/css/toastr/toastr.min.css')}}">

    <meta name="_token" content="{{ csrf_token() }}"/>

@yield('css')





<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="{{asset('Admin/assets/ico/minus.png')}}">
</head>

<body style="background: url({{\Illuminate\Support\Facades\Auth::user()->background}}) no-repeat top center fixed;">
<div id="awwwards" class="right black"><a href="https://github.com/Yela528/laravel-5-myblog" target="_blank">best websites of the world</a></div>
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- TOP NAVBAR -->
<nav role="navigation" class="navbar navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="entypo-menu"></span>
            </button>
            <button class="navbar-toggle toggle-menu-mobile toggle-left" type="button">
                <span class="entypo-list-add"></span>
            </button>




            <div id="logo-mobile" class="visible-xs">
                <h1>梦<span>心</span></h1>
            </div>

        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="http://zq.1i1l.com/myblog/public/" target="_blank"><i data-toggle="tooltip" data-placement="bottom" title="首页" style="font-size:20px;" class="icon-help tooltitle"></i></a>
                </li>

            </ul>
            <div id="nt-title-container" class="navbar-left running-text visible-lg">
                <ul class="date-top">
                    <li class="entypo-calendar" style="margin-right:5px"></li>
                    <li id="Date"></li>


                </ul>

                <ul id="digital-clock" class="digital">
                    <li class="entypo-clock" style="margin-right:5px"></li>
                    <li class="hour"></li>
                    <li>:</li>
                    <li class="min"></li>
                    <li>:</li>
                    <li class="sec"></li>
                    <li class="meridiem"></li>
                </ul>
                <ul id="nt-title">
                    <?php
                    $getIp=$_SERVER["REMOTE_ADDR"];
                    $content = file_get_contents("http://api.map.baidu.com/location/ip?ak=lD8jj33kyz7cWdfLuiKkO28xeZdbaW3B&ip={$getIp}&coor=bd09ll");
                    $json = json_decode($content);
                    $log=$json->{'content'}->{'point'}->{'x'};
                    $lat=$json->{'content'}->{'point'}->{'y'};
                     ?>
                    {{--<iframe name="weather_inc" src="http://i.tianqi.com/index.php?c=code&id=10" width="300" height="25" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" ></iframe>--}}
                    {{--<div>天气</div>--}}
                    <iframe allowtransparency="true" frameborder="0" width="731" height="28" scrolling="no" src="//tianqi.2345.com/plugin/widget/index.htm?s=3&z=1&t=0&v=0&d=1&bd=0&k=&f=&ltf=009944&htf=cc0000&q=1&e=1&a=1&c=71918&w=731&h=28&align=left"></iframe>
                </ul>
            </div>

            <ul style="margin-right:0;" class="nav navbar-nav navbar-right">
                <li>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" class="admin-pic img-circle" src="http://zq.1i1l.com/myblog/public/Admin/assets/img/logo.png">Hi, {!! \Illuminate\Support\Facades\Auth::user()->name!!} <b class="caret"></b>
                    </a>
                    <ul style="margin-top:14px;" role="menu" class="dropdown-setting dropdown-menu">
                        <li>
                            <a href="http://zq.1i1l.com/myblog/public/home">
                                <span class="entypo-user"></span>&#160;&#160;home</a>
                        </li>

                        <li>
                            <a href="http://zq.1i1l.com/myblog/public/logout">
                                <span class="entypo-lifebuoy"></span>&#160;&#160;logout</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="icon-gear"></span>&#160;&#160;Setting</a>
                    <ul role="menu" class="dropdown-setting dropdown-menu">

                        <li class="theme-bg">
                            <div id="button-bg"></div>
                            <div id="button-bg2"></div>
                            <div id="button-bg3"></div>
                            <div id="button-bg5"></div>
                            <div id="button-bg6"></div>
                            <div id="button-bg7"></div>
                            <div id="button-bg8"></div>
                            <div id="button-bg9"></div>
                            <div id="button-bg10"></div>
                            <div id="button-bg11"></div>
                            <div id="button-bg12"></div>
                            <div id="button-bg13"></div>
                        </li>

                    </ul>
                    
                </li>
                <li class="hidden-xs">
                    <a class="toggle-left" href="#">
                        <span style="font-size:20px;" class="entypo-list-add"></span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- /END OF TOP NAVBAR -->

<!-- SIDE MENU -->
<div id="skin-select">
    <div id="logo">
        <a href="http://zq.1i1l.com/myblog/public/" target="_blank">  <h1>梦<span>心</span>缘<span>星</span></h1> </a>
    </div>

    <a id="toggle">
        <span class="entypo-menu"></span>
    </a>
    <div class="dark">
        <form action="#">
                <span>
                    <input type="text" name="search" value=""  class="search rounded id_search" placeholder="Search Menu..." autofocus="">
                </span>
        </form>
    </div>

    <div class="search-hover">
        <form id="demo-2">
            <input type="search" placeholder="Search Menu..." class="id_search">
        </form>
    </div>



    <div class="skin-part">
        <div id="tree-wrap">
            <div class="side-bar">
                <ul id="menu-showhide" class="topnav menu-left-nest">
                    <li>
                        <a href="#" style="border-left:0px solid!important;" class="title-menu-left">

                            <span class="widget-menu"></span>
                            <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>

                        </a>
                    </li>
                    <li>
                        <a class="tooltip-tip ajax-load" href="/myblog/public/home" title="首页">
                            <i class="icon-window"></i>
                            <span>后台首页</span>

                        </a>
                    </li>
                    <li>
                        <a class="tooltip-tip ajax-load" href="#" title="写文章">
                            <i class="icon-document-edit"></i>
                            <span>文章</span>

                        </a>
                        <ul>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="/myblog/public/article" title="Articles List"><i class="entypo-doc-text"></i><span>文章列表</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="/myblog/public/deleted" title="Blog Detail"><i class="entypo-newspaper"></i><span>回收站</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="/myblog/public/article/create" title="Blog Detail"><i class="entypo-newspaper"></i><span>写文章</span></a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a class="tooltip-tip" href="#" title="评论管理">
                            <i class="icon-document-new"></i>
                            <span>评论管理</span>
                        </a>
                        <ul>
                            <li>
                                <a class="tooltip-tip2 " href="/myblog/public/comment" title="评论列表"><i class="icon-media-record"></i><span>评论列表</span></a>
                            </li>

                        </ul>
                    </li>
                </ul>

                <ul id="menu-showhide" class="topnav menu-left-nest">
                    <li>
                        <a href="#" style="border-left:0px solid!important;" class="title-menu-left">

                            <span class="design-kit"></span>
                            <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>

                        </a>
                    </li>
                    <li>
                        <a class="tooltip-tip" href="#" title="分类管理">
                            <i class="icon-document-new"></i>
                            <span>分类管理</span>
                        </a>
                        <ul>
                            <li>
                                <a class="tooltip-tip2 " href="/myblog/public/category" title="分类列表"><i class="entypo-menu"></i><span>分类列表</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 " href="/myblog/public/category/create" title="新建分类"><i class="icon-document-edit"></i><span>新建分类</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class=" tooltip-tip tooltip-tip" href="#" title="标签管理">
                            <i class="icon-view-thumb"></i>
                            <span>标签管理</span>
                        </a>
                        <ul>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="/myblog/public/tag" title="标签管理"><i class="entypo-layout"></i><span>标签列表</span></a>
                            </li>
                        </ul>
                    </li>

                </ul>

                <ul id="menu-showhide" class="topnav menu-left-nest">
                    <li>
                        <a href="#" style="border-left:0px solid!important;" class="title-menu-left">

                            <span class="component"></span>
                            <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>

                        </a>
                    </li>


                    <li>
                        <a class="tooltip-tip" href="#" title="UI Element">
                            <i class="icon-monitor"></i>
                            <span>系统设置</span>
                        </a>
                        <ul>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="/myblog/public/seo" title="Element"><i class="icon-attachment"></i><span>首页设置</span></a>
                            </li>
                            <li><a class="tooltip-tip2 ajax-load" href="/myblog/public/link" title="Button"><i class="icon-view-list-large"></i><span>友链设置</span> </a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="{{url('/update_pwd')}}" title="Calender"><i class="entypo-newspaper"></i><span>密码重置</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="{{url('/navigation')}}" title="Calender"><i class="icon-calendar" ></i><span>导航设置</span></a>
                            </li>

                        </ul>
                    </li>


                </ul>



                <div class="side-dash">
                    <h3>
                        <span>缓存</span>

                    </h3>
                    <ul class="side-dashh-list">
                        <li>
                            {{--<div class="linebar">--}}
                            <button class="btn btn-default  button test disable" data-color="#ff0011" data-opacity="0.9">点击清除缓存</button>
                            {{--</div>--}}
                        </li>
                    </ul>
                    <h3>
                        <span>Device</span>
                    </h3>
                    <ul class="side-dashh-list">


                        <li>Avg. Traffic
                            <span>25k<i style="color:#44BBC1;" class="fa fa-arrow-circle-up"></i>
                                </span>
                        </li>
                        <li>Visitors
                            <span>80%<i style="color:#AB6DB0;" class="fa fa-arrow-circle-down"></i>
                                </span>
                        </li>
                        <li>Convertion Rate
                            <span>13m<i style="color:#19A1F9;" class="fa fa-arrow-circle-up"></i>
                                </span>
                        </li>
                    </ul>
                    <h3>
                        <span>Traffic</span>
                    </h3>
                    <ul class="side-bar-list">
                        <li>Avg. Traffic
                            <div class="linebar">5,7,8,9,3,5,3,8,5</div>
                        </li>
                        <li>Visitors
                            <div class="linebar2">9,7,8,9,5,9,6,8,7</div>
                        </li>
                        <li>Convertion Rate
                            <div class="linebar3">5,7,8,9,3,5,3,8,5</div>
                        </li>
                    </ul>
                    <h3>
                        <span>Visitors</span>
                    </h3>
                    <div id="g1" style="height:180px" class="gauge"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END OF SIDE MENU -->



<!--  PAPER WRAP -->
<div class="wrap-fluid">
    <div class="container-fluid paper-wrap bevel tlbr">





        <!-- CONTENT -->
        <!--TITLE -->
        <div class="row">
            <div id="paper-top">
                <div class="col-sm-3">
                    <h2 class="tittle-content-header">
                        <span class="entypo-doc-text"></span>
                        <span>@yield('title')
                            </span>
                    </h2>

                </div>

                <div class="col-sm-7">
                    <div class="devider-vertical visible-lg"></div>
                    <div class="tittle-middle-header">

                        <div class="alert">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <span class="tittle-alert entypo-info-circled"></span>
                            Welcome back,&nbsp;
                            <strong>{{\Illuminate\Support\Facades\Auth::user()->name}}</strong>&nbsp;&nbsp;Your last sig in at {{\Illuminate\Support\Facades\Auth::user()->updated_at}}
                        </div>


                    </div>

                </div>
                <div class="col-sm-2">
                    <div class="devider-vertical visible-lg"></div>



                </div>
            </div>
        </div>
        <!--/ TITLE -->

        <!-- BREADCRUMB -->
        <ul id="breadcrumb">
            <li>
                <span class="entypo-home"></span>
            </li>
            <li><i class="fa fa-lg fa-angle-right"></i>
            </li>
            <li><a href="#" title="Sample page 1">@yield('menu')</a>
            </li>
            <li><i class="fa fa-lg fa-angle-right"></i>
            </li>
            <li><a href="#" title="Sample page 1">@yield('page')</a>
            </li>
            <li class="pull-right">
                <div class="input-group input-widget">

                    <input style="border-radius:15px" type="text" disabled placeholder="Search..." class="form-control">
                </div>
            </li>
        </ul>

        <!-- END OF BREADCRUMB -->
        <div class="content-wrap">
            <div class="row">


                <div class="col-sm-12">

                    <!-- BLANK PAGE-->

                    <div class="nest" id="Blank_PageClose">
                        <div class="title-alt">
                            <h6>
                                @yield('pageName')</h6>
                            <div class="titleClose">
                                <a class="gone" href="#Blank_PageClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#Blank_Page_Content">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="Blank_Page_Content">

                                @yield('content')

                        </div>
                    </div>

                @yield('test')

                </div>
            </div>

            @yield('newContent')
        <!-- /END OF CONTENT -->



            <!-- FOOTER -->
            <div class="footer-space"></div>
            <div id="footer">
                <div class="devider-footer-left"></div>
                <div class="time">
                    <p id="spanDate">
                    <p id="clock">
                </div>
                <div class="copyright">Make with Love
                    <span class="entypo-heart"></span>2014 <a href="https://iphpt.com">(Themesmile) Purchase This Item</a> All Rights Reserved</div>
                <div class="devider-footer"></div>

            </div>
            <!-- / END OF FOOTER -->


        </div>

        @yield('newContent2')


    </div>
</div>

<!--  END OF PAPER WRAP -->

<!-- RIGHT SLIDER CONTENT -->
<div class="sb-slidebar sb-right">
    <div class="right-wrapper">
        <div class="row">
            <h3>
                <span><i class="entypo-gauge"></i>&nbsp;&nbsp;MAIN WIDGET</span>
            </h3>
            <div class="col-sm-12">

                <div class="widget-knob">
                        <span class="chart" style="position:relative" data-percent="86">
                            <span class="percent"></span>
                        </span>
                </div>
                <div class="widget-def">
                    <b>Distance traveled</b>
                    <br>
                    <i>86% to the check point</i>
                </div>

                <div class="widget-knob">
                        <span class="speed-car" style="position:relative" data-percent="60">
                            <span class="percent2"></span>
                        </span>
                </div>
                <div class="widget-def">
                    <b>The average speed</b>
                    <br>
                    <i>30KM/h avarage speed</i>
                </div>


                <div class="widget-knob">
                        <span class="overall" style="position:relative" data-percent="25">
                            <span class="percent3"></span>
                        </span>
                </div>
                <div class="widget-def">
                    <b>Overall result</b>
                    <br>
                    <i>30KM/h avarage Result</i>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top:0;" class="right-wrapper">
        <div class="row">
            <h3>
                <span><i class="entypo-chat"></i>&nbsp;&nbsp;CHAT</span>
            </h3>
            <div class="col-sm-12">
                <span class="label label-warning label-chat">Online</span>
                <ul class="chat">

                </ul>

                <span class="label label-chat">Offline</span>
                <ul class="chat">

                </ul>
            </div>
        </div>
    </div>
</div>

<!-- END OF RIGHT SLIDER CONTENT-->




<!-- MAIN EFFECT -->
<script src="http://zq.1i1l.com/myblog/public/Admin/assets/js/jquery-2.1.1.min.js"></script>

<script type="text/javascript" src="http://zq.1i1l.com/myblog/public/Admin/assets/js/preloader.js"></script>
<script type="text/javascript" src="http://zq.1i1l.com/myblog/public/Admin/assets/js/bootstrap.js"></script>
<script type="text/javascript" src="http://zq.1i1l.com/myblog/public/Admin/assets/js/app.js"></script>
<script type="text/javascript" src="http://zq.1i1l.com/myblog/public/Admin/assets/js/load.js"></script>
<script type="text/javascript" src="http://zq.1i1l.com/myblog/public/Admin/assets/js/main.js"></script>
<script src="http://zq.1i1l.com/myblog/public/Admin/assets/js/flatvideo/jquery.fitvids.js"></script>
<script src="http://zq.1i1l.com/myblog/public/Admin/assets/js/toastr/toastr.min.js"></script>
<script type="text/javascript" src="{{asset('Admin/layer/layer.js')}}"></script>

<script type='text/javascript' src='http://zq.1i1l.com/myblog/public/Admin/assets/js/button/progressbutton.jquery.js'></script>


@yield('js')

<script>
    // Basic FitVids Test
    $(".blog-list-nest").fitVids();
    // Custom selector and No-Double-Wrapping Prevention Test
    $(".blog-list-nest").fitVids();
    // Custom selector and No-Double-Wrapping Prevention Test


    toastr.options = {
        "closeButton": true,
        "debug": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "onclick": null,
        "showDuration": "400",
        "hideDuration": "1000",
        "timeOut": "7000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    jQuery(document).ready(function($) {

        jQuery('.test').click(function() {
            var itm = jQuery(this);
            if (itm.hasClass('disable')) {
                itm.attr('disabled', 'disabled');
            }
            var bar = itm.progressbutton({
                percent: -1
            });
            var clock = 0;

            var interval = setInterval(function() {
                bar.progressbutton({
                    percent: clock
                });
                clock = clock + 1.5;
                if (clock > 100) {
                    itm.removeAttr('disabled');
                    clearInterval(interval);
                    bar.progressbutton('reset');
                    $.ajax({
                        url:'http://zq.1i1l.com/myblog/public/clearCache'
                    })
                }

            }, 30);
        });




    });
</script>


</body>

</html>
