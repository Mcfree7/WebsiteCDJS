<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.dashboardpack.com/admindek-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jul 2023 11:35:45 GMT -->
<head>
<title>Panneau Administration</title>


<!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="colorlib" />

<link rel="icon" type="image/png" href="{{asset('assets/images/icon.png')}}">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{asset('files/bower_components/bootstrap/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('files/assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="{{asset('files/assets/icon/feather/css/feather.css')}}">

<link rel="stylesheet" type="{{asset('text/css" href="files/assets/css/font-awesome-n.min.css')}}">

<link rel="stylesheet" href="{{asset('files/bower_components/chartist/css/chartist.css')}}" type="text/css" media="all">
<!-- Boostrap link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


<link rel="stylesheet" type="text/css" href="{{asset('files/assets/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('files/assets/css/widget.css')}}">
</head>
<body>

<div class="loader-bg">
<div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">

<nav class="navbar header-navbar pcoded-header">
<div class="navbar-wrapper">
<div class="navbar-logo">
<a href="{{ route('acceuil') }}">
<img class="img-fluid" src="{{asset('files/assets/images/logo_CDJS.png')}}" alt="Theme-Logo" />
</a>
<a class="mobile-menu" id="mobile-collapse" href="#!">
<i class="feather icon-menu icon-toggle-right"></i>
</a>
<a class="mobile-options waves-effect waves-light">
<i class="feather icon-more-horizontal"></i>
</a>
</div>
<div class="navbar-container container-fluid">
<ul class="nav-left">
<li>
<a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
<i class="full-screen feather icon-maximize"></i>
</a>
</li>
</ul>
<ul class="nav-right">
<li class="user-profile header-notification">
<div class="dropdown-primary dropdown">
<div class="dropdown-toggle" data-toggle="dropdown">
<img src="{{asset('files/assets/images/avatar.jpg')}}" class="img-radius" alt="User-Profile-Image">
<span>{{Auth::user()->name}}</span>
<i class="feather icon-chevron-down"></i>
</div>
<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<li>
    <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="feather icon-log-out"></i>
                        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</li>
</ul>
</div>
</li>
</ul>
</div>
</div>
</nav>
<div class="pcoded-main-container">
<div class="pcoded-wrapper">

<nav class="pcoded-navbar">
    <div class="nav-list">
    <div class="pcoded-inner-navbar main-menu">
    <div class="pcoded-navigation-label">Navigation</div>
    <ul class="pcoded-item pcoded-left-item">
    <li class="pcoded-hasmenu active pcoded-trigger">
    <a href="javascript:void(0)" class="waves-effect waves-dark">
    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
    <span class="pcoded-mtext">Menu</span>
    </a>
    <ul class="pcoded-submenu">
    <li class="active">
    <a href="index.html" class="waves-effect waves-dark">
    <span class="pcoded-mtext">Default</span>
    </a>
    </li>
    </ul>
    </li>
    </ul>
    <div class="pcoded-navigation-label">Gestion des Publications</div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon">
            <i class="feather icon-clipboard"></i>
            </span>
            <span class="pcoded-mtext">Articles</span>
            </a>
            <ul class="pcoded-submenu">
            <li class=" ">
            <a href="{{ route('article.create') }}" class="waves-effect waves-dark">
            <span class="pcoded-mtext">Créer un nouveau</span>
            </a>
            </li>
            <li class=" ">
            <a href="{{ route('article.index') }}" class="waves-effect waves-dark">
            <span class="pcoded-mtext">Afficher</span>
            </a>
            </li>
            </ul>
        </li>
    </ul>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon">
            <i class="feather icon-clipboard"></i>
            </span>
            <span class="pcoded-mtext">Offres</span>
            </a>
            <ul class="pcoded-submenu">
            <li class=" ">
            <a href="#" class="waves-effect waves-dark">
            <span class="pcoded-mtext">Créer un nouveau</span>
            </a>
            </li>
            <li class=" ">
            <a href="#" class="waves-effect waves-dark">
            <span class="pcoded-mtext">Afficher</span>
            </a>
            </li>
            </ul>
        </li>
    </ul>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon">
            <i class="feather icon-clipboard"></i>
            </span>
            <span class="pcoded-mtext">News</span>
            </a>
            <ul class="pcoded-submenu">
            <li class=" ">
            <a href="#" class="waves-effect waves-dark">
            <span class="pcoded-mtext">Créer un nouveau</span>
            </a>
            </li>
            <li class=" ">
            <a href="#" class="waves-effect waves-dark">
            <span class="pcoded-mtext">Afficher</span>
            </a>
            </li>
            </ul>
        </li>
    </ul>
    <div class="pcoded-navigation-label">Gestion de la Galérie</div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon">
            <i class="feather icon-clipboard"></i>
            </span>
            <span class="pcoded-mtext">Photos</span>
            </a>
            <ul class="pcoded-submenu">
            <li class=" ">
            <a href="{{ route('photo.create') }}" class="waves-effect waves-dark">
            <span class="pcoded-mtext">Créer un nouveau</span>
            </a>
            </li>
            <li class=" ">
            <a href="{{ route('photo.index') }}" class="waves-effect waves-dark">
            <span class="pcoded-mtext">Afficher</span>
            </a>
            </li>
            </ul>
        </li>
    </ul>
    <div class="pcoded-navigation-label">Gestions des Activités</div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon">
            <i class="feather icon-clipboard"></i>
            </span>
            <span class="pcoded-mtext">Activités</span>
            </a>
            <ul class="pcoded-submenu">
            <li class=" ">
            <a href="{{ route('activite.create') }}" class="waves-effect waves-dark">
            <span class="pcoded-mtext">Créer un nouveau</span>
            </a>
            </li>
            <li class=" ">
            <a href="{{ route('activite.index') }}" class="waves-effect waves-dark">
            <span class="pcoded-mtext">Afficher</span>
            </a>
            </li>
            </ul>
        </li>
    </ul>
    <div class="pcoded-navigation-label">Gestion des Membres</div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon">
            <i class="feather icon-clipboard"></i>
            </span>
            <span class="pcoded-mtext">Membres</span>
            </a>
            <ul class="pcoded-submenu">
            <li class=" ">
            <a href="{{ route('membre.create') }}" class="waves-effect waves-dark">
            <span class="pcoded-mtext">Créer un nouveau</span>
            </a>
            </li>
            <li class=" ">
            <a href="{{ route('membre.index') }}" class="waves-effect waves-dark">
            <span class="pcoded-mtext">Afficher</span>
            </a>
            </li>
            </ul>
        </li>
    </ul>
</nav>
@yield('content')
</div>
</div>
</div>
</div>
</div>
<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>

<!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade
            <br/>to any of the following web browsers to access this website.
        </p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="./files/assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="./files/assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="./files/assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="./files/assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="./files/assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
<![endif]-->

<!-- boostrap link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="{{asset('files/bower_components/jquery/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/bower_components/popper.js/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('files/assets/pages/waves/js/waves.min.js')}}"></script>

<script type="text/javascript" src="{{asset('files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>

<script src="{{asset('files/assets/pages/chart/float/jquery.flot.js')}}"></script>
<script src="{{asset('files/assets/pages/chart/float/jquery.flot.categories.js')}}"></script>
<script src="{{asset('files/assets/pages/chart/float/curvedLines.js')}}"></script>
<script src="{{asset('files/assets/pages/chart/float/jquery.flot.tooltip.min.js')}}"></script>

<script src="{{asset('files/bower_components/chartist/js/chartist.js')}}"></script>

<script src="{{asset('files/assets/pages/widget/amchart/amcharts.j')}}s"></script>
<script src="{{asset('files/assets/pages/widget/amchart/serial.js')}}"></script>
<script src="{{asset('files/assets/pages/widget/amchart/light.js')}}"></script>

<script src="{{asset('files/assets/js/pcoded.min.js')}}"></script>
<script src="{{asset('files/assets/js/vertical/vertical-layout.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/assets/pages/dashboard/custom-dashboard.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/assets/js/script.min.js')}}"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jul 2023 11:36:36 GMT -->
</html>
