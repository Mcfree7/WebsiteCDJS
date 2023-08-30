@extends('Layout.app')

@section('content')
<section class="uni-banner">
<div class="container">
<div class="uni-banner-text-area">
<h1>Details de l'activité</h1>
<ul>
<li><a href="{{ route('activity.all') }}">Activités</a></li>
<li>Détails Activité</li>
</ul>
</div>
</div>
</section>

<section class="blog-details ptb-100">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="blog-details-text-area details-text-area">
<img src="{{asset('activités/'.$activity->Image)}}" alt="image">
<div class="blog-date">
<ul>
<li><i class="fas fa-user"></i> publié par <a href="posted-by.html">Admin</a></li>
<li><i class="far fa-calendar-alt"></i> {{$activity->Date}}</li>
</ul>
</div>
<h3 class="mt-0">{{$activity->Titre}}</h3>
<p style="white-space: pre-wrap; word-wrap: break-word;">{{$activity->Contenu}}</p>
</div>
</div>

<div class="col-lg-4">
<div class="sidebar-area pl-20 pt-30">
<div class="sidebar-card sidebar-category mt-30">
<h3>Liens importants</h3>
<ul>
<li><a href="{{ route('activity.sport')}}"><i class="fas fa-angle-right"></i> Activités sportives</a></li>
<li><a href="{{ route('activity.jeunesse')}}"><i class="fas fa-angle-right"></i> activités jeunesse</a></li>
<li><a href="{{ route('activity.volontaire')}}"><i class="fas fa-angle-right"></i> Activités volontariat</a></li>
<li><a href="{{route('article.affiche')}}"><i class="fas fa-angle-right"></i> les articles</a></li>
</ul>
</div>
<div class="sidebar-card recent-news mt-30">
<h3>Activités récentes</h3>
@foreach ($act as $act)
<div class="recent-news-card">
<a href="{{ route('activity.detail', $act)}}"><img src="{{asset('activités/'.$act->Image)}}" alt="image" class="rounded-square"></a>
<h><b><a href="{{ route('activity.detail', $act)}}">{{ucwords(strtolower(substr($act->Titre,0,25)))}}...</a></b></h6>
<p>{{$act->Date}}</p>
</div>
@endforeach
</div>
</div>
</div>
</div>
</div>
</section>
@endsection