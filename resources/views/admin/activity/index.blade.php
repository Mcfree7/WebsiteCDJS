
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
        <a href="{{ route('activite.create') }}" class="btn btn-dark mt-2">Nouvelle activité</a>
    </div>

    <table class="table mt-2">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Titre</th>
                <th scope="col">Categories</th>
                <th scope="col-1">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @if (!empty($activit) && $activit->count())
            
            @foreach ($activit as $activity )
                <tr>
                    <td scope="col">{{$loop->index+1}}</td>
                    <td  scope="col">{{ucwords(strtolower(substr($activity->Titre,0,25)))}}</td>
                    <td  scope="col">{{$activity->Categorie}}</td>
                    <td scope="col">
                        <img src="activités/{{$activity->Image}}" alt="" srcset="" class="rounded-circle" width="60" height="60">
                    </td>
                    <td scope="col">
                        <a href="{{ route('activite.edit', $activity->id) }}" class="btn btn-info">Edit</a>

                        <form method="POST" class="d-inline" action="{{ route('activite.destroy', $activity->id)}}" >
                                    <!-- CSRF token -->
                                    @csrf
                                    <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                    @method("DELETE")
                                    <button type="submit"class="btn btn-danger">Delete</button>
                        </form> 
                        <form method="GET" class="d-inline" action="{{ route('activite.show', $activity->id)}}" enctype="multipart/form-data" >
                                    
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
    <div class="row mt-30">{{ $activit->links() }}</div>
</div>
</center>
@endsection