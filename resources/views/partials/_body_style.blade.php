<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{env('APP_NAME')}}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/typography.css') }}"/>
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}"/>

    <!-- Full calendar -->
    <link href="{{ asset('assets/fullcalendar/core/main.css') }}" rel='stylesheet' />
    <link href="{{ asset('assets/fullcalendar/daygrid/main.css') }}" rel='stylesheet' />
    <link href="{{ asset('assets/fullcalendar/timegrid/main.css') }}" rel='stylesheet' />
    <link href="{{ asset('assets/fullcalendar/list/main.css') }}" rel='stylesheet' />
    @yield('styles')
</head>
