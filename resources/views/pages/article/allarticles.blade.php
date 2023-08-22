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


<section class="blog-details pt-70 pb-100">
<div class="container">
<div class="row ">
@foreach ($article as $article)
<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="blog-card">
    <div class="blog-card-img">
    <a href=""><img src="articles/{{$article->Image}}" alt="image"></a>
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
</div>
@endforeach
</div>
<div class="paginations mt-30">
<ul>
<li><a class="active" href="blog.html">1</a></li>
<li><a href="blog.html">2</a></li>
<li><a href="blog.html">3</a></li>
<li><a href="blog.html"><i class="fas fa-chevron-right"></i></a></li>
</ul>
</div>
</div>
</section>
@endsection