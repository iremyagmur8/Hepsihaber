<?php

function sanitize_output($buffer)
{

    $search = array(
        '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
        '/[^\S ]+\</s',     // strip whitespaces before tags, except space
        '/(\s)+/s',         // shorten multiple whitespace sequences
        '/<!--(.|\s)*?-->/' // Remove HTML comments
    );

    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}

ob_start("sanitize_output");

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content="@yield('desc')">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>@yield('title') {{Config::get("solaris.site.name")}}</title>
    <!-- Stylesheets & Fonts -->
    <link href="/assetWeb/polo/css/plugins.css" rel="stylesheet">
    <link href="/assetWeb/polo/css/style.css" rel="stylesheet">
    <!-- Main Page Big Carousel Css -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <!-- Template color -->
    <link href="/assetWeb/polo/css/color-variations/purple.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/custom.css?v={{rand(0,999)}}" rel="stylesheet">
    <script src="/assetWeb/polo/js/jquery.js"></script>
    @isset($amp)
        <link rel="amphtml" href="{{$amp}}"/> @endisset
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{Config::get("solaris.site.google")}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', '{{Config::get("solaris.site.google")}}');
    </script>
</head>

<body>
<?php
use Teknomavi\Tcmb\Doviz;
use Carbon\Carbon;

$dt = now()->translatedFormat('d F Y l');
$doviz = new Doviz();
?>
<div class="body-inner">
    <div id="topbar" class="d-none d-xl-block d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="topbar-dropdown">
                        <div class="title">{{$dt}}</div>
                    </div>
                    <div class="topbar-dropdown">
                        <div class="title"><i class="fa fa-sun-o"></i>Melburne 15°</div>
                    </div>
                    <div class="topbar-dropdown">

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="topbar-dropdown">
                        <div class="title">
                            <a>USD&nbsp;</a> <span>{{$doviz->kurAlis("USD")}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <a>EURO&nbsp;</a><span>{{$doviz->kurAlis("EUR")}}</span>
                        </div>
                    </div>
                </div>
                @isset($vars->contact)
                    <div class="col-md-4 d-none d-sm-block">
                        <div class="social-icons social-icons-medium social-icons-colored">
                            <ul>
                                @if($vars->contact->facebook)
                                    <li class="social-facebook"><a href="{{$vars->contact->facebook}}"><i
                                                class="fab fa-facebook-f"></i></a></li>@endif
                                @if($vars->contact->twitter)
                                    <li class="social-twitter"><a href="{{$vars->contact->twitter}}"><i
                                                class="fab fa-twitter"></i></a></li>@endif
                                @if($vars->contact->linkedin)
                                    <li class="social-linkedin"><a href="{{$vars->contact->linkedin}}"><i
                                                class="fab fa-linkedin"></i></a></li>@endif
                                @if($vars->contact->instagram)
                                    <li class="social-instagram"><a href="{{$vars->contact->instagram}}"><i
                                                class="fab fa-instagram"></i></a></li>@endif
                                @if($vars->contact->youtube)
                                    <li class="social-youtube"><a href="{{$vars->contact->youtube}}"><i
                                                class="fab fa-youtube"></i></a></li>@endif

                            </ul>
                        </div>
                    </div>
                @endisset
            </div>
        </div>
    </div>


    <header id="header">
        <div class="header-inner">
            <div class="container">
                <!--Logo-->
                <div id="logo"><a href="/">{{Config::get("solaris.site.name")}}</a></div>
                <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i
                            class="icon-x"></i></a>
                    <form class="search-form" action="search-results-page.html" method="get">
                        <input class="form-control" name="q" type="text" placeholder="Type &amp; Search...">
                        <span class="text-muted">Start typing &amp; press "Enter" or "ESC" to close</span>
                    </form>
                </div>
                <div class="header-extras">
                    <ul>
                        <li>
                            <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                        </li>
                    </ul>
                </div>
                <div id="mainMenu-trigger"><a class="lines-button x"><span class="lines"></span></a></div>
                <div id="mainMenu">
                    <div class="container">
                        <nav>
                            <ul>
                                @isset( $vars->menu)
                                    @if(count($vars->menu)>0)
                                        @foreach($vars->menu as $key=>$val)
                                            <li @if(count($val->childs)>0) class="dropdown mega-menu-item" @endif>
                                                <span class="dropdown-arrow"></span>
                                                <a href="@if($val->link){{$val->link}}@else{{"/".str_slug($val->title,"-")."/".$val->id.".htm"}}@endif">{{$val->title}}</a>
                                                @if(count($val->childs)>0)
                                                    <ul class="dropdown-menu">
                                                        <div class="row">
                                                            @foreach($val->childs as $xKey=>$cVal)
                                                                <div class="col-lg-2">
                                                                    <ul>
                                                                        <li class="mega-menu-content">
                                                                            <a href="@if($cVal->link){{$cVal->link}}@else{{"/".str_slug($cVal->title,"-")."/".$cVal->id.".htm"}}@endif">{{$cVal->title}}</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </ul>
                                            </li>
                                            @endif
                                        @endforeach
                                    @endif
                                @endisset

                            </ul>
                        </nav>
                    </div>
                </div>
                <!--end: Navigation-->
            </div>
        </div>
    </header>
    <div class="ticker-wrap">
        <div class="ticker">
            <div class="ticker__item">Letterpress chambray brunch.</div>
            <div class="ticker__item">Vice mlkshk crucifix beard chillwave meditation hoodie asymmetrical Helvetica.</div>
            <div class="ticker__item">Ugh PBR&B kale chips Echo Park.</div>
            <div class="ticker__item">Gluten-free mumblecore chambray mixtape food truck. </div>
        </div>
    </div>
@yield("content")

<!-- Footer -->
    <footer id="footer">

        <div class="copyright-content">
            <div class="container">
                <div class="copyright-text text-center">&copy; {{date("Y")}} {{Config::get("solaris.site.name")}}<a
                        href="#"
                        target="_blank"
                        rel="noopener"> </a></div>
            </div>
        </div>
    </footer>
    <!-- end: Footer -->

</div>
<!-- end: Body Inner -->

<div id="cookieNotify" class="modal-strip cookie-notify background-dark" data-delay="1000" data-expire="1"
     data-cookie-name="cookiebar2020_1" data-cookie-enabled="true">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-sm-center sm-center sm-m-b-10 m-t-5">
                {{Config::get("solaris.site.cookiedesc")}}
            </div>
            <div class="col-lg-4 text-right sm-text-center sm-center">

                <button type="button" class="btn btn-rounded btn-light btn-sm modal-confirm">
                    {{Config::get("solaris.site.cookiebutton")}}
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Scroll top -->
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<!--Plugins-->

<script src="/assetWeb/polo/js/plugins.js"></script>

<!--Template functions-->
<script src="/assetWeb/polo/js/functions.js"></script>
<script src="/js/solaris.js"></script>
<!-- Main Page Big Carousel js -->
<script src="carousel.js?v={{rand(0,999)}}"></script>

</body>
</html><?php ob_end_flush();?>
