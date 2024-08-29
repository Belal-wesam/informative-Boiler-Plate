<x-landing.layout.app title="{{ __('projects') }}">
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


        <!-- Section: Causes -->
        <section>
            <div class="container">
                <div class="row mtli-row-clearfix">
                    <div class="col-sm-6 col-md-8 col-lg-8">
                        <div class="project mb-30">
                            <div class="thumb">
                                <img class="img-fullwidth" alt="project image"
                                    src="{{ Storage::url($project->image) }}">

                            </div>
                            <div class="project-details p-15 pt-10 pb-10">
                                <h4 class="title font-weight-700 text-uppercase mt-0">{{ $project->title }}</h4>
                            </div>
                        </div>
                        <div class="event-details">
                            {!! nl2br($project->description) !!}
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="sidebar sidebar-left mt-sm-30 ml-30 ml-sm-0">
                            <div class="widget">
                                <div class="services-list">
                                    <ul class="list mt-0">
                                        @foreach ($projects as $project_item)
                                            <li class="{{ $project_item->id == $project->id ? 'active' : '' }}"><a
                                                    href="{{ route('landing.projects.show', $project_item->slug) }}">{{ $project_item->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title line-bottom">{{ __('quick contact') }}</h4>
                                <form id="quick_contact_form_sidebar" name="footer_quick_contact_form"
                                    class="quick-contact-form" action="includes/quickcontact.php" method="post">
                                    <div class="form-group">
                                        <input name="form_email" class="form-control" type="text" required=""
                                            placeholder="{{ __('email') }}">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="form_message" class="form-control" required="" placeholder="{{ __('message') }}" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input name="form_botcheck" class="form-control" type="hidden"
                                            value="" />
                                        <button type="submit"
                                            class="btn btn-default btn-flat btn-xs btn-quick-contact text-gray pt-5 pb-5"
                                            data-loading-text="Please wait...">{{ __('send') }}</button>
                                    </div>
                                </form>

                                <!-- Quick Contact Form Validation-->
                                <script type="text/javascript">
                                    $("#quick_contact_form_sidebar").validate({
                                        submitHandler: function(form) {
                                            var form_btn = $(form).find('button[type="submit"]');
                                            var form_result_div = '#form-result';
                                            $(form_result_div).remove();
                                            form_btn.before(
                                                '<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>'
                                            );
                                            var form_btn_old_msg = form_btn.html();
                                            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                            $(form).ajaxSubmit({
                                                dataType: 'json',
                                                success: function(data) {
                                                    if (data.status == 'true') {
                                                        $(form).find('.form-control').val('');
                                                    }
                                                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                                                    $(form_result_div).html(data.message).fadeIn('slow');
                                                    setTimeout(function() {
                                                        $(form_result_div).fadeOut('slow')
                                                    }, 6000);
                                                }
                                            });
                                        }
                                    });
                                </script>
                            </div>
                        </div>
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
