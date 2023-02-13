
<!-- base css -->
<link rel="stylesheet" media="screen, print" href={{ asset('css/vendors.bundle.css') }}>
<link rel="stylesheet" media="screen, print" href={{ asset('css/app.bundle.css') }}>
<!--<link rel="stylesheet" media="screen, print" href="css/your_styles.css">-->

<link rel="apple-touch-icon" sizes="180x180" href={{ asset('img/favicon/apple-touch-icon.png') }}>
<link rel="icon" type="image/png" sizes="32x32" href={{ asset('img/favicon/favicon-32x32.png') }}>
<link rel="mask-icon" href={{ asset('img/favicon/safari-pinned-tab.svg') }} color="#5bbad5">
<link rel="stylesheet" media="screen, print" href={{ asset('css/datagrid/datatables/datatables.bundle.css') }}>
<link rel="stylesheet" media="screen, print" href={{ asset('css/fa-solid.css') }}>


@props(['errors'])

@if ($errors->any())
    <div class="position-absolute pos-top pos-right mt-3 mr-3  ">

        <div class="toast fade show alert-danger" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast" id="#exampleModal">
            <div class="toast-header">
                <img src="img/logo.png" alt="brand-logo" height="16" class="mr-2">
                <strong class="mr-auto">Whoops!</strong>
                <small class="text-muted">just now</small>
                <button type="button" class="ml-2 close" data-dismiss="toast" data-target="#exampleModal" aria-label="Close" >
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="toast-body">
                <div {{ $attributes }}>
                    <div class="pl-2 pt-2 font-large text-red-600">
                        <strong> {{ __('Whoops! Hatali veri girişi oldu.') }} </strong>
                    </div>

                    <ul class="mt-3 mb-0 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>

        </div>

@endif

