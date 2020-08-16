<head>

    <title>{{ $title ?? 'سایت ما' }}</title>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

      <!-- Favicons -->
    <link href="{{ asset('images/admin/icon/favicon.png') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('images/admin/icon/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- SLEEK CSS -->
    <link rel="stylesheet" href="{{ mix('css/admin/style-rtl.css') }}" />
    {{ $style ?? '' }}

</head>
