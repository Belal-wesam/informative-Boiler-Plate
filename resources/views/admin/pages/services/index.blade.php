@extends('admin.layout.app')

@section('title')
    @lang('nav.services')
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
            <h5 class="card-title mb-0">@lang('nav.services')</h5>
            {{-- check if auth user has ability to create  --}}
            @if (auth('admin')->user()->hasAbilityTo('create services'))
                <button class="btn btn-primary" data-bs-target="#addServiceModal" data-bs-toggle="modal"><i
                        class="bx bx-plus me-0 me-lg-2"></i><span
                        class="d-none d-lg-inline-block">{{ __('add service') }}</span></button>
            @endif
        </div>
        <div class="card-datatable table-responsive">
            <table class="datatables-categories table border-top">
                <thead>
                    <tr>
                        <th></th>
                        <th>{{ __('title') }}</th>
                        <th class="d-flex justify-content-center" data-searchable="false" data-orderable="false">
                            @lang('general.actions')</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>




    <!-- Add Modal -->
    <div class="modal  fade" id="addServiceModal" tabindex="-1" aria-labelledby="addServiceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addServiceModalLabel">{{ __('add service') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="addCategoryForm">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="title_en" class="form-label">{{ __('title en') }}</label>
                                    <input type="text" name="title_en" placeholder="{{ __('title en') }}" id="title_en"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="title_ar" class="form-label">{{ __('title ar') }}</label>
                                    <input type="text" name="title_ar" placeholder="{{ __('title ar') }}" id="title_ar"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="description_en" class="form-label">{{ __('description en') }}</label>
                                    <textarea name="description_en" class="form-control" id="description_en" placeholder="{{ __('description en') }}"
                                        cols="30" rows="7"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="description_ar" class="form-label">{{ __('description ar') }}</label>
                                    <textarea name="description_ar" class="form-control" id="description_ar" placeholder="{{ __('description ar') }}"
                                        cols="30" rows="7"></textarea>
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
    <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCategoryModalLabel">@lang('general.edit')</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="editCategoryForm">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="edit_title_en" class="form-label">{{ __('title en') }}</label>
                                    <input type="text" name="edit_title_en" placeholder="{{ __('title en') }}"
                                        id="edit_title_en" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="edit_title_ar" class="form-label">{{ __('title ar') }}</label>
                                    <input type="text" name="edit_title_ar" placeholder="{{ __('title ar') }}"
                                        id="edit_title_ar" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="edit_description_en"
                                        class="form-label">{{ __('description en') }}</label>
                                    <textarea name="edit_description_en" class="form-control" id="edit_description_en"
                                        placeholder="{{ __('description en') }}" cols="30" rows="7"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="edit_description_ar"
                                        class="form-label">{{ __('description ar') }}</label>
                                    <textarea name="edit_description_ar" class="form-control" id="edit_description_ar"
                                        placeholder="{{ __('description ar') }}" cols="30" rows="7"></textarea>
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
                ordering: false,
                processing: true,
                serverSide: true,
                ajax: "{!! route('admin.services.services_list') !!}",
                columns: [{
                        data: 'image',
                        name: 'image'
                    },
                    {
                        data: 'title',
                        name: 'title'
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
                // let data = {
                //     _token: "{!! csrf_token() !!}",
                //     name: $('#name').val(),
                // }

                let fd = new FormData();
                fd.append('title_en', $("#title_en").val())
                fd.append('title_ar', $("#title_ar").val())
                fd.append('description_en', $("#description_en").val())
                fd.append('description_ar', $("#description_ar").val())
                fd.append('_token', "{!! csrf_token() !!}")
                if (document.getElementById('image').files[0]) {
                    fd.append('image', document.getElementById('image').files[0])
                }

                let formBtn = $(this) // the button that sends the reuquest (to minipulate ui)

                $.ajax({
                    method: 'POST',
                    url: "{!! route('admin.services.store') !!}",
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
                        $('#addServiceModal').modal('toggle')
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
                    $('#addServiceModal').modal('toggle')
                }).fail(function() {
                    formBtn.html("@lang('general.create')")
                    formBtn.prop('disabled', false)
                })
            })

            //populate table when pressing edit admin (from table)
            $('body').on('click', '.edit-btn', function() {
                $('#edit_title_en').val($(this).data('title-en'))
                $('#edit_title_ar').val($(this).data('title-ar'))
                $('#edit_description_ar').val($(this).data('description-ar'))
                $('#edit_description_en').val($(this).data('description-en'))
                $('#edit_id').val($(this).data('id'))
            })
            //edit ajax request
            $('body').on('click', '#submit-edit-btn', function() {
                let fd = new FormData();
                fd.append('title_en', $("#edit_title_en").val())
                fd.append('title_ar', $("#edit_title_ar").val())
                fd.append('description_en', $("#edit_description_en").val())
                fd.append('description_ar', $("#edit_description_ar").val())
                fd.append('id', $("#edit_id").val())
                fd.append('_token', "{!! csrf_token() !!}")
                fd.append('_method', "PATCH")
                if (document.getElementById('edit_image').files[0]) {
                    fd.append('image', document.getElementById('edit_image').files[0])
                }

                let formBtn = $(this) // the button that sends the reuquest (to minipulate ui)

                $.ajax({
                    method: 'POST',
                    url: "{!! route('admin.services.update') !!}",
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
                        $('#editCategoryModal').modal('toggle')
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
                            url: "{!! route('admin.services.delete') !!}",
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
