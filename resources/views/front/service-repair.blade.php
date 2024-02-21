@extends('layouts.front.app')
@section('content')
    <section class="banner-home banner-installation inner-banner garage-repair"
        style="background-image: url('{{ !empty($content->banner_image) ? asset('storage/' . $content->banner_image) : '' }}')">
        <div class="container">
            <h1 class="inner-main-text">{{ $content->banner_heading ?? '' }}<span class="sub-text"></span></h1>
            <p class="py-4 inner-banner-para para-installation">{{ $content->banner_text ?? '' }}.</p>
            <a href="tel:{{ $settings['phone_number'] }}" class="inner-btn">{{ $content->banner_button_text ?? '' }}</a>
        </div>
        <div class="inner-banner-overlay">
    </section>

    <section class="counter installation" id="counter-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 counter-text">
                    <div class="counter-span-1 mb-3">
                        <hr> Counters
                    </div>
                    <h3 class="counter-span-2 f-black">{{ $content->first_section_first_heading ?? '' }}</h3>
                    <div class="counter-span-3">{{ $content->first_section_first_description ?? '' }}</div>
                </div>
                <div class="col-lg-3 counter-item counter-1">
                    <div class="count-sec">
                        <div class="counting">
                            <h1 class="f-black counter-num" data-val="{{ $content->first_section_second_heading ?? '' }}">0
                            </h1><span class="plus-span">+</span>
                        </div>
                        <h4 class="f-black">{{ $content->first_section_second_description ?? '' }}</h4>
                    </div>
                </div>
                <div class="col-lg-3 counter-item">

                    <hr>
                    <div class="count-sec">
                        <div class="counting">
                            <h1 class="f-black counter-num" data-val="{{ $content->first_section_third_heading ?? '' }}">0
                            </h1><span class="plus-span">%</span>
                        </div>
                        <h4 class="f-black">{{ $content->first_section_third_description ?? '' }}</h4>
                    </div>
                </div>
                <div class="col-lg-3 counter-item">
                    <hr>
                    <div class="count-sec">
                        <div class="counting">
                            <h1 class="f-black counter-num" data-val="{{ $content->first_section_fourth_heading ?? '' }}">0
                            </h1><span class="plus-span">+</span>
                        </div>
                        <h4 class="f-black">{{ $content->first_section_fourth_description ?? '' }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay-counter"></div>
    </section>
    <section class="secure">
        <div class="container">
            <div class="secure-paras">
                <h1 class="f-black pt-5 heading-value">{{ $content->second_section_heading ?? '' }}</h1>
                <p class="f-black py-4 p-value">{!! $content->second_section_description ?? '' !!}</p>
            </div>
            <div class="secure-paras">
                <h1 class="f-black pt-5 heading-value">{{ $content->third_section_heading ?? '' }}</h1>
                {!! $content->third_section_description ?? '' !!}
            </div>
        </div>
        <div class="secure-paras">
            <h1 class="f-black pt-5 heading-value">{{ $content->fourth_section_heading ?? '' }}</h1>
            {!! $content->fourth_section_description ?? '' !!}
        </div>

        </div>
    </section>


    <section class="value">
        <div class="container">
            <h1 class="f-black heading-value">{{ $content->fifth_section_heading ?? '' }}</h1>

            <div class="row">
                <p class="f-black py-4 p-value">{{ $content->fifth_section_description ?? '' }}</p>
                <div class="col-lg-4">
                    <div class="icon-box text-center text-md-center">
                        <div class="icon-styled fs-60 with-bulb color-main color2">
                            <img width="100%" height="100%"
                                src="{{ !empty($content->fifth_section_first_image) ? asset('storage/' . $content->fifth_section_first_image) : '' }}"
                                class="icon-inner" alt="Nobi Garage Doors">
                        </div>
                    </div>
                    <h1 class="f-black pt-5 heading-value-inner">{{ $content->fifth_section_first_heading ?? '' }}</h1>
                    <p class="f-black py-4 p-value-inner">{{ $content->fifth_section_first_description ?? '' }}</p>
                </div>
                <div class="col-lg-4">
                    <div class="icon-box text-center text-md-center">
                        <div class="icon-styled fs-60 with-bulb color-main color2">
                            <img width="100%" height="100%"
                                src="{{ !empty($content->fifth_section_second_image) ? asset('storage/' . $content->fifth_section_second_image) : '' }}"
                                class="icon-inner" alt="Nobi Garage Doors">
                        </div>
                    </div>
                    <h1 class="f-black pt-5 heading-value-inner">{{ $content->fifth_section_second_heading ?? '' }}</h1>
                    <p class="f-black py-4 p-value-inner">{{ $content->fifth_section_second_description ?? '' }}</p>
                </div>
                <div class="col-lg-4">
                    <div class="icon-box text-center text-md-center">
                        <div class="icon-styled fs-60 with-bulb color-main color2">
                            <img width="100%" height="100%"
                                src="{{ !empty($content->fifth_section_third_image) ? asset('storage/' . $content->fifth_section_third_image) : '' }}"
                                class="icon-inner" alt="Nobi Garage Doors">
                        </div>
                    </div>
                    <h1 class="f-black pt-5 heading-value-inner">{{ $content->fifth_section_third_heading ?? '' }}</h1>
                    <p class="f-black py-4 p-value-inner">{{ $content->fifth_section_third_description ?? '' }}</p>
                </div>
            </div>
        </div>

    </section>

    <section class="door-stop">
        <div class="container">
            <h1 class="f-black pt-5 heading-value pb-5">{{ $content->sixth_section_heading ?? '' }} </h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="door-stop-box py-5">
                        <h4 class="h-door-stop">{{ $content->sixth_section_first_heading ?? '' }}</h4>
                        <p class="p-door-stop">{{ $content->sixth_section_first_description ?? '' }}</p>
                    </div>
                    <div class="door-stop-box py-5">
                        <h4 class="h-door-stop">{{ $content->sixth_section_second_heading ?? '' }}</h4>
                        <p class="p-door-stop">{{ $content->sixth_section_second_description ?? '' }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="door-stop-box py-5">
                        <h4 class="h-door-stop">{{ $content->sixth_section_third_heading ?? '' }}</h4>
                        <p class="p-door-stop">{{ $content->sixth_section_third_description ?? '' }}</p>
                    </div>
                    <div class="door-stop-box py-5">
                        <h4 class="h-door-stop">{{ $content->sixth_section_fourth_heading ?? '' }}</h4>
                        <p class="p-door-stop">{{ $content->sixth_section_fourth_description ?? '' }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="door-stop-box py-5">
                        <h4 class="h-door-stop">{{ $content->sixth_section_fifth_heading ?? '' }}</h4>
                        <p class="p-door-stop">{{ $content->sixth_section_fifth_description ?? '' }}</p>
                    </div>
                    <div class="door-stop-box py-5">
                        <h4 class="h-door-stop">{{ $content->sixth_section_sixth_heading ?? '' }}</h4>
                        <p class="p-door-stop">{{ $content->sixth_section_sixth_description ?? '' }}</p>
                    </div>
                </div>
            </div>
    </section>

    {{-- <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="f-black pt-5 heading-value-inner-service">Garage Door Repair Services</h1>
                    <p class="f-black py-4 p-value-inner-service">At Nobi, we offer the following services</p>
                    <div class="service-item py-5">
                        <div class="img-bulb">
                            <div class="img-bulb-wrap">
                                <img width="100%" height="100%" src="assets/images/repair-2.webp"
                                    class="installation-services-img" alt="Nobi Garage Doors">
                            </div>
                        </div>
                        <h1 class="f-black pt-5 heading-value-inner">Spring <br> replacement</h1>
                    </div>
                    <div class="service-item py-5">
                        <div class="img-bulb">
                            <div class="img-bulb-wrap">
                                <img width="100%" height="100%" src="assets/images/repair-5.webp"
                                    class="installation-services-img" alt="Nobi Garage Doors">
                            </div>
                        </div>
                        <h1 class="f-black pt-5 heading-value-inner">Opener repair <br> and replacement</h1>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item py-5">
                        <div class="img-bulb">
                            <div class="img-bulb-wrap">
                                <img width="100%" height="100%" src="assets/images/repair-1.webp"
                                    class="installation-services-img" alt="Nobi Garage Doors">
                            </div>
                        </div>
                        <h1 class="f-black pt-5 heading-value-inner">Track realignment <br> and replacement</h1>
                    </div>
                    <div class="service-item py-5">
                        <div class="img-bulb">
                            <div class="img-bulb-wrap">
                                <img width="100%" height="100%" src="assets/images/repair-3.webp"
                                    class="installation-services-img" alt="Nobi Garage Doors">
                            </div>
                        </div>
                        <h1 class="f-black pt-5 heading-value-inner">Cable repair <br> and replacement</h1>
                    </div>
                    <div class="service-item py-5">
                        <div class="img-bulb">
                            <div class="img-bulb-wrap">
                                <img width="100%" height="100%" src="assets/images/repair-4.webp"
                                    class="installation-services-img" alt="Nobi Garage Doors">
                            </div>
                        </div>
                        <h1 class="f-black pt-5 heading-value-inner">Panel <br> replacement</h1>
                    </div>
                </div>
                <p class="f-black py-4 p-value d-stop">Can’t find your issue?<br>
                    Let our experts inspect it for you</p>
                <a href="tel:0452234001" class="btn btn-regular services-btn">CALL NOW</a>
            </div>

        </div>
    </section> --}}


    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="f-black pt-5 heading-value-inner-service">
                        {{ $content->seventh_section_first_heading ?? '' }}
                    </h1>
                    <p class="f-black py-4 p-value-inner-service">{{ $content->seventh_section_first_description ?? '' }}
                    </p>
                    <div class="service-item">
                        <div class="img-bulb">
                            <div class="img-bulb-wrap">
                                <img width="100%" height="100%"
                                    src="{{ !empty($content->seventh_section_second_image) ? asset('storage/' . $content->seventh_section_second_image) : '' }}"
                                    class="installation-services-img" alt="Nobi Garage Doors">
                            </div>
                        </div>
                        <h1 class="f-black pt-5 heading-value-inner">{{ $content->seventh_section_second_heading ?? '' }}
                        </h1>
                        <p class="f-black py-4 p-value-inner">{{ $content->seventh_section_second_description ?? '' }}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        <div class="img-bulb">
                            <div class="img-bulb-wrap">
                                <img width="100%" height="100%"
                                    src="{{ !empty($content->seventh_section_third_image) ? asset('storage/' . $content->seventh_section_third_image) : '' }}"
                                    class="installation-services-img" alt="Nobi Garage Doors">
                            </div>
                        </div>
                        <h1 class="f-black pt-5 heading-value-inner">{{ $content->seventh_section_third_heading ?? '' }}
                        </h1>
                        <p class="f-black py-4 p-value-inner">{{ $content->seventh_section_third_description ?? '' }}</p>
                    </div>
                    <div class="service-item">
                        <div class="img-bulb">
                            <div class="img-bulb-wrap">
                                <img width="100%" height="100%"
                                    src="{{ !empty($content->seventh_section_fourth_image) ? asset('storage/' . $content->seventh_section_fourth_image) : '' }}"
                                    class="installation-services-img" alt="Nobi Garage Doors">
                            </div>
                        </div>
                        <h1 class="f-black pt-5 heading-value-inner">{{ $content->seventh_section_fourth_heading ?? '' }}
                        </h1>
                        <p class="f-black py-4 p-value-inner">{{ $content->seventh_section_fourth_description ?? '' }}</p>
                    </div>
                </div>
                <p class="f-black py-4 p-value d-stop">Can’t find your issue?<br>
                    Let our experts inspect it for you</p>
                <a href="tel:{{ $settings['phone_number'] }}" class="btn btn-regular services-btn">CALL NOW</a>
            </div>

        </div>
    </section>
    <section class="products">
        <div class="container">
            <h1 class="f-white pt-5 heading-value heading-products">{{ $content->eighth_section_heading ?? '' }}
            </h1>
            <p class="f-white py-4 p-value">{{ $content->eighth_section_description ?? '' }}</p>
            <div class="product-images">
                <div class="row">
                    <div class="col-lg-4 prod-columns">
                        <img width="100%" height="100%"
                            src="{{ !empty($content->eighth_section_first_image) ? asset('storage/' . $content->eighth_section_first_image) : '' }}"
                            class="prod-img" alt="Nobi Garage Doors">
                        <h1 class="prod-text f-white">
                            {{ $content->eighth_section_first_heading ?? '' }}
                        </h1>
                    </div>
                    <div class="col-lg-4 prod-columns">
                        <img width="100%" height="100%"
                            src="{{ !empty($content->eighth_section_second_image) ? asset('storage/' . $content->eighth_section_second_image) : '' }}"
                            class="prod-img" alt="Nobi Garage Doors">
                        <h1 class="prod-text f-white">
                            {{ $content->eighth_section_second_heading ?? '' }}
                        </h1>
                    </div>
                    <div class="col-lg-4 prod-columns">
                        <img width="100%" height="100%"
                            src="{{ !empty($content->eighth_section_third_image) ? asset('storage/' . $content->eighth_section_third_image) : '' }}"
                            class="prod-img" alt="Nobi Garage Doors">
                        <h1 class="prod-text f-white">
                            {{ $content->eighth_section_third_heading ?? '' }}
                        </h1>
                    </div>
                </div>
                <a href="{{ route('contact') }}"
                    class="btn btn-regular product-btn">{{ $content->eighth_section_button_text ?? '' }}</a>

            </div>
        </div>
    </section>


    @include('layouts.front.cta')
@endsection
