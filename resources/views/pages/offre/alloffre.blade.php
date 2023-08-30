@extends('Layout.app')

@section('content')
<center>
<div class="mt-4 mb-5">
    <h4>Les Offres du Centre de developement des Sports et de la Jeunesse</h4>
</div>
</center>
<div class="container col-lg-10 col-md-10">
<table class="table p-3">
  <thead>
    <tr>
      <th scope="col">#No</th>
      <th scope="col">Titre</th>
      <th scope="col">Document pdf</th>
    </tr>
  </thead>
  <tbody>
    @if (!empty($offres) && $offres->count())
    @foreach ($offres as $offre )
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td><p><a href="{{route('offre.detail', $offre->id)}}">{{ucwords(strtolower(substr($offre->Titre,0,100)))}}</a></p></td>
      <td><a href="fichier_pdf/{{$offre->Fichier}}" target="_blank"><img src="assets/images/pdf.png" alt="" srcset="" class="rounded-square" width="70" height="70"></a>
    </td>
    </tr>
    @endforeach
    @else
        <tr>
            <td colspan="6">liste vide. </td>
        </tr>
    @endif
  </tbody>
</table>
<div class="row mt-30">{{ $offres->links() }}</div>
</div>
@endsection