<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
    <title>Nobi Garage Doors - @yield('page_header')</title>
    <!-- CSS -->
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <link href="{{ asset('admin/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('admin/css/qrcode-reader.min.css') }}">
    <!-- include summernote css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <!-- Moyasar Styles -->
    {{-- <link rel="stylesheet" href="https://cdn.moyasar.com/mpf/1.5.0/moyasar.css"> --}}

    <link rel="stylesheet" href="{{ asset('admin/switch/tailwind-switch.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css" />
    @stack('css')
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

        .validation-error {
            width: 100%;
            margin-top: .25rem;
            font-size: 80%;
            color: #ed5564;
        }

        .modal-backdrop.show {
            opacity: 0;
            z-index: -2000;
        }

        .has-sidebar-left.page {
            height: 100vh;
            overflow-y: auto;
        }

        .btn-success {
            background-color: #1FA7A8 !important;
            border-color: #1FA7A8 !important;
        }

        button.swal2-confirm.btn.btn-success {
            margin-left: 10px;
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
@php
    $languages = App\Models\Language::all();
@endphp

<body class="light">
    <!-- Pre loader -->
    @include('layouts.admin.loader')
    <div id="app">
        {{-- //////////////////////////// SIDENAV ////////////////////////////// --}}

        @include('layouts.admin.sidenav')

        {{-- //////////////////////////// END SIDENAV ////////////////////////////// --}}
        <div class="page has-sidebar-left">
            <div class="pos-f-t">
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
                        <div class="search-bar">
                            <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50"
                                type="text" placeholder="start typing...">
                        </div>
                        <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent"
                            aria-expanded="false" aria-label="Toggle navigation"
                            class="paper-nav-toggle paper-nav-white active "><i></i></a>
                    </div>
                </div>
            </div>
            <div
                class="navbar navbar-expand d-flex navbar-dark justify-content-between bd-navbar blue accent-3 shadow d-print-none">
                <div class="relative">
                    <div class="d-flex">
                        <div>
                            <a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle">
                                <i style="background-color: white;"></i>
                            </a>
                        </div>
                        <div class="d-none d-md-block">
                            <h1 class="nav-title text-white ">@yield('page_header')</h1>
                        </div>
                    </div>
                </div>
                <!--Top Menu Start -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages-->
                        {{-- <li class="dropdown custom-dropdown messages-menu">
                            <a href="#" class="nav-link" data-toggle="dropdown">
                                <i class="icon-message "></i>
                                <span class="badge badge-success badge-mini rounded-circle">4</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu pl-2 pr-2">
                                        <!-- start message -->
                                        <li>
                                            <a href="#">
                                                <div class="avatar float-left">
                                                    <img src="{{ asset('admin/img/dummy/u4.png') }}" alt="">
                        <span class="avatar-badge busy"></span>
                </div>
                <h4>
                    Support Team
                    <small><i class="icon icon-clock-o"></i> 5 mins</small>
                </h4>
                <p>Why not buy a new awesome theme?</p>
                </a>
                </li>
                <!-- end message -->
                <!-- start message -->
                <li>
                    <a href="#">
                        <div class="avatar float-left">
                            <img src="{{ asset('admin/img/dummy/u1.png') }}" alt="">
                            <span class="avatar-badge online"></span>
                        </div>
                        <h4>
                            Support Team
                            <small><i class="icon icon-clock-o"></i> 5 mins</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                    </a>
                </li>
                <!-- end message -->
                <!-- start message -->
                <li>
                    <a href="#">
                        <div class="avatar float-left">
                            <img src="{{ asset('admin/img/dummy/u2.png') }}" alt="">
                            <span class="avatar-badge idle"></span>
                        </div>
                        <h4>
                            Support Team
                            <small><i class="icon icon-clock-o"></i> 5 mins</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                    </a>
                </li>
                <!-- end message -->
                <!-- start message -->
                <li>
                    <a href="#">
                        <div class="avatar float-left">
                            <img src="{{ asset('admin/img/dummy/u3.png') }}" alt="">
                            <span class="avatar-badge busy"></span>
                        </div>
                        <h4>
                            Support Team
                            <small><i class="icon icon-clock-o"></i> 5 mins</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                    </a>
                </li>
                <!-- end message -->
                </ul>
                </li>
                <li class="footer s-12 p-2 text-center"><a href="#">See All Messages</a></li>
                </ul>
                </li> --}}
                        <!-- Notifications -->
                        <li>
                            <div class="mt-1">
                                <div class="float-left image pr-2">
                                    <img class="user_avatar"
                                        src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->image) : 'http://xvelopers.com/demos/html/paper-panel/assets/img/dummy/u2.png' }}"
                                        alt="User Image">
                                </div>
                                <div class="float-left info mt-1">
                                    <h6 class="font-weight-light mt-2 mb-1 pr-4" style="color: white">
                                        {{ Auth::user()->name }}</h6>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown custom-dropdown notifications-menu">
                            <a href="#" class=" nav-link" data-toggle="dropdown" aria-expanded="false">
                                <i class="icon-notifications " style="color: white"></i>
                                {{-- <span class="badge badge-danger badge-mini rounded-circle">4</span> --}}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="header">You have
                                    {{ auth()->user()->notifications()->count() }}
                                    notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        @foreach (auth()->user()->notifications() as $notification)
                                            <li>
                                                @php
                                                    if ($notification->payload['module'] == 'shipment_detail') {
                                                        $anchor = route('shipment-detail', encrypt($notification->payload['id']));
                                                    } elseif ($notification->payload['module'] == 'order_detail') {
                                                        $anchor = route('box_order-detail', encrypt($notification->payload['id']));
                                                    } else {
                                                        $anchor = '#';
                                                    }
                                                @endphp
                                                <a href="{{ $anchor }}">
                                                    <i class="icon icon-data_usage text-success"></i>
                                                    {{ $notification->title }}
                                                    <p>{{ $notification->text }}</p>
                                                    <p>{{ Carbon\Carbon::parse($notification->created_at)->isoformat('LLLL') }}
                                                    </p>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="footer p-2 text-center"><a href="#"></a></li>
                            </ul>
                        </li>
                        {{-- <li>
                            <a class="nav-link " data-toggle="collapse" data-target="#navbarToggleExternalContent"
                                aria-controls="navbarToggleExternalContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <i class=" icon-search3 "></i>
                            </a>
                        </li> --}}
                        <!-- Right Sidebar Toggle Button -->
                        {{-- <li>
                            <a class="nav-link ml-2" data-toggle="control-sidebar">
                                <i class="icon-tasks "></i>
                            </a>
                        </li> --}}
                        <!-- User Account-->
                        <li class="dropdown custom-dropdown user user-menu ">
                            <a href="#" class="nav-link" data-toggle="dropdown">
                                {{-- <img src="{{ asset('storage/'.Auth::user()->image) }}" width="25" height="25" class="user-image" alt="User Image"> --}}
                                <i class="icon-more_vert " style="color:white; z-index:9999;"></i>
                            </a>
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                <div class="list-group mt-3 shadow">
                                    {{-- <a href="{{ route('updateProfile') }}" --}}
                                    <a href="{{ route('updateProfile') }}"
                                        class="list-group-item list-group-item-action ">
                                        <i class="mr-2 icon-cogs text-blue"></i>
                                        Update Profile
                                    </a>
                                    {{-- <a href="{{ route('change_password') }}" --}}
                                    <a href="{{ route('manage-password') }}"
                                        class="list-group-item list-group-item-action ">
                                        <i class="mr-2 icon-cogs text-blue"></i>
                                        Change Password
                                    </a>
                                    <a href="#"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        class="list-group-item list-group-item-action">
                                        <i class="mr-2 icon-sign-out text-purple"></i>
                                        Logout
                                    </a>
                                </div>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- CONTENT START --}}
            @yield('content')
            {{-- CONTENT END --}}


            <!-- Right Sidebar -->
            {{-- <aside class="control-sidebar fixed white ">
            <div class="slimScroll">
                <div class="sidebar-header">
                    <h4>Activity List</h4>
                    <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
                </div>
                <div class="p-3">
                    <div>
                        <div class="my-3">
                            <small>25% Complete</small>
                            <div class="progress" style="height: 3px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%;"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="my-3">
                            <small>45% Complete</small>
                            <div class="progress" style="height: 3px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 45%;"
                                    aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="my-3">
                            <small>60% Complete</small>
                            `
                            <div class="progress" style="height: 3px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;"
                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="my-3">
                            <small>75% Complete</small>
                            <div class="progress" style="height: 3px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="my-3">
                            <small>100% Complete</small>
                            <div class="progress" style="height: 3px;">
                                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3 bg-primary text-white">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="font-weight-normal s-14">Sodium</h5>
                            <span class="font-weight-lighter text-primary">Spark Bar</span>
                            <div> Oxygen
                                <span class="text-primary">
                                    <i class="icon icon-arrow_downward"></i> 67%</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <canvas width="100" height="70" data-chart="spark" data-chart-type="bar"
                                data-dataset="[[28,68,41,43,96,45,100,28,68,41,43,96,45,100,28,68,41,43,96,45,100,28,68,41,43,96,45,100]]"
                                data-labels="['a','b','c','d','e','f','g','h','i','j','k','l','m','n','a','b','c','d','e','f','g','h','i','j','k','l','m','n']">
                            </canvas>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
                        <tbody>
                            <tr>
                                <td>
                                    <a href="#">INV-281281</a>
                                </td>
                                <td>
                                    <span class="badge badge-success">Paid</span>
                                </td>
                                <td>$ 1228.28</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">INV-01112</a>
                                </td>
                                <td>
                                    <span class="badge badge-warning">Overdue</span>
                                </td>
                                <td>$ 5685.28</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">INV-281012</a>
                                </td>
                                <td>
                                    <span class="badge badge-success">Paid</span>
                                </td>
                                <td>$ 152.28</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">INV-01112</a>
                                </td>
                                <td>
                                    <span class="badge badge-warning">Overdue</span>
                                </td>
                                <td>$ 5685.28</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">INV-281012</a>
                                </td>
                                <td>
                                    <span class="badge badge-success">Paid</span>
                                </td>
                                <td>$ 152.28</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="sidebar-header">
                    <h4>Activity</h4>
                    <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
                </div>
                <div class="p-4">
                    <div class="activity-item activity-primary">
                        <div class="activity-content">
                            <small class="text-muted">
                                <i class="icon icon-user position-left"></i> 5 mins ago
                            </small>
                            <p>Lorem ipsum dolor sit amet conse ctetur which ascing elit users.</p>
                        </div>
                    </div>
                    <div class="activity-item activity-danger">
                        <div class="activity-content">
                            <small class="text-muted">
                                <i class="icon icon-user position-left"></i> 8 mins ago
                            </small>
                            <p>Lorem ipsum dolor sit ametcon the sectetur that ascing elit users.</p>
                        </div>
                    </div>
                    <div class="activity-item activity-success">
                        <div class="activity-content">
                            <small class="text-muted">
                                <i class="icon icon-user position-left"></i> 10 mins ago
                            </small>
                            <p>Lorem ipsum dolor sit amet cons the ecte tur and adip ascing elit users.</p>
                        </div>
                    </div>
                    <div class="activity-item activity-warning">
                        <div class="activity-content">
                            <small class="text-muted">
                                <i class="icon icon-user position-left"></i> 12 mins ago
                            </small>
                            <p>Lorem ipsum dolor sit amet consec tetur adip ascing elit users.</p>
                        </div>
                    </div>
                </div>
            </div>
        </aside> --}}
            <!-- /.right-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
            <div class="control-sidebar-bg shadow white fixed"></div>

            <div class="modal fade" id="fill_questionaire_form_modal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content"></div>
                </div>
            </div>
        </div>
        <!--/#app -->
        <script src="{{ asset('admin/js/app.js') }}"></script>
        <script src="{{ asset('admin/js/qrcode-reader.min.js') }}"></script>

        {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
        {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}

        <script src="{{ asset('admin/toastr/toastr.min.js') }}"></script>
        {{-- <script
                src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap&amp;sensor=false&amp;libraries=places">
    </script> --}}
        <script src="{{ asset('admin/js/locationpicker.js') }}"></script>
        {{-- <script src="{{ asset('admin/js/summernote-cleaner.js') }}"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js"></script>
        {{-- <button class="btn btn-primary btn-lg toast-action" data-title="Hey, Bro!"
            data-message="Paper Panel has toast as well." data-type="error" data-position-class="toast-bottom-left">
            Error Toast</button> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>
        <!-- include summernote js -->
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

        <script src="https://polyfill.io/v3/polyfill.min.js?features=fetch"></script>
        {{-- <script src="https://cdn.moyasar.com/mpf/1.5.0/moyasar.js"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js"></script>

        <script src="{{ asset('admin/switch/jquery-tailwind-toggle.js') }}"></script>
        @include('layouts.admin.widgets_modals')
        @stack('widget_modals')
        <script>
            @if (Session::has('message'))
                toastr["{{ Session::get('type') }}"]("{{ Session::get('message') }}", "{{ Session::get('title') }}")
            @endif

            $('.dropify').dropify();

            $(".treeview-menu").each(function() {
                if ($(this).children().length == 0) {
                    $(this).parent().remove();
                }
            });

            $('#disable_enter_submit').on('keyup keypress', function(e) {
                var keyCode = e.keyCode || e.which;
                if (keyCode === 13) {
                    e.preventDefault();
                    return false;
                }
            });
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                                console.log("false")
                            } else {
                                console.log("true")
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
        @stack('scripts')
        @stack('widget_scripts')

        <script>
            jQuery('#datetimepicker7').datetimepicker({
                timepicker: false,
                formatDate: 'Y-m-d',
                maxDate: new Date() //tomorrow is maximum date calendar
            });
        </script>

        <script>
            $(".numberInput").attr("maxlength", 6);
            $(".numberInput").keyup(function() {
                var number = $('.numberInput').val();
                if (number.length > 11) number = number.substring(0, 11);
                $('.numberInput').val(number);
            });

            function ucwords(str) {
                return (str + '').replace(/^([a-z])|\s+([a-z])/g, function($1) {
                    return $1.toUpperCase();
                });
            }
        </script>

        <!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
</body>

</html>
