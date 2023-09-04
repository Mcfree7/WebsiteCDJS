<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from templates.hibootstrap.com/medzo/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Mar 2023 12:35:47 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/fontawsome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/nice-select.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
<title>Acceuil_CDJS</title>
<!-- le lien pour l'icon du site en bas -->
<link rel="icon" type="image/png" href="{{asset('assets/images/icon.png')}}">
</head>
<body>

<section class="topbar plr-100 bg-black">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-lg-6 col-md-12 col-sm-12 col-12">
<div class="topbar-left-area">
<ul>
<li><a href="mailto:cdjs@ecowas.int?cc=cdjs@fasonet.bf &subject= Message venant du site web CDJS "><i class="fas fa-envelope"></i> <span class="__cf_email__" data-cfemail="bccfc9ccccd3cec8fcd1d9d8c6d392dfd3d1">cdjs@ecowas.int</span></a></li>
<li><a href="https://goo.gl/maps/KpjQNQafUV4XaFZB7"><i class="fas fa-map-marker-alt"></i> 01 BP 5559 Ouagadougou 01- Burkina Faso</a></li>
</ul>
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 col-12">
<div class="topbar-right-area">
<ul>
@guest
    @if (Route::has('login'))
    <li><a href="{{ route('login') }}"><i class="fas fa-user"></i> Connexion</a></li> 
    @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" >
                                    {{ Auth::user()->name }} 
            </a>

         <div class="dropdown-menu dropdown-menu-end" >
            <a class="dropdown-item" target="_blank" href="{{ route('home') }}">
            {{ __('Admin') }}   
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                                        {{ __('Deconnection') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
            </form>
        </div>
        </li>
@endguest

<div class="language-select option-select-area">
<i class="fas fa-globe"></i>
<select>
<option value="1">Français</option>
<option value="1">English</option>
<option value="3">Portuguès</option>
</select>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</section>


<div class="navbar-area">

<div class="main-responsive-nav">
<div class="container-fluid plr-100">
<div class="mobile-nav">
<a href="{{ route('acceuil') }}" class="logo"><img src="{{asset('assets/images/icon.png')}}" alt="logo" /></a>
<!-- <ul class="menu-sidebar menu-small-device">
<li><button class="popup-button"><i class="fas fa-search"></i></button></li>
<li><a class="default-button" href="contact.html">Get A Quote <i class="fas fa-angle-right"></i></a></li>
</ul> -->
 </div>
</div>
</div>

<div class="main-nav plr-100">
<div class="container-fluid">
<nav class="navbar navbar-expand-md navbar-light">
<a class="navbar-brand" href="{{ route('acceuil') }}">
<img src="{{asset('assets/images/logoO2.png')}}" alt="logo" />
</a>
<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
<ul class="navbar-nav">
<li class="nav-item ">
<a href="{{ route('acceuil')}}" class="nav-link  active">Acceuil</a>
</li>
<li class="nav-item">
<a href="{{ route('propos')}}" class="nav-link ">A propos</a>
</li>
<li class="nav-item">
<a href="{{ route('activity.all') }}" class="nav-link dropdown-toggle">Activités</a>
<ul class="dropdown-menu">
<li class="nav-item"><a href="{{ route('activity.sport')}}" class="nav-link">sport</a></li>
<li class="nav-item"><a href="{{ route('activity.jeunesse')}}" class="nav-link">jeunesse</a></li>
<li class="nav-item"><a href="{{ route('activity.volontaire')}}" class="nav-link">volontaire</a></li>
<li class="nav-item"><a href="#" class="nav-link">Autres</a></li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link dropdown-toggle">Publications</a>
<ul class="dropdown-menu">
    <li class="nav-item"><a href="{{ route('article.affiche') }}" class="nav-link">Articles</a></li>
    <li class="nav-item"><a href="{{ route('photo.affiche') }}" class="nav-link">Galérie</a></li>
    <li class="nav-item"><a href="{{route('offre.index2') }}" class="nav-link">offres</a></li>
</ul>
</li>
<li class="nav-item">
<a href="{{ route('membre.affiche') }}" class="nav-link ">Membres</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link dropdown-toggle">Filliales</a>
<ul class="dropdown-menu">
<li class="nav-item"><a href="https://ecowasvolunteers.com/" target="_blank" class="nav-link">PVC</a></li>
<li class="nav-item"><a href="#" class="nav-link" target="_blank">PVOC</a></li>
<li class="nav-item"><a href="#" class="nav-link" target="_blank">CGRE</a></li>
<li class="nav-item"><a href="#" class="nav-link" target="_blank">REPRESENTATION</a></li>
</ul>
</li>
</ul>
<ul>
<li></li>
<li></li>
<li></li>
<li><a class="default-button" href="{{ route('contact') }}">Contactez-nous</a></li>
</ul>
</div>
</nav>
</div>
</div>
</div>

@yield('content')

<section class="footer">
<div class="container">
<div class="footer-content ptb-100">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="footer-logo-area">
<a href="{{ route('acceuil') }}"><img src="{{asset('assets/images/logoO2.png')}}" alt="image"></a>
<p>Le Centre de Developpement de la Jeunesse et du Sports de la CEDEAO.C'est une agence spécialisée du
    Communauté des États de l'Afrique de l'Ouest chargée de la jeunesse et des sports dans la sous-région ouest-africaine</p>
<div class="footer-social-area">
<ul>
<li><span>Suivez nous: </span></li>
<li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
<li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="footer-links footer-contact">
<h3>Contacts</h3>
<div class="footer-contact-card">
<i class="fas fa-map-marker-alt"></i>
<h5>Adresse </h5>
<p><a href="https://goo.gl/maps/KpjQNQafUV4XaFZB7" target="_blank">Avenue des Martyrs, Patte d´oie, Ouagadougou</a></p>
</div>
<div class="footer-contact-card">
<i class="fas fa-envelope"></i>
<h5>Email: </h5>
<p><a href="mailto:mailto:cdjs@ecowas.int?cc=cdjs@fasonet.bf &subject= Message venant du site web CDJS"><span >cdjs@fasonet.bf</span></a></p>
</div>
<div class="footer-contact-card">
<i class="fas fa-phone-alt"></i>
<h5>Téléphone</h5>
<p><a href="tel:+22625375490">+226 25 37 54 90</a></p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="footer-links footer-quick-links">
<h3>Liens utiles</h3>
<ul>
<li><i class="fas fa-angle-right"></i> <a href="{{route('propos')}}">A propos</a> </li>
<li><i class="fas fa-angle-right"></i> <a href="{{route('article.affiche')}}">Nos articles</a></li>
<li><i class="fas fa-angle-right"></i> <a href="{{route('photo.affiche')}}">Galérie</a></li>
<li><i class="fas fa-angle-right"></i> <a href="{{route('activity.all')}}">Activités</a></li>
<li><i class="fas fa-angle-right"></i> <a href="{{route('membre.affiche')}}">Membres</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
<div class="footer-links footer-newsletter">
<h3>Message</h3>
<p>Laissez nous vos suggestions et critiques!</p>
<form href="mailto:cdjs@ecowas.int?cc=cdjs@fasonet.bf &subject= Mail from Website" class="newsletter-form" data-toggle="validator">
<button class="default-button news-btn" type="submit"><a href="mailto:mailto:cdjs@ecowas.int?cc=cdjs@fasonet.bf &subject= Message venant du site web CDJS">Ecrire le message</a></button>
<div id="validator-newsletter" class="form-result"></div>
</form>
</div>
</div>
</div>
</div>
<div class="copyright">
<p>© <strong>FreeCode</strong> All Rights Reserved By <a target="_blank" href="#">CDJS-ECOWAS</a></p>
</div>
</div>
</section>


<div class="popup">
<div class="popup-content">
<button class="close-btn" id="popup-close"><i class="fas fa-times"></i></button>
<form>
<div class="input-group search-box">
<input type="text" class="form-control" placeholder="Search">
<button class="btn" type="submit"><i class="fas fa-search"></i></button>
</div>
</form>
</div>
</div>

<div class="go-top"><i class="fas fa-chevron-up"></i></div>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/meanmenu.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/TweenMax.js')}}"></script>
<script src="{{asset('assets/js/nice-select.min.js')}}"></script>
<script src="{{asset('assets/js/form-validator.min.js')}}"></script>
<script src="{{asset('assets/js/contact-form-script.js')}}"></script>
<script src="{{asset('assets/js/ajaxchimp.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel2.thumbs.min.js')}}"></script>
<script src="{{asset('assets/js/appear.min.js')}}"></script>
<script src="{{asset('assets/js/odometer.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/medzo/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Mar 2023 12:37:18 GMT -->
</html>