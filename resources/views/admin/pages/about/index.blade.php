@extends('admin.layout.app')

@section('title')
    {{ __('nav.about') }}
@endsection
{{-- main content --}}
@section('content')
    <div class="card">
        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
            <h5 class="card-title mb-0">{{ __('nav.about') }}</h5>
        </div>
        @if (session('success'))
            <div class="alert alert-solid-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-body py-4">
            <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-12 col-md-6 mb-3">
                        <label for="heading_en" class="form-label">{{ __('heading en') }}</label>
                        <textarea name="heading_en" id="heading_en" class="form-control" cols="30" rows="7"
                            placeholder="{{ __('heading en') }}">{!! nl2br($about->heading_en) !!}</textarea>
                        @error('heading_en')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <label for="heading_ar" class="form-label">{{ __('heading ar') }}</label>
                        <textarea name="heading_ar" id="heading_ar" class="form-control" cols="30" rows="7"
                            placeholder="{{ __('heading ar') }}">{!! nl2br($about->heading_ar) !!}</textarea>
                        @error('heading_ar')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <label for="sub_heading_en" class="form-label">{{ __('sub heading en') }}</label>
                        <textarea name="sub_heading_en" id="sub_heading_en" class="form-control" cols="30" rows="7"
                            placeholder="{{ __('sub heading en') }}">{!! nl2br($about->sub_heading_en) !!}</textarea>
                        @error('sub_heading_en')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <label for="sub_heading_ar" class="form-label">{{ __('sub heading ar') }}</label>
                        <textarea name="sub_heading_ar" id="sub_heading_ar" class="form-control" cols="30" rows="7"
                            placeholder="{{ __('sub heading ar') }}">{!! nl2br($about->sub_heading_ar) !!}</textarea>
                        @error('sub_heading_ar')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-12 col-md-4 mb-3">
                        <label for="vision_en" class="form-label">{{ __('our vision en') }}</label>
                        <textarea name="vision_en" id="vision_en" class="form-control" cols="30" rows="7"
                            placeholder="{{ __('our vision en') }}">{!! nl2br($about->vision_en) !!}</textarea>
                        @error('vision_en')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <label for="vision_ar" class="form-label">{{ __('our vision ar') }}</label>
                        <textarea name="vision_ar" id="vision_ar" class="form-control" cols="30" rows="7"
                            placeholder="{{ __('our vision ar') }}">{!! nl2br($about->vision_ar) !!}</textarea>
                        @error('vision_ar')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <img src="{{ Storage::url($about->vision_image) }}" alt="vision_image" class="img-fluid mb-3">
                        <input type="file" name="vision_image" id="vision_image" class="form-control">
                        @error('vision_image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <label for="mission_en" class="form-label">{{ __('our mission en') }}</label>
                        <textarea name="mission_en" id="mission_en" class="form-control" cols="30" rows="7"
                            placeholder="{{ __('our mission en') }}">{!! nl2br($about->mission_en) !!}</textarea>
                        @error('mission_en')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <label for="mission_ar" class="form-label">{{ __('our mission ar') }}</label>
                        <textarea name="mission_ar" id="mission_ar" class="form-control" cols="30" rows="7"
                            placeholder="{{ __('our mission ar') }}">{!! nl2br($about->vision_ar) !!}</textarea>
                        @error('mission_ar')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <img src="{{ Storage::url($about->mission_image) }}" alt="mission_image" class="img-fluid mb-3">
                        <input type="file" name="mission_image" id="mission_image" class="form-control">
                        @error('mission_image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-12 col-md-4 mb-3">
                        <label for="approach_en" class="form-label">{{ __('our approach en') }}</label>
                        <textarea name="approach_en" id="approach_en" class="form-control" cols="30" rows="7"
                            placeholder="{{ __('our approach en') }}">{!! nl2br($about->approach_en) !!}</textarea>
                        @error('approach_en')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <label for="approach_ar" class="form-label">{{ __('our approach ar') }}</label>
                        <textarea name="approach_ar" id="approach_ar" class="form-control" cols="30" rows="7"
                            placeholder="{{ __('our approach ar') }}">{!! nl2br($about->approach_ar) !!}</textarea>
                        @error('approach_ar')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <img src="{{ Storage::url($about->approach_image) }}" alt="approach_image"
                            class="img-fluid mb-3">
                        <input type="file" name="approach_image" id="approach_image" class="form-control">
                        @error('approach_image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">
                        {{ __('general.edit') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
