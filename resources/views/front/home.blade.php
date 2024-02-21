@extends('layouts.front.app')
@section('content')
    <section class="banner-home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 banner-home-inner-col">
                    <div class="container banner-home-inner">
                        {{-- <h1 class="f-black ">Nobi<span class="f-red s-bold"> Garage Doors<br>
                Your Door</span> to Reliability</h1> --}}
                        <h1 class="f-black ">{{ $content->banner_heading ?? '' }}</h1>
                        <p class="f-black py-4">{{ $content->banner_text ?? '' }}</p>
                        <a href="contact-us"
                            class="btn btn-regular homepage-for-desktop-btn">{{ $content->banner_button_text ?? '' }}</a>
                        <a href="tel:{{ $settings['phone_number'] }}"
                            class="btn btn-regular homepage-for-mobile-btn">{{ $content->banner_button_text ?? '' }}</a>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-6 banner-side-img-home ">
                    <img width="100%" height="100%"
                        src="{{ !empty($content->banner_image) ? asset('storage/' . $content->banner_image) : '' }}"
                        class="banner-side" alt="Nobi Garage Doors">
                </div>
            </div>
        </div>

    </section>

    <section class="production bg-red sec-padding ps-4">
        <div class="container">
            <div class="row production-row">
                <div class="col-lg-3" id="production">
                    <h6 class="f-white s-bold">{{ $content->first_section_first_heading ?? '' }}</h6>
                    <p class="f-white f-11">{{ $content->first_section_first_description ?? '' }}</p>
                </div>
                <div class="col-lg-3" id="measurement">
                    <h6 class="f-white s-bold">{{ $content->first_section_second_heading ?? '' }}</h6>
                    <p class="f-white f-11">{{ $content->first_section_second_description ?? '' }}</p>
                </div>
                <div class="col-lg-3" id="installation">
                    <h6 class="f-white s-bold">{{ $content->first_section_third_heading ?? '' }}</h6>
                    <p class="f-white f-11">{{ $content->first_section_third_description ?? '' }}</p>
                </div>
                <div class="col-lg-3" id="experience">
                    <h6 class="f-white s-bold">{{ $content->first_section_fourth_heading ?? '' }}</h6>
                    <p class="f-white f-11">{{ $content->first_section_fourth_description ?? '' }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="home-form">
        <div class="container">
            <h1 class="form-h1">{{ $content->second_section_heading ?? '' }}</h1>
            <h2 class="form-h2">{{ $content->second_section_description ?? '' }}</h2>
            <form class="home-form" method="POST" action="{{ route('quotation') }}">
                @csrf
                <input type="text" name="first_name" class="form-control" id="firstname" placeholder="First Name*"
                    required>
                @error('first_name')
                    <div class="validation-error text-danger">{{ $message }}</div>
                @enderror
                <input type="text" name="last_name" class="form-control" id="lastname" placeholder="Last Name*"
                    required>
                @error('last_name')
                    <div class="validation-error text-danger">{{ $message }}</div>
                @enderror
                <input type="email" name="email" class="form-control" id="email" placeholder="Email*" required>
                @error('email')
                    <div class="validation-error text-danger">{{ $message }}</div>
                @enderror
                <input type="tel" class="form-control" name="phone" id="phone-number" placeholder="Phone Number*"
                    required>
                @error('phone')
                    <div class="validation-error text-danger">{{ $message }}</div>
                @enderror
                <input type="text" name="address" class="form-control" id="property-address"
                    placeholder="Property Address*" required>
                @error('address')
                    <div class="validation-error text-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn btn-nav-outer">Submit</button>
            </form>
            @error('quotation_requested')
                <p class="th-alert">{{ $message }}</p>
            @enderror
            <h1 class="h-black">
                {{ $content->third_section_heading ?? '' }}
            </h1>
        </div>
    </section>

    <section class="what-we-do">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 inner-para">
                    <h1 class="h-black what-we-do">
                        {{ $content->fourth_section_heading ?? '' }}
                    </h1>
                    <p class="sec-para"> {!! $content->fourth_section_description ?? '' !!} </p>
                    <!-- <a href="garage-door-installation" class="btn btn-nav-outer selection">View More</a> -->
                </div>
                <div class="col-lg-8 img-sec"
                    style="background-image: {{ !empty($content->fourth_section_image) ? asset('storage/' . $content->fourth_section_image) : '' }}">
                    <div class="box-1">
                        <h6>Colour</h6>
                        <img width="100%" height="100%" src="{{ asset('front/images/img-inner-1.webp') }}"
                            alt="Nobi Garage Doors" class="img-inner">
                    </div>
                    <div class="box-2">
                        <h6>Style</h6>
                        <img width="100%" height="100%" src="{{ asset('front/images/img-inner-2.webp') }}"
                            alt="Nobi Garage Doors" class="img-inner">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="who-we-are">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 img-sec"
                    style="background-image: {{ !empty($content->fifth_section_image) ? asset('storage/' . $content->fifth_section_image) : '' }}">
                    <div class="box-1">
                        <h6>Colour</h6>
                        <img width="100%" height="100%" src="{{ asset('front/images/img-inner-3.webp') }}"
                            alt="Nobi Garage Doors" class="img-inner">
                        <div class="text-img-inner f-white">SHIMMERING CHAMPAGNE*</div>
                    </div>
                    <div class="box-2">
                        <h6>Style</h6>
                        <img width="100%" height="100%" src="{{ asset('front/images/img-inner-4.webp') }}"
                            alt="Nobi Garage Doors" class="img-inner">
                        <div class="text-img-inner f-white">NULLARBOR SMOOTH</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h1 class="h-black what-we-do">
                        {!! $content->fifth_section_heading ?? '' !!}
                    </h1>
                    <p class="sec-para">{!! $content->fifth_section_description ?? '' !!}</p>
                    <!-- <a href="" class="btn btn-nav-outer selection">LEARN MORE</a> -->
                </div>
            </div>
        </div>
    </section>

    <section class="where-we-work">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 content-work">
                    <h1 class="h-black what-we-do">
                        {!! $content->sixth_section_heading ?? '' !!}
                    </h1>
                    <p class="sec-para">
                        {!! $content->sixth_section_description ?? '' !!}</p>
                    <!-- <a href="" class="btn btn-nav-outer selection">ABOUT US</a> -->
                </div>
                <div class="col-lg-8 img-sec"
                    style="background-image: {{ !empty($content->sixth_section_image) ? asset('storage/' . $content->sixth_section_image) : '' }}">
                    <div class="box-1">
                        <h6>Colour</h6>
                        <img width="100%" height="100%" src="{{ asset('front/images/img-inner-5.webp') }}"
                            alt="Nobi Garage Doors" class="img-inner">
                    </div>
                    <div class="box-2">
                        <h6>Style</h6>
                        <img width="100%" height="100%" src="{{ asset('front/images/img-inner-6.webp') }}"
                            alt="Nobi Garage Doors" class="img-inner">
                    </div>
                    <div class="box-3">
                        <h6>Configuration</h6>
                        <img width="100%" height="100%" src="{{ asset('front/images/img-inner-7.webp') }}"
                            alt="Nobi Garage Doors" class="img-inner">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="cms sec-padding">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 ">
                    <div class="promotion-banner">
                        <span class="f-white bg-red px-5 py-2 shadowy sale-banner">Bumper Sale</span>
                        <h1 class="f-black py-3 s-bold text-left">Install/Upgrade <span class="f-red">your Garage door to
                            </span> <br> Smart Doors
                        </h1>
                        <p class="py-2">Control your garage door with your mobile app and remote to enhance <br> your
                            convenience. Get it done right with Nobi Garage Doors.</p>
                        <div class="details">
                            <span class=" f-white bg-red px-5 py-2 text-center shadowy rotate">Start Date 10th JAN!</span>
                            <span class=" f-white bg-red px-5 py-2 text-center shadowy rotate">End Date 30th JAN!</span>
                            <div class="price-tag">
                                <h5 class="original-price f-white text-center">1,800AU$</h5>
                                <h1 class="sales-price f-white">1,200 AU$</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <img width="100%" height="100%" src="assets/images/gal2.webp" class="img-fluid"
                        alt="Nobi Garage Doors">
                </div>
            </div>
        </div>
    </section> --}}
    <!-- testimonial -->
    <section class="testimonial sec-padding bg-red">
        <h1 class="f-white text-center pt-5">{{ $content->seventh_section_heading ?? '' }}</h1>
        <div class="container">

            <div class="img-comas"><img width="100%" height="100%" src="{{ asset('front/images/coma1.webp') }}"
                    alt="Nobi Garage Doors"></div>
            <div class="owl-carousel owl-theme" id="testimonial-carousel">
                @foreach ($testimonials as $testimonial)
                    <div class="item">
                        <p class="text-center py-3 f-white">“{{ $testimonial->testimonial }}”</p>
                        <img width="100%" height="100%" src="{{ $testimonial->image ?? '' }}"
                            alt="Nobi Garage Doors" id="test-img" class="pb-3 testimonial-img">

                        <img width="100%" height="100%" src="{{ asset('front/images/stars.webp') }}"
                            alt="Nobi Garage Doors" id="test-img">
                        <h6 class="f-white pt-2">- Jack Kevin</h6>
                    </div>
                @endforeach

            </div>
            <div class="img-comas coma2"><img width="100%" height="100%"
                    src="{{ asset('front/images/coma2.webp') }}" alt="Nobi Garage Doors"></div>
        </div>


    </section>

    <section class="best">
        <h1 class="f-black text-center">{{ $content->eighth_section_heading ?? '' }}</h1>
        <div class="container">
            <div class="row production-row">
                <div class="col-lg-3 inner-col-best" id="years">
                    <h4 class="counter-numbers">{{ $content->eighth_section_first_heading ?? '' }}</h4>
                    <h6 class="f-black s-bold text-center">{{ $content->eighth_section_first_description ?? '' }}</h6>
                </div>
                <div class="col-lg-3 inner-col-best" id="products">
                    <h4 class="counter-numbers">{{ $content->eighth_section_second_heading ?? '' }}</h4>
                    <h6 class="f-black s-bold text-center">{{ $content->eighth_section_second_description ?? '' }}</h6>
                </div>
                <div class="col-lg-3 inner-col-best" id="projects">
                    <h4 class="counter-numbers">{{ $content->eighth_section_third_heading ?? '' }}</h4>
                    <h6 class="f-black s-bold text-center">{{ $content->eighth_section_third_description ?? '' }}</h6>
                </div>
                <div class="col-lg-3 inner-col-best" id="offices">
                    <h4 class="counter-numbers">{{ $content->eighth_section_fourth_heading ?? '' }}</h4>
                    <h6 class="f-black s-bold text-center">{{ $content->eighth_section_fourth_description ?? '' }}</h6>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.front.cta')
@endsection
