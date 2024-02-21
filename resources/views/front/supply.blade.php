@extends('layouts.front.app')
@section('content')
    <section class="banner-home banner-installation banner-door-repair inner-banner banner-supply"
    style="background-image: url('{{ !empty($content->banner_image) ? asset('storage/' . $content->banner_image) : '' }}')">
        <div class="container">
            <h1 class="inner-main-text"> {{ $content->banner_heading ?? '' }} </h1>
            <p class="py-4 inner-banner-para">{{ $content->banner_text ?? '' }}</p>
            <a href="tel:{{ $settings['phone_number'] }}" class="inner-btn">{{ $content->banner_button_text ?? '' }}</a>
        </div>
        <div class="inner-banner-overlay">
        </div>

    </section>

    <section class="supply-section">
        <div class="container">
            <div class="supply-page">
                <h1 class="f-black pt-5" style=" text-align: left; font-size:50px;font-weight:bold;">
                    {{ $content->first_section_heading ?? '' }}</h1>
                <p class="f-black "> {!! $content->first_section_description ?? '' !!}
                </p>
            </div>
            <!-- card-section -->
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100" style=" border: none;">
                        <img width="100%" height="100%"
                            src="{{ !empty($content->second_section_first_image) ? asset('storage/' . $content->second_section_first_image) : '' }}"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $content->second_section_first_heading ?? '' }}</h5>
                            <p class="card-text">{!! $content->second_section_first_description ?? '' !!}</p>
                        </div>
                        <!-- <div class="card-footer">
                                                              <small class="text-muted">Last updated 3 mins ago</small>
                                                            </div> -->
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" style=" border: none;">
                        <img width="100%" height="100%"
                            src="{{ !empty($content->second_section_second_image) ? asset('storage/' . $content->second_section_second_image) : '' }}"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $content->second_section_second_heading ?? '' }}</h5>
                            <p class="card-text">{!! $content->second_section_second_description ?? '' !!}</p>
                        </div>
                        <!-- <div class="card-footer">
                                                              <small class="text-muted">Last updated 3 mins ago</small>
                                                            </div> -->
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100" style=" border: none;">
                        <img width="100%" height="100%"
                            src="{{ !empty($content->second_section_third_image) ? asset('storage/' . $content->second_section_third_image) : '' }}"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $content->second_section_third_heading ?? '' }}</h5>
                            <p class="card-text">{!! $content->second_section_third_description ?? '' !!}</p>
                        </div>
                        <!-- <div class="card-footer">
                                                              <small class="text-muted">Last updated 3 mins ago</small>
                                                            </div> -->
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="btn btn-regular">Start Buying from Us</a>
    </section>

    <section class="trusted-brand py-5">
        <div class="container">
            <div class="trusted">
                <div class="row">
                    <h1 class="text-center heading-value fs-1 trusted-carousel-heading">
                        {{ $content->third_section_heading ?? '' }}</h1>

                    <div class="owl-carousel" id="trusted-carousel">
                        @foreach ($brands as $brand)
                            <div class="item"><img width="10px" height="60px"
                                    src="{{ $brand->image != asset('') ? $brand->image : '' }}" alt="Image 1"></div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="revamp">
        <div class="container">
            <div class="row">
                <h1 class="f-black pt-5"
                    style="margin-bottom: 35px !important; text-align: left; font-size:39px;font-weight:bolder;">
                    {{ $content->fourth_section_heading ?? '' }}</h1>
                <p class="f-black mb-4">{!! $content->fourth_section_description ?? '' !!} </p>
            </div>
        </div>
    </section>
    @include('layouts.front.cta')
@endsection
