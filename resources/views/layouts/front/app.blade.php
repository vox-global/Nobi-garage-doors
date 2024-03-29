<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nobi Garage Doors</title>
    <link rel="shortcut icon" href="{{ asset('front/images/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}?v=100.15" media>
    <link rel="stylesheet" href="{{ asset('front/css/utility.css') }}?v=20.6" media>
    <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}?v=20.15" media>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"
        media>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" media>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" media>
    <!-- Google tag (gtag.js) -->
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-C6S0SDL329"></script>-->
    <!--<script>
        -- >
        <
        !--window.dataLayer = window.dataLayer || [];
        -- >
        <
        !-- function gtag() {
            dataLayer.push(arguments);
        }-- >
        <
        !--gtag('js', new Date());
        -- >

        <
        !--gtag('config', 'G-C6S0SDL329');
        -- >
        <
        !--
    </script>-->
    <!-- Google Tag Manager -->
    <!--<script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': -- >
                    <
                    !--new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                -- >
                <
                !--j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = -- >
                <
                !--'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
            -- >
            <
            !--
        })(window, document, 'script', 'dataLayer', 'GTM-K6X5J6T5');
    </script>-->
    <!-- End Google Tag Manager -->

    <!--    <script type='text/javascript'>
        -- >
        <
        !--window.smartlook || (function(d) {
            -- >
            <
            !--
            var o = smartlook = function() {
                    o.api.push(arguments)
                },
                h = d.getElementsByTagName('head')[0];
            -- >
            <
            !--
            var c = d.createElement('script');
            o.api = new Array();
            c.async = true;
            c.type = 'text/javascript';
            -- >
            <
            !--c.charset = 'utf-8';
            c.src = 'https://web-sdk.smartlook.com/recorder.js';
            h.appendChild(c);
            -- >
            <
            !--
        })(document);
        -- >
        <
        !--smartlook('init', 'ff634752cea22de3b85e9d2bb30c772e77c12618', {
            region: 'eu'
        });
        -- >
        <
        !--
    </script>-->


    <!--<script>
        -- >
        <
        !--gtag('config', 'AW-11483494915/alfbCJ3Dl5AZEIP04OMq', {
            -- >
            <
            !--'phone_conversion_number': '0452234001'-- >
                <
                !--
        });
        -- >
        <
        !--
    </script>-->
    <!--New GTAG-->
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5J5VPXS2');
    </script>
    <!-- End Google Tag Manager -->

    <!--END-->



</head>
@php
    $settings = App\Models\Settings::getValues(['phone_number', 'Address', 'email', 'navbar_button_text', 'footer_text', 'copyright_text']);
@endphp

<body>
    <!-- Google Tag Manager (noscript) -->
    <!--<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6X5J6T5"-->
    <!--height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>-->
    <!-- End Google Tag Manager (noscript) -->

    <!--New-->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5J5VPXS2" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--End-->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="{{ route('home') }}"><img width="100%" height="100%"
                        src="{{ asset('front/images/logo.webp') }}" class="img-fluid logo" alt="Logo"></a>

                <!-- Navbar Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Links and Button -->
                <div class="collapse navbar-collapse justify-content-center" id="navbarScroll">
                    <ul class="navbar-nav navbar-nav-scroll">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                SERVICES
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('service-installation') }}">GARAGE DOOR
                                    INSTALLATIONS</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('service-repair') }}">REPAIR</a>

                            </div>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('supply') }}">SUPPLY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('projects') }}">PROJECTS</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blogs') }}">BLOGS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">CONTACT US</a>
                        </li>
                    </ul>





                </div>
                <a class="btn btn-regular nav"
                    href="tel:{{ $settings['phone_number'] }}">{{ $settings['navbar_button_text'] }}</a>
            </div>
        </nav>
    </header>
    <main>


        {{-- MAIN BODY --}}
        @yield('content')
        {{-- MAIN BODY --}}





        <!-- Start footer section -->
    </main>
    <footer>


        <section class="down-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 footer-sec">
                        <div class="footer-para">
                            <a class="logo" href="/"><img width="100%" height="100%"
                                    src="{{ asset('front/images/logo.webp') }}" alt="Logo"></a>
                            <p class="py-5 w-300">{{ $settings['footer_text'] }}</p>
                            <ul class="social-icons flex align-center ">

                                <li class="l-none flex pe-3"><a class="td-none f-white" href="#"><img
                                            width="100%" height="100%"
                                            src="{{ asset('front/images/facebook-black.webp') }}"
                                            class="pe-2 social-img" alt="Nobi Garage Doors"></a></li>
                                <li class="l-none flex pe-3"><a class="td-none f-white" href="#"><img
                                            width="100%" height="100%"
                                            src="{{ asset('front/images/insta-black.webp') }}"
                                            class="pe-2 social-img" alt="Nobi Garage Doors"></a></li>
                                <li class="l-none flex pe-3"><a class="td-none f-white" href="#"><img
                                            width="100%" height="100%"
                                            src="{{ asset('front/images/twitter-black.webp') }}"
                                            class="pe-2 social-img" alt="Nobi Garage Doors"></a></li>
                                <li class="l-none flex pe-3"><a class="td-none f-white" href="#"><img
                                            width="100%" height="100%"
                                            src="{{ asset('front/images/linkedin-black.webp') }}"
                                            class="pe-2 social-img" alt="Nobi Garage Doors"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 footer-sec">
                        <hr>
                        <div class="links container">
                            <h4 class="f-red s-bold">Links</h4>
                            <li class="l-none flex pt-3"><a class="td-none f-black"
                                    href="{{ route('home') }}">Home</a></li>
                            <li class="l-none flex pt-3"><a class="td-none f-black"
                                    href="{{ route('service-installation') }}">Services</a></li>
                            <li class="l-none flex pt-3"><a class="td-none f-black"
                                    href="{{ route('projects') }}">Projects</a></li>
                            <li class="l-none flex pt-3"><a class="td-none f-black"
                                    href="{{ route('contact') }}">Contact</a>
                            </li>

                        </div>
                    </div>
                    <div class="col-lg-3 footer-sec">
                        <hr>
                        <div class="contact container">
                            <h4 class="f-red s-bold">Contact</h4>
                            <li class="l-none flex pt-3"><a class="td-none f-black"
                                    href="tel:{{ $settings['phone_number'] }}">{{ $settings['phone_number'] }}</a>
                            </li>
                            <li class="l-none flex pt-3"><a class="td-none f-black">{{ $settings['Address'] }}</a>
                            </li>
                            <li class="l-none flex pt-3"><a class="td-none f-black"
                                    href="mailto:{{ $settings['email'] }}">{{ $settings['email'] }}</a></li>
                            <!-- <li class="l-none flex pt-3"><a class="td-none f-black" href="#">Contact</a></li> -->

                        </div>
                    </div>
                    <div class="col-lg-3 footer-sec">
                        <hr>
                        <div class="newsletter container">
                            <h4 class="f-red s-bold">Newsletter</h4>
                            <!-- <p class="py-4 w-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                            <form action="{{ route('newsletter') }}" method="post" class="mt-4">
                                <div class="email-input">
                                    <input class="input-field" type="email" placeholder="YOUR EMAIL"
                                        name="email" required>
                                    <button type="submit"><img width="100%" height="100%" class="inp-img"
                                            src="{{ asset('front/images/icon.webp') }}"></img></button>
                                </div>


                                @error('email')
                                    <div class="validation-error text-danger">{{ $message }}</div>
                                @enderror
                                @error('already_subscribed')
                                    <div class="validation-error text-success">{{ $message }}</div>
                                @enderror
                            </form>

                            <!-- <li class="l-none flex pt-3"><a class="td-none f-black" href="#">Contact</a></li> -->

                        </div>
                    </div>
                    <hr class="copyright-hr mt-4">
                </div>

            </div>
            <!-- <hr class="copyright-hr"> -->
            <p class="copyright text-center py-2">
                {{ $settings['copyright_text'] }}</p>
            </div>
        </section>

    </footer>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous" defer>
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous" defer>
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>

    <script src="{{ asset('front/js/script.js') }}" defer></script>

    <!-- Custom JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            jQuery("#testimonial-carousel").owlCarousel({
                items: 2,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 3000,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 5
                    }
                }
            });
        });
    </script>

</body>

</html>

@stack('scripts')

</html>
