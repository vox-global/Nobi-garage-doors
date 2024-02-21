@extends('layouts.front.app')
@section('content')
    <section class="banner-home banner-installation banner-door-repair inner-banner banner-contact"
    style="background-image: url('{{ !empty($content->banner_image) ? asset('storage/' . $content->banner_image) : '' }}')">
        <div class="container text-center">
            <h1 class="inner-main-text"> {{ $content->banner_heading ?? '' }} <span class="sub-text"><span></h1>
            <p class="py-4 inner-banner-para"> {{ $content->banner_text ?? '' }}</p>
            <a href="tel:{{ $settings['phone_number'] }}" class="inner-btn"> {{ $content->banner_button_text ?? '' }}</a>
        </div>
        <div class="inner-banner-overlay">
    </section>

    <section class="value">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="contact-box box-shadow">
                        <div class="contact-">
                            <div class="icon-box">
                                <div class="icon-styled  with-bulb color-main color2">
                                    <img width="100%" height="100%" src="{{ asset('front/images/email-icon.webp') }}"
                                        class="icon-inner contact" alt="Nobi Garage Doors">
                                </div>
                            </div>
                        </div>
                        <div class="details">
                            <div class="h-contact">Email Us</div>
                            <a class="credentials-contact" href="mail:{{ $settings['email'] }}">
                                {{ $settings['email'] }}
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="contact-box-2 box-shadow">
                        <div class="contact-">
                            <div class="icon-box">
                                <div class="icon-styled  with-bulb color-main color2">
                                    <img width="100%" height="100%" src="{{ asset('front/images/phone-icon.webp') }}"
                                        id="phone-icon-contact" class="icon-inner contact" alt="Nobi Garage Doors">
                                </div>
                            </div>
                        </div>
                        <div class="details">
                            <div class="h-contact">Phone</div>
                            <a class="credentials-contact" href="tel:{{ $settings['phone_number'] }}">
                                {{ $settings['phone_number'] }}
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>

    <section class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 form-column-contact">
                    <form method="POST" action="mail2.php">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                                placeholder="Enter Your Name *" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Your email *" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                            <textarea class="form-control" name="address" placeholder="Enter your Address *" id="exampleFormControlTextarea1"
                                rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn contact-btn-submit">Submit</button>
                    </form>
                    {{-- <?php if ($_GET['submitted'] == 1) : ?>
                    <p class="th-alert">Thanks for getting in touch, your query will be answered shortly.</p>
                <?php endif; ?> --}}
                </div>
                <!-- <div class="col-lg-6">
                        <div class="map additional-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d424141.69764626387!2d150.931975!3d-33.848244!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney%20NSW!5e0!3m2!1sen!2sau!4v1705525031118!5m2!1sen!2sau" width="650" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div> -->
            </div>
    </section>

    @include('layouts.front.cta')
@endsection
