@extends('Layout.app')

@section('content')

  <div class="container">
          <div class="row">
              <div style="white-space: pre-wrap; word-wrap: break-word;" class="col-lg-10 col-md-10">
                <hr class="mt-0"><h4 style="text-align: center;">{{$offre->Titre}}</h4>
                <hr class="mb-0"><p style="text-align: center;"><b>CONTENU DE L'OFFRE</b></p>
                <h4 style="text-align: center;"><a href="../fichier_pdf/{{$offre->Fichier}}" target="_blank"><img src="{{url('assets/images/pdf.png')}}" alt="" srcset="" class="rounded-square" width="70" height="70">Telecharger ici le document pdf</a></h4>
                <p>{{$offre->Contenu}}</p>
              </div>
          </div>
  </div>

@endsection