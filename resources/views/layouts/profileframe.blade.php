@extends('layouts.main')

<link rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
<link rel="stylesheet" media="screen, print" href="css/app.bundle.css">
<!-- Place favicon.ico in the root directory -->
<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
<link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
@section('content')

    <div class="page-content">
        <div class="d-flex justify-content-center">

            <div class="col-xl-7">
                <div id="panel-1" class="panel">
            <div class="panel-hdr">

                <h2>
                    Profil <span class="fw-300"><i>Bilgilerim</i></span>
                </h2>
            </div>
                            @yield('procontent')
                </div>
            </div>

        </div>
        </div>
    </div>


@endsection
