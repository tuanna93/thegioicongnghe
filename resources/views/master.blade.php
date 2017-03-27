<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"  lang="vi-vn"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"  lang="vi-vn"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"  lang="vi-vn"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="vi-vn"> <!--<![endif]-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300&amp;subset=vietnamese,latin,latin-ext" rel="stylesheet" type="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <base  />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="@yield('description')" />
    <title>@yield('title')</title>
    <link href="{{ App\Helpers\Helpers::page_get_option('favicon') }}" rel="shortcut icon" />
    <link href="/css/font.css" rel="stylesheet" type="text/css">
    <link href="/css/backup.css" rel="stylesheet" type="text/css">
    <link href="/css/chosen.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
    <link href="/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="/css/default.css" rel="stylesheet" type="text/css">
    <link href="/css/jsocial_share.css" rel="stylesheet" type="text/css">
    <link href="/css/vertical-menu.css" rel="stylesheet" type="text/css">
    <link href="/css/mobile-menu.css" rel="stylesheet" type="text/css">
    <link href="/css/template.css" rel="stylesheet" type="text/css">
    <link href="/css/gallery.css" rel="stylesheet" type="text/css">
    <link href="/css/preset4.css" rel="stylesheet" type="text/css">
    <link href="/css/custom.css" rel="stylesheet" type="text/css">
    <link href="/css/camera.css" rel="stylesheet" type="text/css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="/css/jux-font-awesome.css" rel="stylesheet" type="text/css">
    <link href="/css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="/css/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="/css/red.css" rel="stylesheet" type="text/css">
    <link href="/css/custom-301.css" rel="stylesheet" type="text/css">
    <link href="/css/horizontal-menu.css" rel="stylesheet" type="text/css">
    <link href="/css/ajaxsearch.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/my_style.css">
</head>

<body class="featured homepage  ltr preset4 menu-home responsive bg hfeed clearfix">

    <div class="row-offcanvas row-offcanvas-left">

        <div class="body-innerwrapper">
        <!--[if lt IE 8]>
        <div class="chromeframe alert aler-danger" style="text-align:center">You are using an <strong>outdated</strong> browser. Please <a target="_blank" href="http://browsehappy.com/">upgrade your browser</a> or <a target="_blank" href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</div>
        <![endif]-->

        @include('widgets.header.header')

        @yield('content')

        @include('widgets.footer.footer')

        </div>

    </div>

    <script src="/js/jquery.min.js" type="text/javascript"></script>
    {{--<script src="/js/ckeditor/ckeditor.js" type="text/javascript"></script>--}}
    <script src="/js/jquery-noconflict.js" type="text/javascript"></script>
    <script src="/js/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="/js/chosen.jquery.min.js" type="text/javascript"></script>
    <script src="/js/jquery-noconflict.js" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/js/modernizr-2.6.2.min.js" type="text/javascript"></script>
    <script src="/js/helix.core.js" type="text/javascript"></script>
    <script src="/js/menu.js" type="text/javascript"></script>
    <script src="/js/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="/js/jquery.touchSwipe.min.js" type="text/javascript"></script>
    <script src="/js/jquery.flexslider-min.js" type="text/javascript"></script>
    <script src="/js/template.js" type="text/javascript"></script>
    <script src="/js/owl.carousel.js" type="text/javascript"></script>
    <script type="text/javascript" src="/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="/js/jquery.easy-ticker.min.js"></script>
    <script src="/js/jquery.mobile.customized.min.js" type="text/javascript"></script>
    <script src="/js/camera.min.js" type="text/javascript"></script>
    <script src="/js/headroom.js" type="text/javascript"></script>
    <script src="/js/horizontal-menu.js" type="text/javascript"></script>
    <script src="/js/mootools-core.js" type="text/javascript"></script>
    <script src="/js/core.js" type="text/javascript"></script>
    <script src="/js/jquery.media.js" type="text/javascript"></script>
    <script src="/js/functions.js" type="text/javascript"></script>
    <script src="/js/validateForm.js" type="text/javascript"></script>
    <script src="/js/ajaxsearch.js" type="text/javascript"></script>
    <script src="/js/my_script.js"></script>
</body>
</html>