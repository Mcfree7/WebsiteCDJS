@extends('Layout.app')
@section('content')
<section class="events pt-70 pb-100">
    <div class="container">
        <div class="row justify-content-center">
        @if(!empty($photos) && $photos->count())
        @foreach ($photos as $photo)
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="events-card">
        <img src="photos/{{$photo->Image}}" alt="image">
        <div class="events-card-text">
        <ul>
        <li>{{$photo->Categorie}}</li>
        <li>{{$photo->Date}}</li>
        </ul>
        <h4><a href="{{ route('photo.detail', $photo->id)}}">{{$photo->Titre}}</a></h4>
        <p><i class="fas fa-map-marker-alt"></i> <a href="#">{{$photo->Lieu}}</a></p>
        <a class="read-more-btn" href="{{ route('photo.detail', $photo->id)}}">lire plus</a>
        </div>
        </div>
        </div>
        @endforeach
        @else
        <center><h5>Aucune activité disponible pour cette catégorie</h5></center>
        @endif  
        </div>
        <div class="row mt-30 ml-30">    
        {{ $photos->links() }} 
        </div>
    </div>
</section>
@endsection