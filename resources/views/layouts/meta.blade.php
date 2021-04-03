<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/myStyle.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plagins/fancybox-3.0/dist/css/lightbox.min.css') }}"/>







    <script src="{{ asset('assets/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ajax.js') }}" ></script>
    <script src="{{ asset('assets/plagins/fancybox-3.0/dist/js/lightbox.js') }}"></script>
    <script src="{{ asset('assets/plagins/fancybox-3.0/dist/js/lightbox.min.map') }}"></script>
    <script src="{{ asset('assets/js/accordion.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.custom.24530.js') }}"></script>
    <script src="{{ asset('assets/js/respimage.min.js') }}"></script>
    <script type="text/javascript">var mi=document.createElement('script');mi.type='text/javascript';mi.async=true;mi.src=(document.location.protocol=='https:'?'https':'http')+'://counter.megaindex.ru/core.js?t;'+escape(document.referrer)+((typeof(screen)=='undefined')?'':';'+screen.width+'*'+screen.height)+';'+escape(document.URL)+';'+document.title.substring(0,256)+';1414798';document.getElementsByTagName('head')[0].appendChild(mi);</script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


    <script>
        $(function() {
            $("[data-fancybox]").fancybox();
        });
    </script>
</head>

