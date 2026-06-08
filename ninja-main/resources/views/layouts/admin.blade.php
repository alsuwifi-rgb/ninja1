<!doctype html>

<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
    data-bs-theme="@yield('theme-color', 'semi-dark')">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('panel.site_title') }}</title> <!--favicon-->
    <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/png">

    <!--plugins-->
    <link href="{{ asset('/dashboard/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/assets/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/assets/plugins/metismenu/mm-vertical.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/assets/plugins/simplebar/css/simplebar.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/monthSelect/style.css">



    <!--bootstrap css-->
    <link href="{{ asset('/dashboard/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    {{--        <link href="{{ asset("dashboard/assets/plugins/datatable/css/dataTables.bootstrap5.min.css") }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    {{--    old Datatable --}}
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />

    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css"> --}}


    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <!--main css-->
    <link href="{{ asset('/dashboard/assets/css/bootstrap-extended.css?v=4') }}" rel="stylesheet">
    <link href="{{ asset('/dashboard/sass/main.css?v=4') }}" rel="stylesheet">
    <link href="{{ asset('/dashboard/sass/dark-theme.css?v=4') }}" rel="stylesheet">
    <link href="{{ asset('/dashboard/sass/semi-dark.css?v=4') }}" rel="stylesheet">
    <link href="{{ asset('/dashboard/sass/bordered-theme.css?v=4') }}" rel="stylesheet">
    <link href="{{ asset('/dashboard/sass/responsive.css?v=4') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/dashboard/assets/plugins/notifications/css/lobibox.min.css') }}">


    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/custom.css?v=12') }}">
    @yield('styles')

</head>

<body>

    <!--start header-->
    @include('partials.header')
    <!--end top header-->







    @include('partials.menu')

    <!--start main wrapper-->
    <main class="main-wrapper">
        <div class="main-content">
            <div class="mb-3">
                <x-back-button  />
            </div>



            <!--breadcrumb-->
            {{--        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3"> --}}
            {{--            <div class="breadcrumb-title pe-3">Components</div> --}}
            {{--            <div class="ps-3"> --}}
            {{--                <nav aria-label="breadcrumb"> --}}
            {{--                    <ol class="breadcrumb mb-0 p-0"> --}}
            {{--                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a> --}}
            {{--                        </li> --}}
            {{--                        <li class="breadcrumb-item active" aria-current="page">Starter Page</li> --}}
            {{--                    </ol> --}}
            {{--                </nav> --}}
            {{--            </div> --}}
            {{--            <div class="ms-auto"> --}}
            {{--                <div class="btn-group"> --}}
            {{--                    <button type="button" class="btn btn-primary">Settings</button> --}}
            {{--                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span> --}}
            {{--                    </button> --}}
            {{--                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a> --}}
            {{--                        <a class="dropdown-item" href="javascript:;">Another action</a> --}}
            {{--                        <a class="dropdown-item" href="javascript:;">Something else here</a> --}}
            {{--                        <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a> --}}
            {{--                    </div> --}}
            {{--                </div> --}}
            {{--            </div> --}}
            {{--        </div> --}}
            <!--end breadcrumb-->
            @yield('content')

        </div>
    </main>

    <div class="modal main_modal fade" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <!-- Modal content goes here -->
        </div>
    </div>

    <!--end main wrapper-->


    <!--start overlay-->
    <div class="overlay btn-toggle"></div>
    <!--end overlay-->



    <!--start footer-->
    {{-- <footer class="page-footer"> --}}
    {{--    <p class="mb-0">Copyright © 2024. All right reserved.</p> --}}
    {{-- </footer> --}}
    <!--top footer-->

    <!--start cart-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart">
        <div class="offcanvas-header border-bottom h-70 justify-content-between">
            <h5 class="mb-0" id="offcanvasRightLabel">8 New Orders</h5>
            <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
                <i class="material-icons-outlined">close</i>
            </a>
        </div>
        <div class="offcanvas-body p-0">
            <div class="order-list">
                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="{{ asset('/dashboard/assets/images/orders/01.png') }}" class="img-fluid rounded-3"
                            width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">White Men Shoes</h5>
                        <p class="mb-0 order-price">$289</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>

                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="{{ asset('/dashboard/assets/images/orders/02.png') }}" class="img-fluid rounded-3"
                            width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">Red Airpods</h5>
                        <p class="mb-0 order-price">$149</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>

                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="{{ asset('/dashboard/assets/images/orders/03.png') }}" class="img-fluid rounded-3"
                            width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">Men Polo Tshirt</h5>
                        <p class="mb-0 order-price">$139</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>

                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="{{ asset('/dashboard/assets/images/orders/04.png') }}" class="img-fluid rounded-3"
                            width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">Blue Jeans Casual</h5>
                        <p class="mb-0 order-price">$485</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>

                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="{{ asset('/dashboard/assets/images/orders/05.png') }}" class="img-fluid rounded-3"
                            width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">Fancy Shirts</h5>
                        <p class="mb-0 order-price">$758</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>

                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="{{ asset('/dashboard/assets/images/orders/06.png') }}" class="img-fluid rounded-3"
                            width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">Home Sofa Set </h5>
                        <p class="mb-0 order-price">$546</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>

                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="{{ asset('/dashboard/assets/images/orders/07.png') }}" class="img-fluid rounded-3"
                            width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">Black iPhone</h5>
                        <p class="mb-0 order-price">$1049</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>

                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="{{ asset('/dashboard/assets/images/orders/08.png') }}" class="img-fluid rounded-3"
                            width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">Goldan Watch</h5>
                        <p class="mb-0 order-price">$689</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-footer h-70 p-3 border-top">
            <div class="d-grid">
                <button type="button" class="btn btn-dark" data-bs-dismiss="offcanvas">View Products</button>
            </div>
        </div>
    </div>
    <!--end cart-->



    <!--start switcher-->
    {{-- <button class="btn btn-primary position-fixed bottom-0 end-0 m-3 d-flex align-items-center gap-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"> --}}
    {{--    <i class="material-icons-outlined">tune</i>Customize --}}
    {{-- </button> --}}

    {{-- <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="staticBackdrop"> --}}
    {{--    <div class="offcanvas-header border-bottom h-70 justify-content-between"> --}}
    {{--        <div class=""> --}}
    {{--            <h5 class="mb-0">Theme Customizer</h5> --}}
    {{--            <p class="mb-0">Customize your theme</p> --}}
    {{--        </div> --}}
    {{--        <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas"> --}}
    {{--            <i class="material-icons-outlined">close</i> --}}
    {{--        </a> --}}
    {{--    </div> --}}
    {{--    <div class="offcanvas-body"> --}}
    {{--        <div> --}}
    {{--            <p>Theme variation</p> --}}

    {{--            <div class="row g-3"> --}}
    {{--                <div class="col-12 col-xl-6"> --}}
    {{--                    <input type="radio" class="btn-check" name="theme-options" id="LightTheme" checked> --}}
    {{--                    <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="LightTheme"> --}}
    {{--                        <span class="material-icons-outlined">light_mode</span> --}}
    {{--                        <span>Light</span> --}}
    {{--                    </label> --}}
    {{--                </div> --}}
    {{--                <div class="col-12 col-xl-6"> --}}
    {{--                    <input type="radio" class="btn-check" name="theme-options" id="DarkTheme"> --}}
    {{--                    <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="DarkTheme"> --}}
    {{--                        <span class="material-icons-outlined">dark_mode</span> --}}
    {{--                        <span>Dark</span> --}}
    {{--                    </label> --}}
    {{--                </div> --}}
    {{--                <div class="col-12 col-xl-6"> --}}
    {{--                    <input type="radio" class="btn-check" name="theme-options" id="SemiDarkTheme"> --}}
    {{--                    <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="SemiDarkTheme"> --}}
    {{--                        <span class="material-icons-outlined">contrast</span> --}}
    {{--                        <span>Semi Dark</span> --}}
    {{--                    </label> --}}
    {{--                </div> --}}
    {{--                <div class="col-12 col-xl-6"> --}}
    {{--                    <input type="radio" class="btn-check" name="theme-options" id="BoderedTheme"> --}}
    {{--                    <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="BoderedTheme"> --}}
    {{--                        <span class="material-icons-outlined">border_style</span> --}}
    {{--                        <span>Bordered</span> --}}
    {{--                    </label> --}}
    {{--                </div> --}}
    {{--            </div><!--end row--> --}}

    {{--        </div> --}}
    {{--    </div> --}}
    {{-- </div> --}}
    <!--start switcher-->

    <!--bootstrap js-->
    <script src="{{ asset('/dashboard/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!--plugins-->
    <script src="{{ asset('/dashboard/assets/js/jquery.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('/dashboard/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('/dashboard/assets/plugins/metismenu/metisMenu.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('dashboard/assets/plugins/select2/js/select2-custom.js') }}"></script>
    {{-- <script src="{{ asset("/dashboard/assets/plugins/datatable/js/jquery.dataTables.min.js") }}"></script> --}}
    {{-- <script src="{{ asset("/dashboard/assets/plugins/datatable/js/dataTables.bootstrap5.min.js") }}"></script> --}}
    {{-- <script src="{{asset('dashboard/assets/plugins/datatable/js/datatable-init.js')}}"></script> --}}
    <script src="{{ asset('dashboard/assets/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/plugins/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/index.js') }}"></script>
    {{-- <script src="{{asset('dashboard/assets/plugins/apexchart/data-cards.js')}}"></script> --}}
    <script src="{{ asset('dashboard/assets/js/index2.js') }}"></script>
    <script>
        $(".data-attributes span").peity("donut")
    </script>
    <script src="{{ asset('dashboard/assets/plugins/feather/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.1.5/dist/signature_pad.umd.min.js"></script>

    <script>
        feather.replace()
    </script>
    @include('layouts.old-js')
    <script src="{{ asset('/dashboard/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('/dashboard/assets/js/main.js') }}"></script>


    <script src="{{ asset('/dashboard/assets/plugins/notifications/js/lobibox.min.js') }}"></script>
    <script src="{{ asset('/dashboard/assets/plugins/notifications/js/notifications.min.js') }}"></script>
    <script src="{{ asset('/dashboard/assets/plugins/notifications/js/notification-custom-script.js') }}"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google-map.key') }}&libraries=places&callback=initGoogleAutocomplete"
    async
    defer>
</script>
<script>

</script>
    <script>
        const navItems = document.querySelectorAll('.employee-nav-item');

        navItems.forEach(item => {
            const link = item.querySelector('.nav-link');

            // Initial setup
            if (link && link.classList.contains('active')) {
                item.classList.add('has-active');
            }

            // Click handler
            link.addEventListener('click', function(e) {
                e.preventDefault(); // prevent default if it's a link (optional)

                // Remove active/has-active from all items
                navItems.forEach(i => {
                    const l = i.querySelector('.nav-link');
                    l.classList.remove('active');
                    i.classList.remove('has-active');
                });

                // Add active/has-active to clicked item
                link.classList.add('active');
                item.classList.add('has-active');
            });
        });
    </script>

@if (session('success'))
    @php
        $successMessages = session('success');
        $successMessages = is_array($successMessages) ? $successMessages : [$successMessages];
    @endphp

    @foreach ($successMessages as $message)
        <script>
            showToaster(@json($message), 'success');
        </script>
    @endforeach
@endif

@if (session('error'))
    @php
        $errorMessages = session('error');
        $errorMessages = is_array($errorMessages) ? $errorMessages : [$errorMessages];
    @endphp

    @foreach ($errorMessages as $message)
        <script>
            showToaster(@json($message), 'error');
        </script>
    @endforeach
@endif

    @if ($errors->any())

        @foreach ($errors->all() as $error)
            <script>
                showToaster('{{ $error }}', 'error');
            </script>
        @endforeach

    @endif
    @include('partials.notification-scripts')
@yield('scripts')
</body>

</html>
