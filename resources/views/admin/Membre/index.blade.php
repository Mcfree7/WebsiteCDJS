
@extends('admin.app')
@section('content')


<center>
@if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
        </div>
@endif
<div class="container col-md-9 p-5 mr-5 ">
    <div class="text-right">
        <a href="{{ route('membre.create')}}" class="btn btn-dark mt-2">Nouveau membre</a>
    </div>

    <table class="table mt-2">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nom & Prenom(s)</th>
                <th scope="col">Poste Occupé</th>
                <!-- <th style="width:5px; word-wrap:break-word" scope="col">Contenu</th> -->
                <th scope="col-1">Profil</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($membre as $membre )
            <tr>
                <td scope="col">{{$loop->index+1}}</td>
                <td  scope="col">{{$membre->Nom}}</td>
                <td  scope="col">{{$membre->Poste}}</td>
                
                <td scope="col">
                    <img src="membres/{{$membre->Image}}" alt="" srcset="" class="rounded-circle" width="60" height="60">
                </td>
                <td scope="col">
                    <a href="{{ route('membre.edit', $membre)}}"class="btn btn-info">Edit</a>

                    <form method="POST" class="d-inline" action="{{ route('membre.destroy', $membre)}}" >
                                  <!-- CSRF token -->
                                  @csrf
                                  <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                  @method("DELETE")
                                  <button type="submit"class="btn btn-danger">Delete</button>
                    </form> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</center>
@endsection