
@extends('admin.app')
@section('content')

    <center>
    @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
            </div>
    @endif
    <div class="container col-md-9 p-5 mr-5 ">
    <div class="card table-card">
        <div class="card-header">
            <h5>Gestion des offres</h5>
            <div class="card-header-right">
            <ul class="list-unstyled card-option">
            <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
            <li><i class="feather icon-maximize full-card"></i></li>
            <li><i class="feather icon-minus minimize-card"></i></li>
            <li><i class="feather icon-refresh-cw reload-card"></i></li>
            <li><i class="feather icon-trash close-card"></i></li>
            <li><i class="feather icon-chevron-left open-card-option"></i></li>
            </ul>
            </div>
        </div>
        <div class="text-right m-4">
            <a href="{{ route('offre.create') }}" class="btn btn-dark mt-2">Nouvelle offre</a>
        </div>
        <div class="card-block p-b-0">
        <div class="table-responsive">
        <table class="table table-hover m-b-0 m-r-4" >
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Titre</th>
                    <th style="width:40%" scope="col-1">fichier</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @if (!empty($offres) && $offres->count())
                
                @foreach ($offres as $offre )
                    <tr>
                        <td scope="col">{{$loop->index+1}}</td>
                        <td  scope="col">{{ucwords(strtolower(substr($offre->Titre,0,50)))}}....</td>
                        <td scope="col">
                            <a href="fichier_pdf/{{$offre->Fichier}}"><img src="assets/images/pdf.png" alt="" srcset="" class="rounded-square" width="60" height="60"></a>
                        </td>
                        <td scope="col">
                            <a href="{{ route('offre.edit', $offre->id) }}" class="btn btn-info">Edit</a>

                            <form method="POST" class="d-inline" action="{{ route('offre.destroy', $offre->id)}}" >
                                        <!-- CSRF token -->
                                        @csrf
                                        <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                        @method("DELETE")
                                        <button type="submit"class="btn btn-danger">Delete</button>
                            </form> 
                            <form method="GET" class="d-inline" action="{{ route('offre.show', $offre->id)}}" enctype="multipart/form-data" >
                                        
                                        <!-- CSRF token -->
                                        <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                        <button type="submit"class="btn btn-secondary">show</button>
                            </form>
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
        </div>
        </div>
        <div class="row mt-30">{{ $offres->links() }}</div>
    </div>
    </div>
    </center>
    
</div>

@endsection