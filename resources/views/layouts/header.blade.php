<title>@yield('title')</title>
<meta charset="UTF-8">
<meta name="city" content="Surat">
<meta name="country" content="India">
<meta name="google-site-verification" content="JOJUuUXCBtdHTk1KtRb76Zb9_C4fLqENqwEWpDw7Q-A" />

{{-- OG TAG START --}}

{{-- google --}}
<meta property="og:type" content="website">
<meta property="og:url" content="@yield('meta-url')">
<meta name="description" content="@yield('meta-description')">
<meta name="keywords" content="@yield('meta-keyword')">
<meta property="og:title" content="@yield('meta-title')">
<meta property="og:description" content="@yield('meta-description')">
<meta property="og:image" content="{{ asset('assets/img/index/logo/logo.png') }}">
<meta property="og:site_name" content="{{ env('APP_URL') }}">
<meta property="og:image:height" content="185">
<meta name="robots" content="INDEX,FOLLOW" />


{{-- OG TAG END --}}
<meta content="width=device-width, initial-scale=1" name="viewport" />

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RF60DYBC9Q"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-RF60DYBC9Q');
</script>

<!-- Google tag (gtag.js) Ads-->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11153740651"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'AW-11153740651');
</script>

{{-- <script Webito Infotech is an agile team of developers passionate about delivering quality software beyond expectations. Let's build applications together. src="https://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> --}}
{{-- <script src="https://demo.hasthemes.com/pustok-preview/pustok/js/plugins.js"></script> --}}
<!-- Favicons -->
<link href="{{ asset('assets/img/index/logo/favicon-2.png') }}" rel="icon">
<link href="{{ asset('assets/img/index/logo/favicon-1.png') }}" rel="webito">

<script src="{{ asset('https://kit.fontawesome.com/a076d05399.js') }}"></script>
<script src="{{ asset('assets/js/pustok.min.js') }}"></script>

<!-- Libraries CSS Files -->
<link href="{{ asset('assets/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{{-- <link href="css\app.css" rel="stylesheet"> --}}

<!-- for logo carousel -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

<!-- local css -->
<link href="{{ asset('assets/css/contact.css?556') }}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css?901') }}" rel="stylesheet">
<link href="{{ asset('assets/css/navbar-style.css?388') }}" rel="stylesheet">

<!-- fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preload"
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
<link rel="preload"
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
