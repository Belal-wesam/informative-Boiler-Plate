<x-landing.layout.app title="{{ __('contact') }}">
    <x-slot:slot>
        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-5"
            data-bg-img="https://html.kodesolution.com/2016/industrypress-html/demo/images/bg/bg11.jpg">
            <div class="container pt-100 pb-50">
                <!-- Section Content -->
                <div class="section-content pt-100">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title text-theme-colored">{{ __('contact') }}</h3>
                            <ul class="breadcrumb white">
                                <li><a href="{{ route('landing.index') }}">{{ __('home') }}</a></li>
                                <li class="active">{{ __('contact') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Divider: Contact -->
        <section class="divider">
            <div class="container pt-0">
                <div class="row mb-60 bg-deep">
                    <div class="col-sm-12 col-md-4">
                        <div class="contact-info text-center pt-60 pb-60 border-right">
                            <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
                            <h4>{{ __('call us') }}</h4>
                            <h6 class="text-gray">{{ __('phone') }}: +262 695 2601</h6>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="contact-info text-center  pt-60 pb-60 border-right">
                            <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
                            <h4>{{ __('address') }}</h4>
                            <h6 class="text-gray">121 King Street, Australia</h6>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="contact-info text-center  pt-60 pb-60">
                            <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
                            <h4>{{ __('email') }}</h4>
                            <h6 class="text-gray">you@yourdomain.com</h6>
                        </div>
                    </div>
                </div>
                <div class="row pt-10">
                    <div class="col-md-5">
                        <h4 class="mt-0 mb-30 line-bottom">{{ __('our location') }}</h4>
                        <!-- Google Map HTML Codes -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13540.753486124566!2d35.86070085!3d31.955786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sjo!4v1724842736498!5m2!1sen!2sjo"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-7">
                        <h4 class="mt-0 mb-30 line-bottom">{{ __('contact') }}</h4>
                        <!-- Contact Form -->
                        <form id="contact_form" name="contact_form" class=""
                            action="{{ route('landing.contact.send_message') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_name">{{ __('name') }} <small>*</small></label>
                                        <input id="form_name" name="form_name" class="form-control" type="text"
                                            placeholder="{{ __('name') }}" required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_email">{{ __('email') }} <small>*</small></label>
                                        <input id="form_email" name="form_email" class="form-control required email"
                                            type="email" placeholder="{{ __('email') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_name">{{ __('subject') }} <small>*</small></label>
                                        <input id="form_subject" name="form_subject" class="form-control required"
                                            type="text" placeholder="{{ __('subject') }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_phone">{{ __('phone') }}</label>
                                        <input id="form_phone" name="form_phone" class="form-control" type="text"
                                            placeholder="{{ __('phone') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form_name">{{ __('message') }}</label>
                                <textarea id="form_message" name="form_message" class="form-control required" rows="5"
                                    placeholder="{{ __('message') }}"></textarea>
                            </div>
                            <div class="form-group">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden"
                                    value="" />
                                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5"
                                    data-loading-text="Please wait...">{{ __('send message') }}</button>
                                <button type="reset"
                                    class="btn btn-default btn-flat btn-theme-colored">{{ __('reset') }}</button>
                            </div>
                        </form>

                        <!-- Contact Form Validation-->
                        <script type="text/javascript">
                            $("#contact_form").validate({
                                submitHandler: function(form) {
                                    var form_btn = $(form).find('button[type="submit"]');
                                    var form_result_div = '#form-result';
                                    $(form_result_div).remove();
                                    form_btn.before(
                                        '<div id="form-result" class="alert alert-success" role="alert" style="display: none;">{{ __('message sent') }}</div>'
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
                                            $(form_result_div).html("{{ __('message sent') }}").fadeIn('slow');
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
        </section>
    </x-slot:slot>
</x-landing.layout.app>
