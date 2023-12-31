@extends('Layout.app')

@section('content')
<section class="uni-banner">
<div class="container">
<div class="uni-banner-text-area">
<h1>Details de l'article</h1>
<ul>
<li><a href="{{ route('article.affiche') }}">Articles</a></li>
<li>Détails Article</li>
</ul>
</div>
</div>
</section>

<section class="blog-details ptb-100">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="blog-details-text-area details-text-area">
<img src="{{asset('articles/'.$article->Image)}}" alt="image">
<div class="blog-date">
<ul>
<li><i class="fas fa-user"></i> publié par <a href="posted-by.html">Admin</a></li>
<li><i class="far fa-calendar-alt"></i> {{$article->Date}}</li>
</ul>
</div>
<h3 class="mt-0">{{$article->Titre}}</h3>
<p style="white-space: pre-wrap; word-wrap: break-word;">{{($article->Contenu)}}</p>

</div>
</div>

<div class="col-lg-4">
<div class="sidebar-area pl-20 pt-30">
<div class="sidebar-card sidebar-category mt-10">
<h3>Liens importants</h3>
<ul>
<li><a href="{{ route('article.affiche') }}"><i class="fas fa-angle-right"></i> Les Articles</a></li>
<li><a href="{{route('offre.index2') }}"><i class="fas fa-angle-right"></i> Les Offres</a></li>
<li><a href="{{ route('activity.all') }}"><i class="fas fa-angle-right"></i> Les Activités</a></li>
<li><a href="{{ route('photo.affiche') }}"><i class="fas fa-angle-right"></i> Galérie</a></li>
</ul>
</div>
<div class="sidebar-card recent-news mt-30">
<h3>Articles récents</h3>
@foreach ($ar as $ar)
<div class="recent-news-card">
<a href="{{ route('article.detail', $ar->id)}}"><img src="{{asset('articles/'.$ar->Image)}}" alt="image" class="rounded-square"></a>
<h><b><a href="{{ route('article.detail', $ar->id)}}">{{ucwords(strtolower(substr($ar->Titre,0,25)))}}...</a></b></h6>
<p>{{$ar->Date}}</p>
</div>
@endforeach
</div>
</div>
</div>
</div>
</div>
</section>
@endsection