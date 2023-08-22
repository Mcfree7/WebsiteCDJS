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
        <a href="{{ route('photo.create')}}" class="btn btn-dark mt-2">Nouvelle Photo</a>
    </div>

    <table class="table mt-2">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Titre</th>
                <th scope="col">Contenu</th>
                <th scope="col-1">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($photo as $photo )
            <tr>
                <td scope="col">{{$loop->index+1}}</td>
                <td  scope="col">{{ucwords(strtolower(substr($photo->Titre,0,25)))}}</td>
                <td  scope="col">{{ucwords(strtolower(substr($photo->Contenu,0,40)))}}...</td>
                <td scope="col">
                    <img src="photos/{{$photo->Image}}" alt="" srcset="" class="rounded-circle" width="60" height="60">
                </td>
                <td scope="col">
                    <a href="{{ route('photo.edit', $photo)}}"class="btn btn-info">Edit</a>

                    <form method="POST" class="d-inline" action="{{ route('photo.destroy', $photo)}}" >
                                  <!-- CSRF token -->
                                  @csrf
                                  <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                  @method("DELETE")
                                  <button type="submit"class="btn btn-danger">Delete</button>
                    </form> 
                    <form method="GET" class="d-inline" action="{{ route('photo.show', $photo)}}" enctype="multipart/form-data" >
                                
                                  <!-- CSRF token -->
                                  <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                <button type="submit"class="btn btn-secondary">show</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</center>
@endsection