@extends('Layout.app')
@section('content')
<section class="uni-banner">
<div class="container">
<div class="uni-banner-text-area">
<h1>Nos Articles</h1>
<ul>
<li><a href="{{ route('acceuil') }}">Acceuil</a></li>
<li>Articles</li>
</ul>
</div>
</div>
</section>


<section class="service pt-70 pb-100">
    <div class="container">
    <div class="row justify-content-center">
    @if(!empty($articles) && $articles->count()) 
    @foreach ($articles as $article)
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="service-card">
    <div class="service-card-img">
    <a href="service-detaisl.html"><img src="articles/{{$article->Image}}" alt="image"></a>
    </div>
    <div class="service-card-text">
    <div class="blog-date mb-3">
            <ul>
            <li><i class="fas fa-user"></i>publié par<a href="posted-by.html">Admin</a></li>
            <li><i class="far fa-calendar-alt"></i> {{$article->Date}} </li>
            </ul>
    </div>
        <h7><b><a href="{{ route('article.detail', $article->id)}}">{{ucwords(strtolower(substr($article->Titre,0,30)))}}...</a></b></h7>
        <p>{{ucwords(strtolower(substr($article->Contenu,0,35)))}}...</p>
        <a class="read-more-btn" href="{{ route('article.detail', $article->id)}}">lire plus</a>
    </div>
    </div>
    </div>
    @endforeach
    @else
        <center><h5>Aucune activité disponible pour cette catégorie</h5></center>
    @endif
    </div>
    <div class="row mt-30 ml-30">    
        {{ $articles->links() }} 
    </div>
    </div>
</section>
@endsection