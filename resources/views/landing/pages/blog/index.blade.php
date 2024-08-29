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
        <section>
            <div class="container">
                <div class="row multi-row-clearfix">
                    <div class="blog-posts">
                        @foreach ($articles as $article)
                            <div class="col-md-6">
                                <article class="post clearfix mb-30 bg-lighter">
                                    <div class="entry-header">
                                        <div class="post-thumb thumb">
                                            <img src="{{ Storage::url($article->image) }}"
                                                alt="Consequatur explicabo vel nesciunt facere pariatur a nulla."
                                                class="img-responsive img-fullwidth">
                                        </div>
                                    </div>
                                    <div class="entry-content p-20 pr-10">
                                        <div class="entry-meta media mt-0 no-bg no-border">
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
                                                    <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a
                                                            href="{{ route('landing.blog.article', $article->slug) }}">{{ Str::limit($article->title, 45) }}</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-10">{{ Str::limit($article->title, 60) }}</p>
                                        <a href="{{ route('landing.blog.article', $article->slug) }}"
                                            class="btn-read-more">{{ __('read more') }}</a>
                                        <div class="clearfix"></div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                        {{-- <div class="col-md-12">
                            <nav>
                                <ul class="pagination theme-colored">
                                    <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span>
                                        </a> </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">...</a></li>
                                    <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a>
                                    </li>
                                </ul>
                            </nav>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
    </x-slot:slot>
</x-landing.layout.app>
