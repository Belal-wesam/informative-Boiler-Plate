<!DOCTYPE html>
<html lang="en" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Favicon and Touch Icons -->
    <link href="{{ asset('/landing/assets/images/favicon.png') }}" rel="shortcut icon" type="image/png">
    <link href="{{ asset('/landing/assets/images/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('/landing/assets/images/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('/landing/assets/images/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon"
        sizes="114x114">
    <link href="{{ asset('/landing/assets/images/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon"
        sizes="144x144">




    @if (app()->getLocale() == 'en')
        <!-- Stylesheet -->
        <link href="{{ asset('/landing/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/landing/assets/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/landing/assets/css/animate.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/landing/assets/css/css-plugin-collections.css') }}" rel="stylesheet" />
        <!-- CSS | menuzord megamenu skins -->
        <link id="menuzord-menu-skins"
            href="{{ asset('/landing/assets/css/menuzord-skins/menuzord-rounded-boxed.css') }}" rel="stylesheet" />
        <!-- CSS | Main style file -->
        <link href="{{ asset('/landing/assets/css/style-main.css') }}" rel="stylesheet" type="text/css">
        <!-- CSS | Preloader Styles -->
        <link href="{{ asset('/landing/assets/css/preloader.css') }}" rel="stylesheet" type="text/css">
        <!-- CSS | Custom Margin Padding Collection -->
        <link href="{{ asset('/landing/assets/css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet"
            type="text/css">
        <!-- CSS | Responsive media queries -->
        <link href="{{ asset('/landing/assets/css/responsive.css') }}" rel="stylesheet" type="text/css">
        <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
        <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

        <!-- Revolution Slider 5.x CSS settings -->
        <link href="{{ asset('/landing/assets/js/revolution-slider/css/settings.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('/landing/assets/js/revolution-slider/css/layers.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('/landing/assets/js/revolution-slider/css/navigation.css') }}" rel="stylesheet"
            type="text/css" />

        <!-- CSS | Theme Color -->
        <link href="{{ asset('/landing/assets/css/colors/theme-skin-yellow.css') }}" rel="stylesheet" type="text/css">

        <!-- external javascripts -->
        <script src="{{ asset('/landing/assets/js/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ asset('/landing/assets/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('/landing/assets/js/bootstrap.min.js') }}"></script>
        <!-- JS | jquery plugin collection for this theme -->
        <script src="{{ asset('/landing/assets/js/jquery-plugin-collection.js') }}"></script>

        <!-- Revolution Slider 5.x SCRIPTS -->
        <script src="{{ asset('/landing/assets/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('/landing/assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
    @else
        <!-- Stylesheet -->
        <link href="{{ asset('/landing/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/landing/assets/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/landing/assets/css/animate.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/landing/assets/css/css-plugin-collections.css') }}" rel="stylesheet" />
        <!-- CSS | menuzord megamenu skins -->
        <link id="menuzord-menu-skins"
            href="{{ asset('/landing/assets/css/menuzord-skins/menuzord-rounded-boxed.css') }}" rel="stylesheet" />
        <!-- CSS | Main style file -->
        <link href="{{ asset('/landing/assets/css/style-main.css') }}" rel="stylesheet" type="text/css">
        <!-- CSS | Preloader Styles -->
        <link href="{{ asset('/landing/assets/css/preloader.css') }}" rel="stylesheet" type="text/css">
        <!-- CSS | Custom Margin Padding Collection -->
        <link href="{{ asset('/landing/assets/css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet"
            type="text/css">
        <!-- CSS | Responsive media queries -->
        <link href="{{ asset('/landing/assets/css/responsive.css') }}" rel="stylesheet" type="text/css">
        <!-- CSS | RTL Layout -->
        <link href="{{ asset('/landing/assets/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/landing/assets/css/style-main-rtl.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/landing/assets/css/style-main-rtl-extra.css') }}" rel="stylesheet" type="text/css">
        <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
        <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

        <!-- Revolution Slider 5.x CSS settings -->
        <link href="{{ asset('/landing/assets/js/revolution-slider/css/settings.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('/landing/assets/js/revolution-slider/css/layers.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('/landing/assets/js/revolution-slider/css/navigation.css') }}" rel="stylesheet"
            type="text/css" />

        <!-- CSS | Theme Color -->
        <link href="{{ asset('/landing/assets/css/colors/theme-skin-yellow.css') }}" rel="stylesheet"
            type="text/css">

        <!-- external javascripts -->
        <script src="{{ asset('/landing/assets/js/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ asset('/landing/assets/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('/landing/assets/js/bootstrap.min.js') }}"></script>
        <!-- JS | jquery plugin collection for this theme -->
        <script src="{{ asset('/landing/assets/js/jquery-plugin-collection.js') }}"></script>

        <!-- Revolution Slider 5.x SCRIPTS -->
        <script src="{{ asset('/landing/assets/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('/landing/assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
    @endif

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <title>{{ $title }}</title>
</head>

<body>

    <div id="wrapper" class="clearfix">
        <!-- preloader -->
        <div id="preloader">
            <div id="spinner">
                <img class="ml-5" src="/landing/assets/images/preloaders/3.gif" alt="">
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
        </div>
        <x-landing.partials.navbar />

        {{-- page content --}}
        <div class="main-content">
            {{ $slot }}
        </div>
        <x-landing.partials.footer />
    </div>

    <script src="{{ asset('/landing/assets/js/custom.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('/landing/assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('/landing/assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('/landing/assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('/landing/assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('/landing/assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('/landing/assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('/landing/assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('/landing/assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('/landing/assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}">
    </script>

</body>

</html>
