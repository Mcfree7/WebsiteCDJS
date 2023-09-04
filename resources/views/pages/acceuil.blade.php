@extends('Layout.app')
@section('content')

<section class="main-banner plr-100 bg-f9fbfe">

<div class="banner-social-icons">
<ul>
<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
<li><a href="#²&" target="_blank"><i class="fab fa-instagram"></i></a></li>
</ul>
</div>
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-lg-7">
<div class="banner-text-area banner-text-area-1">
<h6>A PROPOS DU CENTRE</h6>
<h1>CDJS-CEDEAO/EYSDC</h1>
<p>Le Centre de Developpement de la Jeunesse et du Sports de la CEDEAO.C'est une agence spécialisée du
    Communauté des États de l'Afrique de l'Ouest chargée de la jeunesse et des sports dans la sous-région ouest-africaine</p>
<a class="default-button" href="{{ route('propos')}} ">En savoir plus...</a>
</div>
</div>
<div class="col-lg-5">
<div class="banner-img-area-1">
<img src="assets/images/banner/banner_1.jpg" alt="image">
<a class="video-popup" href="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FCDJSCEDEAO%2Fvideos%2F1500674607130519%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"><i class="fas fa-play"></i></a>
</div>
</div>
</div>
</div>
</section>


<section class="services pt-100 pb-70"> 
    <div class="container">
    <div class="default-section-title default-section-title-middle">
    <h3>Nos Articles récents</h3>
    <p>Ce sont içi les articles que le centre publie à chaque evènement marquant, Dans un but d'informer les internautes des ses différentes réalisations en rapports avec la creation d'emploi pour la jeunesse par les formation professionnelles, les comptétions sportives, etc ...</p>
    </div>
    <!-- ici je dois faire un foreach pour afficher les differentes activité qu'on creera dans la base de données -->
    <div class="section-content">
    <div class="service-slider-area-1 owl-carousel">
    @foreach ($article as $article)
        <div class="service-card mlr-15 mb-30">
        <div class="service-card-img">
        <a href="{{ route('article.detail', $article)}}"><img src="articles/{{$article->Image}}" alt="image"></a>
        </div>
        <div class="service-card-text">
        <div class="blog-date mb-3">
        <ul>
        <li><i class="fas fa-user"></i>publié par<a href="posted-by.html">Admin</a></li>
        <li><i class="far fa-calendar-alt"></i> {{$article->Date}} </li>
        </ul>
        </div>
        <h7><b><a href="{{ route('article.detail', $article)}}">{{ucwords(strtolower(substr($article->Titre,0,30)))}}...</a></b></h7>
        <p>{{ucwords(strtolower(substr($article->Contenu,0,35)))}}...</p>
        <a class="read-more-btn" href="{{ route('article.detail', $article)}}">lire plus</a>
        </div>
        </div>
    @endforeach
    </div>
    </div>
    </div>
</section>


<section class="we-are pb-100">
    <div class="container">
    <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
    <div class="why-we-img">
    <img src="assets/images/why-we/w1.jpg" alt="image">
    </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
    <div class="why-we-text-area">
    <div class="default-section-title">
    <span>QUI SOMMES NOUS?</span>
    <h3>ECOWAS/YSDC-CEDEAO/CDJS </h3> <p> C'est une agence spécialisée du
    Communauté des États de l'Afrique de l'Ouest chargée de la jeunesse et des sports dans la sous-région ouest-africaine. Il s'agit d'un cadre institutionnel permanent au sein de la communauté à travers lequel les activités juvéniles et sportives peuvent être développées et promues afin d'assurer l'engagement des jeunes dans le processus d'intégration.</p>
    </div>
    <div class="why-we-text-list">
    <i class="flaticon-government-building"></i>
    <h4>Notre Mission:</h4>
    <p>Les Chefs d’Etats et de Gouvernement, en créant le Centre de Développement de la Jeunesse et des Sports de la CEDEAO, lui ont assigné comme mission principale:
Celle d’Initier, d’élaborer, de coordonner, de suivre, et de mettre en œuvre, des programmes relatifs au développement de la jeunesse au sein de la communauté</p>
    <ul>
    <li>Paix et Cohésion sociale.</li>
    <li>Unité Régionale</li>
    <li>Sports et Loisirs</li>
    <li>Formation et Leardership.</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
</section>


<section class="fun-facts fun-facts-1 pt-70 pb-100">
    <div class="container">
    <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
    <div class="fun-facts-card">
    <i class="flaticon-smart-city"></i>
    <h2><span class="odometer" data-count="12">00</span></h2>
    <p>Membres</p>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
    <div class="fun-facts-card">
    <i class="flaticon-location-1"></i>
    <h2>
    <span class="odometer" data-count="07">00</span>
    <span class="sign-icon"></span>
    </h2>
    <p>Départements</p>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
    <div class="fun-facts-card">
    <i class="flaticon-park-1"></i>
    <h2>
    <span class="odometer" data-count="{{date('Y')-2005}}">08</span>
    <span class="sign-icon">+</span>
    </h2>
    <p>Années d'existence</p>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
    <div class="fun-facts-card last-card">
    <i class="flaticon-award"></i>
    <h2>
    <span class="odometer" data-count="50">00</span>
    <span class="sign-icon">+</span>
    </h2>
    <p>Programmes Réussis</p>
    </div>
    </div>
    </div>
    </div>
</section>

<section class="blog ptb-100 bg-f9fbfe">
    <div class="container">
    <div class="default-section-title default-section-title-middle">
    <h3>Nos Principales Activités</h3>
    <p>Ce sont les principales activités menées au sein du centre de Developpement des Sports et de la  Jeunesse de la CEDEAO</p>
    </div>
    <div class="section-content">
        
    <div class="row justify-content-center">
  

    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="blog-card">
    <div class="blog-card-img">
    <a href="{{ route('activity.sport')}}"><img src="assets/images/blog/act_sport.jpg" alt="image"></a>
    </div>
    <div class="blog-card-text-area">
    <h6><b><a href="{{ route('activity.sport')}}">Les Activités sportives </a></b></h6>
    <p>Les Activités sportives ménées au sein ou en dehors du centre de developpement des sports et de la jeunesse</p>
    <a class="read-more-btn" href="{{ route('activity.sport')}}">afficher plus</a>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="blog-card">
    <div class="blog-card-img">
    <a href="{{ route('activity.volontaire')}}"><img src="assets/images/blog/act_volontariat.jpg" alt="image"></a>
    </div>
    <div class="blog-card-text-area">
    <h6><b><a href="{{ route('activity.volontaire')}}">Les Activités de Volontaires </a></b></h6>
    <p>Les Activités des volontaires montrent le devouement de la jeunesse dans le developpement de la sous-région</p>
    <a class="read-more-btn" href="{{ route('activity.volontaire')}}">Afficher plus</a>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="blog-card">
    <div class="blog-card-img">
    <a href="{{ route('activity.jeunesse')}}"><img src="assets/images/blog/act_jeunes.jpg" alt="image"></a>
    </div>
    <div class="blog-card-text-area">
    <h6><b><a href="{{ route('activity.jeunesse')}}">Les Activités de Jeunesse </a></b></h6>
    <p>Les Activités de Jeunesse sont les différentes activités mises en avant pour le developpement de la jeunesse</p>
    <a class="read-more-btn" href="{{ route('activity.jeunesse')}}">Afficher plus</a>
    </div>
    </div>
    </div>
        

    </div>
    </div>
    </div>
</section>

<section class="events ptb-100">
<div class="container">
<div class="default-section-title default-section-title-middle">
<h3>Photos-Galérie</h3>
<p>Ce sont les photos prises lors des grandes rencontres du centre, des photos de souvenirs très intéressantes </p>

<!-- A parametrer avec foreach pour afficher les photos avec references -->
</div>
<div class="section-content">
<div class="events-slider-area owl-carousel">
    @foreach ($photo as $photo)
        
    <div class="events-card">
        <img src="photos/{{$photo->Image}}" alt="image" >
        <div class="events-card-text">
        <ul>
        <li>{{$photo->Categorie}}</li>
        <li>{{$photo->Date}}</li>
        </ul>
        <h4><a href="{{ route('photo.detail', $photo)}}">{{ucwords(strtolower(substr($photo->Titre,0,40)))}}...</a></h4>
        <p><i class="fas fa-map-marker-alt"></i> <a href="#">{{$photo->Lieu}}</a></p>
        <a class="read-more-btn" href="{{ route('photo.detail', $photo)}}">lire plus</a>
        </div>
    </div>    
    @endforeach

</div>
</div>
</div>
</section>


<section class="services pt-100 pb-70">
    <div class="container">
        <div class="default-section-title default-section-title-middle">
        <h3>Notre Capital Humain</h3>
        <p>C'est l'ensemble de ce corps personnel qui constitue le coeur du CDJS, eux qui travaillent en harmonie et dans un environnement favorable au travaul d'équipe pour Hausser le nom du Centre dans la sous région et même partout dans le monde </p>
        </div>
        <!-- ici je dois faire un foreach pour afficher les differentes activité qu'on creera dans la base de données -->
        <div class="section-content">
        <div class="service-slider-area-1 owl-carousel">
        @foreach ($membre as $membre )
        <div class="service-card mlr-15 mb-30">
            <div class="team-card">
                <div class="team-card-img">
                <img src="membres/{{$membre->Image}}" class="d-block w-100" alt="...">
                    <div class="team-social-icons">
                    <ul>
                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    </div>
                </div>
                <div class="team-card-text">
                <h5>{{$membre->Nom}}</h5>
                <p>{{$membre->Poste}}</p>
                </div>
            </div>
        </div>
       @endforeach
        </div>
        </div>
    </div>
</section>

@endsection
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v17.0" nonce="a8S87tSm"></script>