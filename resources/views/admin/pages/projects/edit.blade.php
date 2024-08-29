@extends('admin.layout.app')

@section('title')
    {{ __('general.edit') }}
@endsection

@section('css-vendor')
    <link rel="stylesheet" href="{{ asset('/dashboard/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('/dashboard/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('/dashboard/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('/dashboard/assets/vendor/libs/select2/select2.css') }}" />
    <style>
        .cke_notifications_area {
            display: none !important;
        }
    </style>
@endsection

{{-- main content --}}
@section('content')
    <div class="card">
        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
            <h5 class="card-title mb-0">{{ __('general.edit') }}</h5>
            {{-- check if auth user has ability to create  --}}
            <a class="btn btn-warning" href="{{ route('admin.projects.index') }}"><i
                    class="bx bx-chevron-right me-0 me-lg-2"></i><span
                    class="d-none d-lg-inline-block">{{ __('general.return') }}</span></a>
        </div>
        <div class="card-body py-4">
            <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group mb-3">
                            <label for="title_en" class="form-label">{{ __('title en') }}</label>
                            <input type="text" name="title_en" value="{{ $project->title_en }}" id="title_en"
                                placeholder="{{ __('title en') }}" class="form-control">
                            @error('title_en')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group mb-3">
                            <label for="title_ar" class="form-label">{{ __('title ar') }}</label>
                            <input type="text" value="{{ $project->title_ar }}" name="title_ar" id="title_ar"
                                placeholder="{{ __('title ar') }}" class="form-control">
                            @error('title_ar')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group mb-3">
                            <label for="description_en" class="form-label">{{ __('description en') }}</label>
                            <textarea name="description_en" id="description_en" cols="30" rows="7" class="form-control"
                                placeholder="{{ __('description en') }}">{{ $project->description_en }}</textarea>
                            @error('description_en')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group mb-3">
                            <label for="description_ar" class="form-label">{{ __('description ar') }}</label>
                            <textarea name="description_ar" id="description_ar" cols="30" rows="7" class="form-control"
                                placeholder="{{ __('description ar') }}">{{ $project->description_ar }}</textarea>
                            @error('description_ar')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group mb-3">
                            <label for="image" class="form-label">{{ __('image') }}</label>
                            <input type="file" name="image" id="image" class="form-control">
                            @error('image')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn-primary btn">@lang('general.edit')</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.22.1/ckeditor.js"
        integrity="sha512-F8fV4+wpHYl9zul08Soff9H9fCx6OMIFfgbQcy+2v2gV7PdbT0OgM1LFwujQmwlLGWWKNbOFZ13uWP+Cbe0Ngw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        CKEDITOR.replace('description_en');
        CKEDITOR.replace('description_ar');
    </script>
@endsection
