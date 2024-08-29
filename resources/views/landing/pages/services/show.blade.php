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
                            <h3 class="title text-theme-colored">{{ $service->title }}</h3>
                            <ul class="breadcrumb white">
                                <li><a href="{{ route('landing.index') }}">{{ __('home') }}</a></li>
                                <li class="active">{{ $service->title }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Services Details -->
        <section>
            <div class="container mt-30 mb-30 pt-30 pb-30">
                <div class="row">
                    <div class="col-md-8 blog-pull-right">
                        <div class="single-service">
                            <img src="{{ Storage::url($service->image) }}" alt="{{ $service->title }}">
                            <h4 class="line-bottom text-uppercase mt-30 mb-20">{{ $service->title }}</h4>
                            <p>
                                {!! nl2br($service->description) !!}
                            </p>
                            <div class="row mt-30">
                                <div class="col-md-7">
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

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="sidebar sidebar-left mt-sm-30 ml-30 ml-sm-0">
                            <div class="widget">
                                <div class="services-list">
                                    <ul class="list mt-0">
                                        @foreach ($services as $service_item)
                                            <li class="{{ $service_item->id == $service->id ? 'active' : '' }}"><a
                                                    href="{{ route('landing.services.show', $service_item->slug) }}">{{ $service_item->title }}</a>
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
    </x-slot:slot>
</x-landing.layout.app>
