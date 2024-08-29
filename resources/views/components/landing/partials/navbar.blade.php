<!-- Header -->
<header id="header" class="header">
    <div class="header-top bg-black-333 sm-text-center border-top-theme-color-3px p-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="widget no-border m-0">
                        <ul class="list-inline xs-text-center text-white mt-5">
                            <li class="m-0 pl-10 pr-10"> <a href="#" class="text-white"><i
                                        class="fa fa-phone text-theme-colored"></i> 123-456-789</a> </li>
                            <li class="m-0 pl-10 pr-10">
                                <a href="#" class="text-white"><i class="fa fa-envelope-o text-theme-colored"></i>
                                    contact@yourdomain.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 pr-0">
                    <div class="widget no-border m-0">
                        <ul
                            class="styled-icons icon-dark icon-flat icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                            <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-colored btn-flat btn-theme-colored bs-modal-ajax-load pb-10" data-toggle="modal"
                        data-target="#BSParentModal" href="ajax-load/reservation-form.html">{{ __('get a quote') }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
            <div class="container">
                <nav id="menuzord-right" class="menuzord default">
                    <a class="menuzord-brand pull-left flip xs-pull-center mt-20" href="{{ route('landing.index') }}">
                        <img src="/landing/assets/images/logo-wide.png" alt="">
                    </a>
                    <ul class="menuzord-menu">
                        <li @class([
                            '',
                            'active current' => Str::contains(
                                Route::currentRouteName(),
                                'landing.index'),
                        ])><a href="{{ route('landing.index') }}">{{ __('home') }}</a>
                        </li>
                        <li @class([
                            '',
                            'active current' => Str::contains(
                                Route::currentRouteName(),
                                'landing.about'),
                        ])><a href="{{ route('landing.about') }}">{{ __('about') }}</a>
                        </li>
                        <li @class([
                            '',
                            'active current' => Str::contains(
                                Route::currentRouteName(),
                                'landing.services'),
                        ])><a
                                href="{{ route('landing.services') }}">{{ __('services') }}</a></li>
                        <li @class([
                            '',
                            'active current' => Str::contains(
                                Route::currentRouteName(),
                                'landing.projects'),
                        ])><a
                                href="{{ route('landing.projects') }}">{{ __('projects') }}</a></li>
                        <li @class([
                            '',
                            'active current' => Str::contains(
                                Route::currentRouteName(),
                                'landing.contact'),
                        ])><a
                                href="{{ route('landing.contact') }}">{{ __('contact') }}</a></li>
                        @if (app()->getLocale() == 'ar')
                            <li class="current active"><a
                                    href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a></li>
                        @else
                            <li class="current active"><a
                                    href="{{ LaravelLocalization::getLocalizedURL('ar') }}">العربية</a></li>
                        @endif
                        <li class="scrollable-fix"></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
