@extends('admin.layout.app')

@section('title')
    {{ __('general.edit') }}
@endsection
{{-- main content --}}
@section('content')
    <div class="card">
        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
            <h5 class="card-title mb-0">{{ __('general.edit') }}</h5>
            {{-- check if auth user has ability to create  --}}
            <div>
                <a href="{{ route('admin.banners.index') }}" class="btn btn-warning"><i
                        class="bx bx-chevron-right me-0 me-lg-2"></i><span
                        class="d-none d-lg-inline-block">{{ __('general.return') }}</span></a>
            </div>
        </div>
        <div class="card-body py-4">
            <form action="{{ route('admin.banners.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group mb-3">
                            <label for="heading_en" class="form-label">{{ __('heading en') }}</label>
                            <textarea name="heading_en" id="heading_en" placeholder="{{ __('heading en') }}" cols="30" rows="7"
                                class="form-control">{{ $banner->heading_en }}</textarea>
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
                                class="form-control">{{ $banner->heading_ar }}</textarea>
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
                                rows="7" class="form-control">{{ $banner->sub_heading_en }}</textarea>
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
                                rows="7" class="form-control">{{ $banner->sub_heading_ar }}</textarea>
                            @error('sub_heading_ar')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group mb-3">
                            <label for="status" class="form-label">{{ __('status') }}</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" name="status" @checked($banner->status === 'active') type="checkbox"
                                    role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label"
                                    for="flexSwitchCheckDefault">{{ __($banner->status) }}</label>
                            </div>

                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{ $banner->id }}">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">
                            {{ __('general.edit') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
