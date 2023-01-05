<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>{{ $page }} | Amor & Restauración</title>


<meta property="og:url" content="https://amoryrestauracion.tv" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{ $page }} " />
<meta property="og:description"
    content="Iglesia Cristiana Amor & Restauración. Edificar con visión perfecta a través de la fe, la esperanza y el amor. Para conquistar y transformar los nuevos escenarios." />
<meta property="og:image" content="https://amoryrestauracion.tv/assets/img/logo-negro.png" />
<meta property="og:locale" content="es_MX" />
<meta property="og:locale:alternate" content="en_US" />
<meta property="og:site_name" content="AutoNavega" />

<meta name="twitter:description"
    content="Iglesia Cristiana Amor & Restauración. Edificar con visión perfecta a través de la fe, la esperanza y el amor. Para conquistar y transformar los nuevos escenarios." />
<meta name="twitter:image" content="https://amoryrestauracion.tv/assets/img/logo-negro.png" />
<meta name="twitter:site" content="@autonavega" />
<meta name="twitter:creator" content="@autonavega" />
<meta name="twitter:via" content="amoryrestauracion" />
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="https://amoryrestauracion.tv/" />
<meta name="twitter:domain" content="amoryrestauracion.com">

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
<link rel="apple-touch-icon" href="{{ asset('assets/img/logo-app.png') }}">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap"
    rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="{{ asset('assets/plugins/owlcarousel/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/owlcarousel/owl.theme.default.min.css') }}">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


<!-- jQuery -->
<script src="{{ asset('assets/js/jquery-3.5.0.min.js') }}"></script>
<!-- Bootstrap Core JS -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

{{-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css"> --}}
@if (Route::is(['agencia.detalles']))
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
@endif





<!-- Main CSS -->
@if (Route::is(['landing.index']))
    <link rel="stylesheet" href="{{ asset('assets/css/style_landing.css') }}">
@endif
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

@if (Route::is(['user.agency.stats', 'user.personal', 'user.personal.ver']))
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"
        integrity="sha512-TW5s0IT/IppJtu76UbysrBH9Hy/5X41OTAbQuffZFU6lQ1rdcLHzpU5BzVvr/YFykoiMYZVWlr/PX1mDcfM9Qg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endif
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-86555482-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-86555482-1');
</script>
