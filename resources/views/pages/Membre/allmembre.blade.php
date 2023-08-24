@extends('Layout.app')
@section('content')
<section class="uni-banner">
<div class="container">
<div class="uni-banner-text-area">
<h1>Nos Membres</h1>
<ul>
<li><a href="{{route('acceuil')}}">Acceuil</a></li>
<li>Membres</li>
</ul>
</div>
</div>
</section>
<section class="team pt-70 pb-100">
<div class="container">
<div class="row justify-content-center">
@if(!empty($membres) && $membres->count())
@foreach ($membres as $membre )
    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
        <div class="team-card">
        <div class="team-card-img">
        <img src="membres/{{$membre->Image}}" alt="image">
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
        <h4>{{$membre->Nom}}</h4>
        <p>{{$membre->Poste}}</p>
        </div>
        </div>
    </div>
@endforeach
@else
        <center><h5>Aucune activité disponible pour cette catégorie</h5></center>
@endif   
</div>
<div class="row mt-30 ml-30">    
        {{ $membres->links() }} 
</div>
</div>
</section>
@endsection