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
                            <h3 class="title text-theme-colored">{{ __('projects') }}</h3>
                            <ul class="breadcrumb white">
                                <li><a href="{{ route('landing.index') }}">{{ __('home') }}</a></li>
                                <li class="active">{{ __('projects') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Section: Projects -->
        <section>
            <div class="container pb-30">
                <div class="section-content">
                    <div class="row multi-row-clearfix">
                        @foreach ($projects as $project)
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="project mb-30">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="{{ $project->title }}"
                                            src="{{ Storage::url($project->image) }}">
                                        <div class="hover-link">
                                            <a href="{{ route('landing.projects.show', $project->slug) }}"><i
                                                    class="flaticon-attachment"></i></a>
                                        </div>
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h4 class="title font-weight-700 text-uppercase mt-0">{{ $project->title }}</h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </x-slot:slot>
</x-landing.layout.app>
