@extends('admin.layout.app')

@section('title')
    @lang('nav.numbers')
@endsection
{{-- main content --}}
@section('content')
    <div class="card">
        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
            <h5 class="card-title mb-0">@lang('nav.numbers')</h5>
            {{-- check if auth user has ability to create  --}}
            @if (auth('admin')->user()->hasAbilityTo('create categories'))
                <button class="btn btn-primary" data-bs-target="#addCategoryModal" data-bs-toggle="modal"><i
                        class="bx bx-plus me-0 me-lg-2"></i><span
                        class="d-none d-lg-inline-block">@lang('categories.add_category')</span></button>
            @endif
        </div>
        <div class="card-body py-4">
            @if ($errors->any())
                <div class="alert alert-solid-danger">
                    Please fill the fields with correct data , and if the image is present make sure it's png or jpg
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-solid-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('admin.numbers.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                @foreach ($number_details as $number)
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <label class="form-label">
                                {{ __('label en') }}
                            </label>
                            <input type="text" name="numbers[{{ $loop->iteration - 1 }}][label_en]" id="label_en"
                                class="form-control" value="{{ $number['label_en'] }}" placeholder="{{ __('label en') }}">
                        </div>
                        <div class="col-12 col-md-3 mb-3">
                            <label class="form-label">
                                {{ __('label ar') }}
                            </label>
                            <input type="text" name="numbers[{{ $loop->iteration - 1 }}][label_ar]" id="label_ar"
                                class="form-control" value="{{ $number['label_ar'] }}" placeholder="{{ __('label ar') }}">
                        </div>
                        <div class="col-12 col-md-3 mb-3">
                            <label class="form-label">
                                {{ __('icon') }}
                            </label>
                            <input type="text" name="numbers[{{ $loop->iteration - 1 }}][icon]" id="icon"
                                class="form-control" value="{{ $number['icon'] }}" placeholder="{{ __('icon') }}">
                        </div>
                        <div class="col-12 col-md-3 mb-3">
                            <label class="form-label">
                                {{ __('number') }}
                            </label>
                            <input type="number" step="1" name="numbers[{{ $loop->iteration - 1 }}][number]"
                                id="number" class="form-control" value="{{ $number['number'] }}"
                                placeholder="{{ __('number') }}">
                        </div>
                        <hr>
                    </div>
                @endforeach
                <div class="row">
                    <div class="col-12 col-md-4">
                        <img src="{{ Storage::url($numbers->image) }}" alt="numbers image" class="img-fluid">
                        <input type="file" name="image" id="image" class="form-control my-3">
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">
                        {{ __('general.edit') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
