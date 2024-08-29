@extends('admin.layout.app')

@section('title')
    {{ __('add_banner') }}
@endsection
{{-- main content --}}
@section('content')
    <div class="card">
        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
            <h5 class="card-title mb-0">{{ __('add_banner') }}</h5>
            {{-- check if auth user has ability to create  --}}
            <div>
                <button class="btn btn-warning"><i class="bx bx-chevron-right me-0 me-lg-2"></i><span
                        class="d-none d-lg-inline-block">{{ __('general.return') }}</span></button>
            </div>
        </div>
        <div class="card-body py-4">
            <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group mb-3">
                            <label for="heading_en" class="form-label">{{ __('heading en') }}</label>
                            <textarea name="heading_en" id="heading_en" placeholder="{{ __('heading en') }}" cols="30" rows="7"
                                class="form-control"></textarea>
                            @error('heading_en')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group mb-3">
                            <label for="heading_ar" class="form-label">{{ __('heading ar') }}</label>
                            <textarea name="heading_ar" id="heading_ar" placeholder="{{ __('heading ar') }}" cols="30" rows="7"
                                class="form-control"></textarea>
                            @error('heading_ar')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group mb-3">
                            <label for="sub_heading_en" class="form-label">{{ __('sub heading en') }}</label>
                            <textarea name="sub_heading_en" id="sub_heading_en" placeholder="{{ __('sub heading en') }}" cols="30"
                                rows="7" class="form-control"></textarea>
                            @error('sub_heading_en')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group mb-3">
                            <label for="sub_heading_ar" class="form-label">{{ __('sub heading ar') }}</label>
                            <textarea name="sub_heading_ar" id="sub_heading_ar" placeholder="{{ __('sub heading ar') }}" cols="30"
                                rows="7" class="form-control"></textarea>
                            @error('sub_heading_ar')
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
                        <button type="submit" class="btn btn-primary">
                            {{ __('general.create') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
