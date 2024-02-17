<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link href="{{ asset('admin/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />
    <meta name="author" content="">
    <title>Meri Sehat Login</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/app.css') }}">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }

        .height-full {
            background-image: url(' {{ asset('admin/img/login_bg.png') }}');
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
            background-size: cover;
        }

        @media screen and (min-width:320px) and (max-width:1365px) {
            .height-full {
                background-image: none;
            }
        }
    </style>

    <!-- Js -->
    <!--
    --- Head Part - Use Jquery anywhere at page.
    --- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
    -->
    <script>
        (function(w, d, u) {
            w.readyQ = [];
            w.bindReadyQ = [];

            function p(x, y) {
                if (x == "ready") {
                    w.bindReadyQ.push(y);
                } else {
                    w.readyQ.push(x);
                }
            };
            var a = {
                ready: p,
                bind: p
            };
            w.$ = w.jQuery = function(f) {
                if (f === d || f === u) {
                    return a
                } else {
                    p(f)
                }
            }
        })(window, document)
    </script>
</head>

<body class="light">
    <!-- Pre loader -->

    @include('layouts.admin.loader')
    <div id="app">
        <main>
            <div id="primary" class="p-t-b-100 height-full ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mx-md-auto">
                            <div class="text-center">
                                <img src="{{ asset('admin/img/logo.svg') }}" alt="">
                                <h3 class="mt-2"></h3>
                                <p class="p-t-b-20"></p>
                            </div>

                            <form method="POST" action="{{ route('signup') }}">
                                @csrf
                                <div class="form-group has-icon"><i class="icon-person"></i>
                                    <input type="text" name="name" class="form-control form-control-lg"
                                        placeholder="Full name">
                                    @error('name')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group has-icon"><i class="icon-phone"></i>
                                    <input type="number" name="phone" class="form-control form-control-lg"
                                        maxlength="11" placeholder="Phone Number"
                                        oninput="this.value=this.value.slice(0,this.maxLength)">
                                    @error('phone')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                                    <input type="email" name="email" class="form-control form-control-lg"
                                        placeholder="Valid Email Address">
                                    @error('email')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                    <input type="password" name="password" class="form-control form-control-lg"
                                        placeholder="Password">
                                    @error('password')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                    <input type="password" name="password_confirmation"
                                        class="form-control form-control-lg" placeholder="Confirm Password">
                                    @error('password_confirmation')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group has-icon">
                                    @error('invalid_credentials')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <input type="submit" class="btn btn-success btn-lg btn-block" value="Sign Up">
                                <a href="{{ route('login') }}" class="btn btn-info btn-lg btn-block">Login </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #primary -->
        </main>
        <!-- Right Sidebar -->

        <div class="control-sidebar-bg shadow white fixed"></div>
    </div>
    <!--/#app -->
    <script src="{{ asset('assets/js/app.js') }}"></script>


    <!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script src="{{ asset('admin/toastr/toastr.min.js') }}"></script>
    <script>
        @if (Session::has('message'))
            toastr["{{ Session::get('type') }}"]("{{ Session::get('message') }}", "{{ Session::get('title') }}")
        @endif
        (function($, d) {
            $.each(readyQ, function(i, f) {
                $(f)
            });
            $.each(bindReadyQ, function(i, f) {
                $(d).bind("ready", f)
            })
        })(jQuery, document)
    </script>
</body>

</html>
