
<!-- base css -->
<link rel="stylesheet" media="screen, print" href={{ asset('css/vendors.bundle.css') }}>
<link rel="stylesheet" media="screen, print" href={{ asset('css/app.bundle.css') }}>
<!--<link rel="stylesheet" media="screen, print" href="css/your_styles.css">-->

<link rel="apple-touch-icon" sizes="180x180" href={{ asset('img/favicon/apple-touch-icon.png') }}>
<link rel="icon" type="image/png" sizes="32x32" href={{ asset('img/favicon/favicon-32x32.png') }}>
<link rel="mask-icon" href={{ asset('img/favicon/safari-pinned-tab.svg') }} color="#5bbad5">
<link rel="stylesheet" media="screen, print" href={{ asset('css/datagrid/datatables/datatables.bundle.css') }}>
<link rel="stylesheet" media="screen, print" href={{ asset('css/fa-solid.css') }}>

@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600 dark:text-green-400']) }}>
        {{ $status }}
    </div>
@endif
