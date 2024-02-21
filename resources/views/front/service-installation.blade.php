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

    <section class="value">
        <div class="container">
            <h1 class="f-black heading-value">{{ $content->second_section_heading ?? '' }}</h1>

            <div class="row">
                <p class="f-black py-4 p-value">{{ $content->second_section_description ?? '' }}</p>
                <div class="col-lg-4">
                    <div class="icon-box text-center text-md-center">
                        <div class="icon-styled fs-60 with-bulb color-main color2">
                            <img width="100%" height="100%"
                                src="{{ !empty($content->second_section_first_image) ? asset('storage/' . $content->second_section_first_image) : '' }}"
                                class="icon-inner" alt="Nobi Garage Doors">
                        </div>
                    </div>
                    <h1 class="f-black pt-5 heading-value-inner">{{ $content->second_section_first_heading ?? '' }}</h1>
                    <p class="f-black py-4 p-value-inner">{{ $content->second_section_first_description ?? '' }}</p>
                </div>
                <div class="col-lg-4">
                    <div class="icon-box text-center text-md-center">
                        <div class="icon-styled fs-60 with-bulb color-main color2">
                            <img width="100%" height="100%"
                                src="{{ !empty($content->second_section_second_image) ? asset('storage/' . $content->second_section_second_image) : '' }}"
                                class="icon-inner" alt="Nobi Garage Doors">
                        </div>
                    </div>
                    <h1 class="f-black pt-5 heading-value-inner">{{ $content->second_section_second_heading ?? '' }}</h1>
                    <p class="f-black py-4 p-value-inner">{{ $content->second_section_second_description ?? '' }}</p>
                </div>
                <div class="col-lg-4">
                    <div class="icon-box text-center text-md-center">
                        <div class="icon-styled fs-60 with-bulb color-main color2">
                            <img width="100%" height="100%"
                                src="{{ !empty($content->second_section_third_image) ? asset('storage/' . $content->second_section_third_image) : '' }}"
                                class="icon-inner" alt="Nobi Garage Doors">
                        </div>
                    </div>
                    <h1 class="f-black pt-5 heading-value-inner">{{ $content->second_section_third_heading ?? '' }}</h1>
                    <p class="f-black py-4 p-value-inner">{{ $content->second_section_third_description ?? '' }}</p>
                </div>
            </div>
        </div>

    </section>

    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="f-black pt-5 heading-value-inner-service">{{ $content->third_section_first_heading ?? '' }}
                    </h1>
                    <p class="f-black py-4 p-value-inner-service">{{ $content->third_section_first_description ?? '' }}</p>
                    <div class="service-item">
                        <div class="img-bulb">
                            <div class="img-bulb-wrap">
                                <img width="100%" height="100%"
                                    src="{{ !empty($content->third_section_second_image) ? asset('storage/' . $content->third_section_second_image) : '' }}"
                                    class="installation-services-img" alt="Nobi Garage Doors">
                            </div>
                        </div>
                        <h1 class="f-black pt-5 heading-value-inner">{{ $content->third_section_second_heading ?? '' }}
                        </h1>
                        <p class="f-black py-4 p-value-inner">{{ $content->third_section_second_description ?? '' }}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        <div class="img-bulb">
                            <div class="img-bulb-wrap">
                                <img width="100%" height="100%"
                                    src="{{ !empty($content->third_section_third_image) ? asset('storage/' . $content->third_section_third_image) : '' }}"
                                    class="installation-services-img" alt="Nobi Garage Doors">
                            </div>
                        </div>
                        <h1 class="f-black pt-5 heading-value-inner">{{ $content->third_section_third_heading ?? '' }}
                        </h1>
                        <p class="f-black py-4 p-value-inner">{{ $content->third_section_third_description ?? '' }}</p>
                    </div>
                    <div class="service-item">
                        <div class="img-bulb">
                            <div class="img-bulb-wrap">
                                <img width="100%" height="100%"
                                    src="{{ !empty($content->third_section_fourth_image) ? asset('storage/' . $content->third_section_fourth_image) : '' }}"
                                    class="installation-services-img" alt="Nobi Garage Doors">
                            </div>
                        </div>
                        <h1 class="f-black pt-5 heading-value-inner">{{ $content->third_section_fourth_heading ?? '' }}
                        </h1>
                        <p class="f-black py-4 p-value-inner">{{ $content->third_section_fourth_description ?? '' }}</p>
                    </div>
                </div>
                <a href="tel:{{ $settings['phone_number'] }}"
                    class="btn btn-regular services-btn">{{ $content->third_section_button_text ?? '' }}</a>
            </div>

        </div>
    </section>

    <section class="products">
        <div class="container">
            <h1 class="f-white pt-5 heading-value heading-products">{{ $content->fourth_section_heading ?? '' }}
            </h1>
            <p class="f-white py-4 p-value">{{ $content->fourth_section_description ?? '' }}</p>
            <div class="product-images">
                <div class="row">
                    <div class="col-lg-4 prod-columns">
                        <img width="100%" height="100%" src="{{ !empty($content->fourth_section_first_image) ? asset('storage/' . $content->fourth_section_first_image) : '' }}"
                            class="prod-img" alt="Nobi Garage Doors">
                        <h1 class="prod-text f-white">
                            {{ $content->fourth_section_first_heading ?? '' }}
                        </h1>
                    </div>
                    <div class="col-lg-4 prod-columns">
                        <img width="100%" height="100%" src="{{ !empty($content->fourth_section_second_image) ? asset('storage/' . $content->fourth_section_second_image) : '' }}"
                            class="prod-img" alt="Nobi Garage Doors">
                        <h1 class="prod-text f-white">
                            {{ $content->fourth_section_second_heading ?? '' }}
                        </h1>
                    </div>
                    <div class="col-lg-4 prod-columns">
                        <img width="100%" height="100%" src="{{ !empty($content->fourth_section_third_image) ? asset('storage/' . $content->fourth_section_third_image) : '' }}" class="prod-img"
                            alt="Nobi Garage Doors">
                        <h1 class="prod-text f-white">
                            {{ $content->fourth_section_third_heading ?? '' }}
                        </h1>
                    </div>
                </div>
                <a href="{{ route('contact') }}"
                    class="btn btn-regular product-btn">{{ $content->fourth_section_button_text ?? '' }}</a>

            </div>
        </div>
    </section>
    @include('layouts.front.cta')
@endsection
