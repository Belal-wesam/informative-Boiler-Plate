@extends('admin.layout.app')

@section('title')
    @lang('nav.reviews')
@endsection

@section('css-vendor')
    <link rel="stylesheet" href="{{ asset('/dashboard/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('/dashboard/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('/dashboard/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('/dashboard/assets/vendor/libs/select2/select2.css') }}" />
@endsection

{{-- main content --}}
@section('content')
    <div class="card">
        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
            <h5 class="card-title mb-0">@lang('nav.reviews')</h5>
            {{-- check if auth user has ability to create  --}}
            @if (auth('admin')->user()->hasAbilityTo('create reviews'))
                <button class="btn btn-primary" data-bs-target="#addReviewModal" data-bs-toggle="modal"><i
                        class="bx bx-plus me-0 me-lg-2"></i><span
                        class="d-none d-lg-inline-block">{{ __('add review') }}</span></button>
            @endif
        </div>
        <div class="card-datatable table-responsive">
            <table class="datatables-categories table border-top">
                <thead>
                    <tr>
                        <th></th>
                        <th>{{ __('name') }}</th>
                        <th>{{ __('review') }}</th>
                        <th>{{ __('categories.created_at') }}</th>
                        <th class="d-flex justify-content-center" data-searchable="false" data-orderable="false">
                            @lang('general.actions')</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>




    <!-- Add Modal -->
    <div class="modal fade" id="addReviewModal" tabindex="-1" aria-labelledby="addReviewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addReviewModalLabel">{{ __('add review') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="addCategoryForm">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="name_en" class="form-label">{{ __('name en') }}</label>
                                    <input type="text" name="name_en" placeholder="{{ __('name en') }}" id="name_en"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="name_ar" class="form-label">{{ __('name ar') }}</label>
                                    <input type="text" name="name_ar" placeholder="{{ __('name ar') }}" id="name_ar"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="position_en" class="form-label">{{ __('position en') }}</label>
                                    <input type="text" name="position_en" placeholder="{{ __('position en') }}"
                                        id="position_en" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="position_ar" class="form-label">{{ __('position ar') }}</label>
                                    <input type="text" name="position_ar" placeholder="{{ __('position ar') }}"
                                        id="position_ar" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="review_en" class="form-label">{{ __('review en') }}</label>
                                    <textarea name="review_en" id="review_en" placeholder="{{ __('review en') }}" cols="30" rows="7"
                                        class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="review_ar" class="form-label">{{ __('review ar') }}</label>
                                    <textarea name="review_ar" id="review_ar" placeholder="{{ __('review ar') }}" cols="30" rows="7"
                                        class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="image" class="form-label">{{ __('image') }}</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="submit-create-btn" class="btn btn-primary">@lang('general.create')</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('general.cancel')</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editReviewModal" tabindex="-1" aria-labelledby="editReviewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editReviewModalLabel">@lang('general.edit')</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="editCategoryForm">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="edit_name_en" class="form-label">{{ __('name en') }}</label>
                                    <input type="text" name="edit_name_en" placeholder="{{ __('name en') }}"
                                        id="edit_name_en" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="edit_name_ar" class="form-label">{{ __('name ar') }}</label>
                                    <input type="text" name="edit_name_ar" placeholder="{{ __('name ar') }}"
                                        id="edit_name_ar" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="edit_position_en" class="form-label">{{ __('position en') }}</label>
                                    <input type="text" name="edit_position_en" placeholder="{{ __('position en') }}"
                                        id="edit_position_en" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="edit_position_ar" class="form-label">{{ __('position ar') }}</label>
                                    <input type="text" name="edit_position_ar" placeholder="{{ __('position ar') }}"
                                        id="edit_position_ar" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="edit_review_en" class="form-label">{{ __('review en') }}</label>
                                    <textarea name="edit_review_en" id="edit_review_en" placeholder="{{ __('review en') }}" cols="30"
                                        rows="7" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="edit_review_ar" class="form-label">{{ __('review ar') }}</label>
                                    <textarea name="edit_review_ar" id="edit_review_ar" placeholder="{{ __('review ar') }}" cols="30"
                                        rows="7" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="edit_image" class="form-label">{{ __('image') }}</label>
                                    <input type="file" name="edit_image" id="edit_image" class="form-control">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="edit_id">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="submit-edit-btn" class="btn btn-primary">@lang('general.edit')</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('general.cancel')</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script-vendor')
    <script src="{{ asset('/dashboard/assets/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('/dashboard/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('/dashboard/assets/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
    <script src="{{ asset('/dashboard/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>
    <script src="{{ asset('/dashboard/assets/vendor/libs/datatables-buttons/datatables-buttons.js') }}"></script>
    <script src="{{ asset('/dashboard/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js') }}"></script>
    <script src="{{ asset('/dashboard/assets/vendor/libs/jszip/jszip.js') }}"></script>
    <script src="{{ asset('/dashboard/assets/vendor/libs/pdfmake/pdfmake.js') }}"></script>
    <script src="{{ asset('/dashboard/assets/vendor/libs/datatables-buttons/buttons.html5.js') }}"></script>
    <script src="{{ asset('/dashboard/assets/vendor/libs/datatables-buttons/buttons.print.js') }}"></script>
    <script src="{{ asset('/dashboard/assets/vendor/libs/select2/select2.js') }}"></script>
@endsection
@section('script')
    <script>
        $('document').ready(function() {
            //initialise datatbles
            let datatable = $('.datatables-categories').DataTable({
                language: {
                    sLengthMenu: '_MENU_',
                    search: '',
                    searchPlaceholder: '@lang('general.search')..',
                    paginate: {
                        previous: '@lang('general.previous')',
                        next: '@lang('general.next')'
                    }
                },
                order: [
                    [1, 'desc']
                ],
                processing: true,
                serverSide: true,
                ajax: "{!! route('admin.reviews.reviews_list') !!}",
                columns: [{
                        data: 'image',
                        name: 'image'
                    }, {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'review',
                        name: 'review'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        name: 'actions',
                        data: 'actions',
                        searchable: false,
                        orderable: false
                    },
                ],
            })

            // to make the datatables inputs appear larger
            setTimeout(() => {
                $('.dataTables_filter .form-control').removeClass('form-control-sm');
                $('.dataTables_length .form-select').removeClass('form-select-sm');
            })
            // ----- crud operations

            //create new ajax request
            $('body').on('click', '#submit-create-btn', function() {
                let fd = new FormData();
                fd.append('name_en', $('#name_en').val());
                fd.append('name_ar', $('#name_ar').val());
                fd.append('position_en', $('#position_en').val());
                fd.append('position_ar', $('#position_ar').val());
                fd.append('review_en', $('#review_en').val());
                fd.append('review_ar', $('#review_ar').val());
                fd.append('_token', "{!! csrf_token() !!}");
                if (document.getElementById('image').files[0]) {
                    fd.append('image', document.getElementById('image').files[0]);

                }
                let formBtn = $(this) // the button that sends the reuquest (to minipulate ui)
                $.ajax({
                    method: 'POST',
                    url: "{!! route('admin.reviews.store') !!}",
                    data: fd,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        formBtn.html(
                            '<span class="spinner-border" role="status" aria-hidden="true"></span>'
                        )
                        formBtn.prop('disabled', true)
                    },
                    success: function(response) {
                        successMessage("@lang('general.create_success')")
                        $('#addReviewModal').modal('toggle')
                        document.getElementById("addCategoryForm").reset();
                        datatable.ajax.reload()
                    },
                    error: function(response) {
                        errorMessage("@lang('general.error')")
                        displayErrors(response, false)
                    },
                }).done(function() {
                    formBtn.html("@lang('general.create')")
                    formBtn.prop('disabled', false)
                    $('#addReviewModal').modal('toggle')
                }).fail(function() {
                    formBtn.html("@lang('general.create')")
                    formBtn.prop('disabled', false)
                })
            })

            //populate table when pressing edit admin (from table)
            $('body').on('click', '.edit-btn', function() {
                $('#edit_name_en').val($(this).data('name-en'))
                $('#edit_name_ar').val($(this).data('name-ar'))
                $('#edit_position_ar').val($(this).data('position-ar'))
                $('#edit_position_en').val($(this).data('position-en'))
                $('#edit_review_en').val($(this).data('review-en'))
                $('#edit_review_ar').val($(this).data('review-ar'))
                $('#edit_id').val($(this).data('id'))
            })
            //edit ajax request
            $('body').on('click', '#submit-edit-btn', function() {
                let fd = new FormData();
                fd.append('name_en', $('#edit_name_en').val());
                fd.append('name_ar', $('#edit_name_ar').val());
                fd.append('position_en', $('#edit_position_en').val());
                fd.append('position_ar', $('#edit_position_ar').val());
                fd.append('review_en', $('#edit_review_en').val());
                fd.append('review_ar', $('#edit_review_ar').val());
                fd.append('id', $('#edit_id').val());
                fd.append('_token', "{!! csrf_token() !!}");
                fd.append('_method', "PATCH");
                if (document.getElementById('edit_image').files[0]) {
                    fd.append('image', document.getElementById('edit_image').files[0]);

                }
                let formBtn = $(this) // the button that sends the reuquest (to minipulate ui)

                $.ajax({
                    method: 'POST',
                    url: "{!! route('admin.reviews.update') !!}",
                    data: fd,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        formBtn.html(
                            '<span class="spinner-border" role="status" aria-hidden="true"></span>'
                        )
                        formBtn.prop('disabled', true)
                    },
                    success: function(response) {
                        successMessage("@lang('general.edit_success')")
                        $('#editReviewModal').modal('toggle')
                        datatable.ajax.reload()
                    },
                    error: function(response) {
                        errorMessage("@lang('general.error')")
                        displayErrors(response, true)
                    },
                }).done(function() {
                    formBtn.html("@lang('general.edit')")
                    formBtn.prop('disabled', false)
                }).fail(function() {
                    formBtn.html("@lang('general.edit')")
                    formBtn.prop('disabled', false)
                })
            })

            //delete btn (from table)
            $('body').on('click', '.delete-btn', function() {
                let id = $(this).data('id')
                Swal.fire({
                    title: "@lang('general.confirmation')",
                    text: " @lang('general.cant_revert')",
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonText: "@lang('general.cancel')",
                    confirmButtonText: "@lang('general.delete')",
                    customClass: {
                        confirmButton: 'btn btn-danger me-3',
                        cancelButton: 'btn btn-label-secondary'
                    },
                    buttonsStyling: false
                }).then(function(result) {
                    if (result.value) {
                        //ajax delete call
                        let data = {
                            _token: "{!! csrf_token() !!}",
                            id: id,
                        }
                        $.ajax({
                            method: 'DELETE',
                            url: "{!! route('admin.reviews.delete') !!}",
                            data: data,
                            success: function(response) {
                                successMessage("@lang('general.edit_success')")
                                datatable.ajax.reload()
                            },
                            error: function(response) {
                                errorMessage("@lang('general.error')")
                            },
                        })
                    }
                });
            })
        })
    </script>
@endsection
