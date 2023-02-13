<script src="js/vendors.bundle.js"></script>
<script src="js/app.bundle.js"></script>

<!-- base css -->
<link rel="stylesheet" media="screen, print" href={{ asset('css/vendors.bundle.css') }}>
<link rel="stylesheet" media="screen, print" href={{ asset('css/app.bundle.css') }}>
<!--<link rel="stylesheet" media="screen, print" href="css/your_styles.css">-->

<link rel="apple-touch-icon" sizes="180x180" href={{ asset('img/favicon/apple-touch-icon.png') }}>
<link rel="icon" type="image/png" sizes="32x32" href={{ asset('img/favicon/favicon-32x32.png') }}>
<link rel="mask-icon" href={{ asset('img/favicon/safari-pinned-tab.svg') }} color="#5bbad5">
<link rel="stylesheet" media="screen, print" href={{ asset('css/datagrid/datatables/datatables.bundle.css') }}>
<link rel="stylesheet" media="screen, print" href={{ asset('css/fa-solid.css') }}>
<link rel="stylesheet" media="screen, print" href="css/page-login.css">

<x-guest-layout>

    <x-auth-card>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <div class="blankpage-form-field">
                    <div
                        class="page-logo m-0 w-100 align-items-center justify-content-center rounded border-bottom-left-radius-0 border-bottom-right-radius-0 px-4">
                        <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                            <img src="img/diyanet1.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                            <span class="page-logo-text mr-1">Diyanet İşleri Başkanlığı</span>

                            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                        </a>
                    </div>
                    <div class="card p-4 border-top-left-radius-0 border-top-right-radius-0">
                        <form action="intel_introduction.html">
                            <div class="form-group">
                                <label class="form-label" for="username">Email</label>
                                <input type="email" id="email" name="email" class="form-control"
                                       placeholder="Enter email" :value="old('email')" required autofocus>

                            </div>
                            <div class="form-group">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control"
                                       placeholder="password">

                            </div>
                            <div class="form-group text-left">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="remember_me"
                                           name="remember">
                                    <label class="custom-control-label" for="rememberme"> Remember me </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary float-right waves-effect waves-themed ">Log in
                            </button>
                        </form>
                    </div>
                    @if (Route::has('password.request') && Route::has('register'))
                        <div class="blankpage-footer text-center">
                            <a href="{{ route('password.request') }}"><strong>Recover Password</strong></a> | <a
                                href="{{route('register')}}"><strong>Register Account</strong></a>
                        </div>
                    @endif

                </div>
            </div>

        </form>

    </x-auth-card>

</x-guest-layout>

