<x-landing.layout.app title="{{ __('services') }}">
    <x-slot:slot>
        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-5"
            data-bg-img="https://html.kodesolution.com/2016/industrypress-html/demo/images/bg/bg11.jpg">
            <div class="container pt-100 pb-50">
                <!-- Section Content -->
                <div class="section-content pt-100">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title text-theme-colored">{{ __('about') }}</h3>
                            <ul class="breadcrumb white">
                                <li><a href="{{ route('landing.index') }}">{{ __('home') }}</a></li>
                                <li class="active">{{ __('about') }}</li>
                            </ul>
                        </div>
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
                            <a href="{{ route('landing.contact') }}"
                                class="btn btn-default btn-flat btn-lg mt-15">{{ __('contact') }}</a>
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

        <!-- Divider: Clients -->
        <section class="clients bg-theme-colored">
            <div class="container pt-0 pb-0">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        <!-- Section: Clients -->
                        <div class="owl-carousel-6col clients-logo transparent text-center">
                            @foreach ($partners as $partner)
                                <div class="item"> <a href="#"><img src="{{ Storage::url($partner->image) }}"
                                            alt="{{ $partner->title }}"></a></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-slot:slot>
</x-landing.layout.app>
