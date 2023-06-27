
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
    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors"/>

    <form method="POST" action="{{ route('register') }}">
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
                    <div action="intel_introduction.html">
                        <div class="form-group">
                            <label class="form-label" for="username">Kullanıcı Adı</label>
                            <input type="name" id="name" name="name" class="form-control"
                                   placeholder="Enter Username" required autofocus>

                        </div>

                        <div class="form-group">
                            <label class="form-label" for="email">E-posta</label>
                            <input type="name" id="name" name="email" class="form-control"
                                   placeholder="Enter email" required >

                        </div>

                        <div class="form-group">
                            <label class="form-label" for="password">Parola</label>
                            <input type="password" id="password" name="password" class="form-control"
                                   placeholder="Enter password" required>

                        </div>

                        <div class="form-group">
                            <label class="form-label" for="password">Parola Eşlemesi</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                                   placeholder="password" required>

                        </div>

                        <button type="submit" class="btn btn-primary float-right waves-effect waves-themed ">Kayıt ol</button>
                    </div>
                    <div class="flex items-center justify-end mt-2">
                        <a class="blankpage-footer text-center" href="{{ route('login') }}">
                                {{ __('Kayıtlı mısın?') }}
                        </a>

                    </div>
                </div>

            </div>
        </div>


        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

        </div>

    </form>
</x-guest-layout>
