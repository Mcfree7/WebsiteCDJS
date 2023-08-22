@extends('Layout.app')

@section('content')

<section class="uni-banner">
<div class="container">
<div class="uni-banner-text-area">
<h1>Détail de photo</h1>
<ul>
<li><a href="#">Galérie</a></li>
<li>Details Photo </li>
</ul>
</div>
</div>
</section>
<section class="event-details ptb-100">
<div class="container">
<div class="details-img-area mb-30">
<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-30">
<img src="{{asset('photos/'.$photo->Image)}}" alt="image">
</div>
</div>
</div>
<div class="row">
<div class="col-lg-8">
<div class="event-details details-text-area">
<h3 class="mt-0">{{$photo->Titre}}</h3>
<p>{{$photo->Contenu}}</p>
</div>
</div>
<div class="col-lg-4">
<div class="sidebar-area pl-20 pt-30 events-details-sidebar">
<div class="sidebar-card event-info">
<h3>Petite description</h3>
<p>{{$photo->Categorie}}</p>
<div class="event-info-card mt-0">
<i class="far fa-calendar-alt"></i>
<h5>Date de prise</h5>
<span>{{$photo->Date}}</span>
</div>

<div class="event-info-card">
<i class="fas fa-map-marker-alt"></i>
<h5>Lieu de prise</h5>
<span>{{$photo->Lieu}}</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

@endsection