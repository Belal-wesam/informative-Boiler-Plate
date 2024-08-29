<x-landing.layout.app title="{{ __('index page') }}">
    <x-slot:slot>

        {{-- hero section --}}
        <section id="home" dir="ltr">
            <div class="container-fluid p-0">

                <!-- Slider Revolution Start -->
                <div class="rev_slider_wrapper">
                    <div class="rev_slider rev_slider_default" data-version="5.0">
                        <ul>
                            <!-- SLIDE 1 -->
                            @foreach ($banners as $banner)
                                <li data-index="rs-
                                {{ $loop->iteration }}"
                                    data-transition="fade" data-slotamount="default" data-easein="default"
                                    data-easeout="default" data-masterspeed="default"
                                    data-thumb="{{ Storage::url($banner->image) }}" data-rotate="0"
                                    data-fstransition="fade" data-saveperformance="off" data-title="Web Show"
                                    data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ Storage::url($banner->image) }}" alt=""
                                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                        class="rev-slidebg" data-bgparallax="6" data-no-retina>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-resizeme sft text-black-222 text-uppercase font-raleway bg-theme-colored pl-20 pr-20"
                                        id="rs-
                                        {{ $loop->iteration }}-layer-1"
                                        data-x="['left']" data-hoffset="['30']" data-y="['middle']"
                                        data-voffset="['-125']" data-fontsize="['24']" data-lineheight="['48']"
                                        data-width="none" data-height="none" data-whitespace="nowrap"
                                        data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-speed="500"
                                        data-start="600" data-splitin="none" data-splitout="none"
                                        data-responsive_offset="on"
                                        style="z-index: 5; white-space: nowrap; font-weight:700; border-left: 8px solid #fff;">
                                        {!! nl2br($banner->heading) !!}
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-resizeme sft text-uppercase text-white font-raleway font-weight-700 m-0"
                                        id="rs-
                                        {{ $loop->iteration }}-layer-2"
                                        data-x="['left']" data-hoffset="['30']" data-y="['middle']"
                                        data-voffset="['-50']" data-fontsize="['72']" data-lineheight="['82']"
                                        data-width="none" data-height="none" data-whitespace="nowrap"
                                        data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-speed="500"
                                        data-start="800" data-splitin="none" data-splitout="none"
                                        data-responsive_offset="on"
                                        style="z-index: 5; white-space: nowrap; font-weight:700;">
                                        @if (app()->getLocale() == 'ar')
                                            مجموعة
                                        @else
                                            Sawat
                                        @endif
                                        <span class="text-theme-colored">
                                            @if (app()->getLocale() == 'ar')
                                                الصواط
                                            @else
                                                Group
                                            @endif
                                        </span>
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme sft text-white"
                                        id="rs-
                                    {{ $loop->iteration }}-layer-3"
                                        data-x="['left']" data-hoffset="['30']" data-y="['middle']"
                                        data-voffset="['20']" data-fontsize="['16','18',24']" data-lineheight="['28']"
                                        data-width="none" data-height="none" data-whitespace="nowrap"
                                        data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-speed="500"
                                        data-start="1200" data-splitin="none" data-splitout="none"
                                        data-responsive_offset="on"
                                        style="z-index: 5; white-space: nowrap; font-weight:400;">
                                        {!! nl2br($banner->sub_heading) !!}
                                    </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption sft"
                                        id="rs-
                                    {{ $loop->iteration }}-layer-4"
                                        data-x="['left']" data-hoffset="['30']" data-y="['middle']"
                                        data-voffset="['90','100','110']" data-width="none" data-height="none"
                                        data-whitespace="nowrap" data-transform_idle="o:1;s:500"
                                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-speed="500"
                                        data-start="1400" data-splitin="none" data-splitout="none"
                                        data-responsive_offset="on"
                                        style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a
                                            class="btn btn-theme-colored btn-lg btn-flat text-black-222 font-weight-600 pl-30 pr-30 mr-15"
                                            href="#">{{ __('our services') }}</a><a
                                            class="btn btn-default btn-transparent btn-bordered btn-lg btn-flat font-weight-600 pl-30 pr-30"
                                            href="#">{{ __('get a quote') }}</a>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <!-- end .rev_slider -->
                </div>
                <!-- end .rev_slider_wrapper -->
                <script>
                    $(document).ready(function(e) {
                        $(".rev_slider_default").revolution({
                            sliderType: "standard",
                            sliderLayout: "auto",
                            dottedOverlay: "none",
                            delay: 5000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                onHoverStop: "off",
                                touch: {
                                    touchenabled: "on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                },
                                arrows: {
                                    style: "gyges",
                                    enable: true,
                                    hide_onmobile: false,
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1200,
                                    tmp: '',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    }
                                },
                                bullets: {
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_under: 800,
                                    style: "hebe",
                                    hide_onleave: false,
                                    direction: "horizontal",
                                    h_align: "center",
                                    v_align: "bottom",
                                    h_offset: 0,
                                    v_offset: 30,
                                    space: 5,
                                    tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                                }
                            },
                            responsiveLevels: [1240, 1024, 778],
                            visibilityLevels: [1240, 1024, 778],
                            gridwidth: [1170, 1024, 778, 480],
                            gridheight: [580, 768, 960, 720],
                            lazyType: "none",
                            parallax: {
                                origo: "slidercenter",
                                speed: 1000,
                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                                type: "scroll"
                            },
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "on",
                            stopAfterLoops: 0,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
                            fullScreenAutoWidth: "off",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "0",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    });
                </script>
                <!-- Slider Revolution Ends -->
            </div>
        </section>



        <!-- Section: Sevices -->
        <section>
            <div class="container">
                <div class="section-title maxwidth500 vertical-line">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-uppercase mb-0">{{ __('how can we help') }}</p>
                            <h2 class="text-uppercase text-theme-colored title">{{ __('our services') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">

                        @foreach ($services as $service)
                            <div class="col-sm-6 col-md-4 maxwidth500 mb-40 wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="0.1s">
                                <img class="img-fullwidth" src="{{ Storage::url($service->image) }}" alt="">
                                <h4 class="font-weight-700 mt-20">{{ $service->title }}</h4>
                                <p>{{ Str::limit($service->description, 100, '...') }}
                                </p>
                                <a href="{{ route('landing.services.show', $service->slug) }}"
                                    class="btn btn-sm btn-theme-colored">{{ __('read more') }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: About  -->
        <section class="bg-lighter">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-5">
                            <h3 class="line-bottom mt-0">{{ __('who we are') }}</h3>
                            <h4 class="font-18 font-weight-500 text-gray-dimgray mt-20 mb-15">
                                {!! nl2br($about->heading) !!}
                            </h4>
                            <p>{!! nl2br($about->sub_heading) !!}</p>
                            <a href="#"
                                class="btn btn-theme-colored btn-flat btn-lg mt-15 mr-15">{{ __('read more') }}</a>
                            <a href="#" class="btn btn-default btn-flat btn-lg mt-15">{{ __('contact') }}</a>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-hover-border mt-sm-60">
                                        <img src="{{ Storage::url($about->mission_image) }}" class="img-fullwidth"
                                            alt="mission image">
                                    </div>
                                    <h5>{{ __('our mission') }}</h5>
                                    <p class="mb-5">{{ $about->mission }}</p>
                                </div>
                                <div class="col-md-4">
                                    <div class="img-hover-border mt-sm-40">
                                        <img src="{{ Storage::url($about->approach_image) }}" class="img-fullwidth"
                                            alt="approach image">
                                    </div>
                                    <h5>{{ __('our approach') }}</h5>
                                    <p class="mb-5">{{ $about->approach }}</p>
                                </div>
                                <div class="col-md-4">
                                    <div class="img-hover-border mt-sm-40">
                                        <img src="{{ Storage::url($about->vision_image) }}" class="img-fullwidth"
                                            alt="vision image">
                                    </div>
                                    <h5>{{ __('our vision') }}</h5>
                                    <p class="mb-5">{{ $about->vision }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: Project -->
        <section class="layer-overlay overlay-dark-6"
            data-bg-img="{{ asset('/landing/assets/images/projects-background.jpg') }}">
            <div class="container pb-40">
                <div class="section-title vertical-line">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-uppercase text-gray-lightgray mb-0">{{ __('see our latest projects') }}</p>
                            <h2 class="text-uppercase text-theme-colored title">{{ __('latest projects') }}
                        </div>
                    </div>
                </div>
                <div class="row multi-row-clearfix">
                    <div class="col-md-12">
                        <div class="owl-carousel-4col owl-nav-top" data-nav="true">
                            @foreach ($projects as $project)
                                <div class="item">
                                    <div class="project mb-30">
                                        <div class="thumb">
                                            <img class="img-fullwidth" alt="project image"
                                                src="{{ Storage::url($project->image) }}">
                                            <div class="hover-link">
                                                <a href="{{ route('landing.projects.show', $project->slug) }}"><i
                                                        class="flaticon-attachment"></i></a>
                                            </div>
                                        </div>
                                        <div class="project-details p-15 pt-10 pb-10">
                                            <h4 class="title font-weight-700 text-uppercase mt-0">
                                                {{ $project->title }}
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: Why Choose Us -->
        <section class="bg-silver-light bg-no-repeat bg-img-left-top" data-bg-img="images/photos/2.png">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="line-bottom mt-0">{{ __('why choose us') }}</h3>
                            <div id="accordion-parent" class="panel-group accordion mb-0">
                                @foreach ($faqs as $faq)
                                    <div class="panel">
                                        <div class="panel-title"> <a
                                                class="{{ $loop->iteration == 1 ? 'active' : '' }}"
                                                data-parent="#accordion-parent" data-toggle="collapse"
                                                href="#accordion{{ $loop->iteration }}" aria-expanded="true">
                                                <span class="open-sub"></span> {{ $faq->question }}</a> </div>
                                        <div id="accordion{{ $loop->iteration }}"
                                            class="panel-collapse collapse {{ $loop->iteration == 1 ? 'in' : '' }}"
                                            role="tablist" aria-expanded="true">
                                            <div class="panel-content">
                                                <p>{{ $faq->answer }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="line-bottom mt-0 mt-sm-40">{{ __('our clients say') }}</h3>
                            <div class="bxslider bx-nav-top">

                                @foreach ($reviews as $review)
                                    <div class="media border-1px bg-white sm-maxwidth400 p-15 mt-0 mb-15">
                                        <div class="testimonial pt-10">
                                            <div class="thumb pull-left mb-0 mr-0 pr-20">
                                                <img width="75" class="img-circle" alt=""
                                                    src="{{ Storage::url($review->image) }}">
                                            </div>
                                            <div class="ml-100 ">
                                                <p>{{ $review->review }}</p>
                                                <p class="author mt-10">- <span
                                                        class="text-theme-colored">{{ $review->name }}</span>
                                                    <small><em>{{ $review->position }}</em></small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Divider: Funfact -->
        <section class="divider parallax layer-overlay overlay-white-9"
            data-bg-img="https://html.kodesolution.com/2016/industrypress-html/demo/images/bg/bg6.jpg"
            data-parallax-ratio="0.7">
            <div class="container pt-30 pb-0">
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-fullwidth" src="{{ Storage::url($numbers->image) }}" alt="numbers image">
                    </div>
                    <div class="col-md-8 pt-100">
                        @foreach (json_decode($numbers->numbers) as $number)
                            <div class="col-xs-12 col-sm-6 col-md-4 mb-md-50">
                                <div class="funfact text-center">
                                    <i class="{{ $number->icon }} font-weight-800 font-32 mt-5"></i>
                                    <h2 class="animate-number text-theme-colored font-36 font-weight-500 font-trirong mt-10 mb-0"
                                        data-value="{{ $number->number }}" data-animation-duration="2000">0</h2>
                                    <h5 class="text-uppercase font-14 text-gray">
                                        @if (app()->getLocale() == 'ar')
                                            {{ $number->label_ar }}
                                        @else
                                            {{ $number->label_en }}
                                        @endif
                                    </h5>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>



        <!-- Section: blog -->
        <section id="blog" class="bg-no-repeat bg-img-right-bottom"
            data-bg-img="/landing/assets/images/photos/2.png">
            <div class="container pb-sm-30">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-uppercase line-bottom-center mt-0">{{ __('latest news') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        @foreach ($articles as $article)
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <article class="post clearfix bg-lighter mb-sm-30">
                                    <div class="entry-header">
                                        <div class="post-thumb thumb">
                                            <img src="{{ Storage::url($article->image) }}"
                                                alt="{{ $article->title }}" class="img-responsive img-fullwidth">
                                        </div>
                                    </div>
                                    <div class="entry-content p-20">
                                        <h4 class="entry-title text-white text-uppercase"><a class="font-weight-600"
                                                href="{{ route('landing.blog.article', $article->slug) }}">{{ $article->title }}</a>
                                        </h4>
                                        <div class="entry-meta">
                                            <ul class="list-inline font-12 mb-10">
                                                <li>
                                                    <i class="fa fa-calendar text-theme-colored mr-5"></i>
                                                    {{ $article->created_at->format('d-M-Y') }}
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="mt-5">
                                            {!! Str::limit($article->body) !!}
                                        </p>
                                        <a class="btn btn-theme-colored btn-sm mt-10"
                                            href="{{ route('landing.blog.article', $article->slug) }}">
                                            {{ __('read more') }}</a>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Divider: Clients -->
        <section class="clients bg-theme-colored">
            <div class="container pt-0 pb-0">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        <!-- Section: Clients -->
                        <div class="owl-carousel-6col clients-logo transparent text-center">
                            @foreach ($partners as $partner)
                                <div class="item"> <a href="#"><img
                                            src="{{ Storage::url($partner->image) }}"
                                            alt="{{ $partner->title }}"></a></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </x-slot:slot>
</x-landing.layout.app>
