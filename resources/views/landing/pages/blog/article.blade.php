<x-landing.layout.app title="{{ __('blog') }}">
    <x-slot:slot>
        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-5"
            data-bg-img="https://html.kodesolution.com/2016/industrypress-html/demo/images/bg/bg11.jpg">
            <div class="container pt-100 pb-50">
                <!-- Section Content -->
                <div class="section-content pt-100">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title text-theme-colored">{{ __('blog') }}</h3>
                            <ul class="breadcrumb white">
                                <li><a href="{{ route('landing.index') }}">{{ __('home') }}</a></li>
                                <li class="active">{{ __('blog') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: Blog -->
        <section>
            <div class="container mt-30 mb-30 pt-30 pb-30">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="blog-posts single-post">
                            <article class="post clearfix mb-0">
                                <div class="entry-header">
                                    <div class="post-thumb thumb"> <img src="{{ Storage::url($article->image) }}"
                                            alt="" class="img-responsive img-fullwidth"> </div>
                                </div>
                                <div class="entry-content">
                                    <div class="entry-meta media no-bg no-border mt-15 pb-20">
                                        <div
                                            class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                            <ul>
                                                <li class="font-16 text-white font-weight-600">
                                                    {{ $article->created_at->format('d') }}</li>
                                                <li class="font-12 text-white text-uppercase">
                                                    {{ $article->created_at->format('M') }}</li>
                                            </ul>
                                        </div>
                                        <div class="media-body pl-15">
                                            <div class="event-content pull-left flip">
                                                <h4 class="entry-title text-white text-uppercase m-0"><a
                                                        href="#">{{ $article->title }}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-15">
                                        {!! $article->body !!}
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-slot:slot>
</x-landing.layout.app>
