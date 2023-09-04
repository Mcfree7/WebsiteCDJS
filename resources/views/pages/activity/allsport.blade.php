@extends('Layout.app')
@section('content')
<section class="uni-banner">
<div class="container">
<div class="uni-banner-text-area">
<h1>Nos Activités sportives</h1>
<ul>
<li><a href="{{ route('acceuil') }}">Acceuil</a></li>
<li>Activités_sports</li>
</ul>
</div>
</div>
</section>


<section class="blog-details pt-70 pb-100">
<div class="container">
<div class="row ">
@if(!empty($activit) && $activit->count())
@foreach ($activit as $activity)
<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="blog-card">
    <div class="blog-card-img">
    <a href=""><img src="activités/{{$activity->Image}}" alt="image"></a>
    </div>
    <div class="service-card-text">
        <div class="blog-date mb-3">
        <ul>
        <li><i class="fas fa-user"></i>publié par<a href="posted-by.html">Admin</a></li>
        <li><i class="far fa-calendar-alt"></i> {{$activity->Date}} </li>
        <li> Statut : {{$activity->Status}} </li>
        </ul>
        </div>
        <h7><b><a href="{{ route('activity.detail', $activity->id)}}">{{ucwords(strtolower(substr($activity->Titre,0,30)))}}...</a></b></h7>
        <p>{{ucwords(strtolower(substr($activity->Contenu,0,35)))}}...</p>
        <a class="read-more-btn" href="{{ route('activity.detail', $activity->id)}}">lire plus</a>
    </div>
    </div>
</div>
@endforeach
@else
    <center><h5>Aucune activité disponible pour cette catégorie</h5></center>
@endif
</div>
<div class="row mt-30">{{ $activit->links() }}</div>
</div>
</section>
@endsection