@extends('admin.layout.app')

@section('title')
    @lang('general.edit')
@endsection

@section('css-vendor')
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
            <h5 class="card-title mb-0">@lang('general.edit')</h5>
            {{-- check if auth user has ability to create  --}}
            <a href="{{ route('admin.articles.index') }}" class="btn btn-warning"><i
                    class="bx bx-chevron-right me-0 me-lg-2"></i><span
                    class="d-none d-lg-inline-block">{{ __('general.return') }}</span></a>
        </div>
        <div class="card-body py-3">
            <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group mb-3">
                            <label for="title_en" class="form-label">{{ __('title en') }}</label>
                            <input type="text" value="{{ $article->title_en }}" name="title_en" id="title_en"
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
                            <input type="text" name="title_ar" value="{{ $article->title_ar }}" id="title_ar"
                                placeholder="{{ __('title ar') }}" class="form-control">
                            @error('title_ar')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label for="body_en" class="form-label">{{ __('body en') }}</label>
                            <textarea name="body_en" id="body_en" cols="30" rows="7" class="form-control"
                                placeholder="{{ __('body en') }}">{{ $article->body_en }}</textarea>
                            @error('body_en')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label for="body_ar" class="form-label">{{ __('body ar') }}</label>
                            <textarea name="body_ar" id="body_ar" cols="30" rows="7" class="form-control"
                                placeholder="{{ __('body ar') }}">{{ $article->body_ar }}</textarea>
                            @error('body_ar')
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
                        <button type="submit" class="btn-primary btn">@lang('general.create')</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


@section('script-vendor')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.22.1/ckeditor.js"
        integrity="sha512-F8fV4+wpHYl9zul08Soff9H9fCx6OMIFfgbQcy+2v2gV7PdbT0OgM1LFwujQmwlLGWWKNbOFZ13uWP+Cbe0Ngw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
@section('script')
    <script>
        CKEDITOR.replace('body_en');
        CKEDITOR.replace('body_ar');
    </script>
@endsection
