
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
        <a href="{{ route('article.create')}}" class="btn btn-dark mt-2">Nouveau article</a>
    </div>

    <table class="table mt-2">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Titre</th>
                <th scope="col">Date</th>
                <th scope="col">Contenu</th>
                <!-- <th style="width:5px; word-wrap:break-word" scope="col">Contenu</th> -->
                <th scope="col-1">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @if (!empty($articles) && $articles->count())
            @foreach ($articles as $article )
            <tr>
                <td scope="col">{{$loop->index+1}}</td>
                <td  scope="col">{{ucwords(strtolower(substr($article->Titre,0,25)))}}</td>
                <td  scope="col">{{$article->Date}}</td>
                <td  scope="col">{{ucwords(strtolower(substr($article->Contenu,0,40)))}}...</td>
                <!-- <td width="15px" height="50px" align="left" wordwrap="break-word">{{$article->Contenu}}</td> -->
                <td scope="col">
                    <img src="articles/{{$article->Image}}" alt="" srcset="" class="rounded-circle" width="60" height="60">
                </td>
                <td scope="col">
                    <a href="{{ route('article.edit', $article->id)}}"class="btn btn-info">Edit</a>

                    <form method="POST" class="d-inline" action="{{ route('article.destroy', $article->id)}}" >
                                  <!-- CSRF token -->
                                  @csrf
                                  <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                  @method("DELETE")
                                  <button type="submit"class="btn btn-danger">Delete</button>
                    </form> 
                    <form method="GET" class="d-inline" action="{{ route('article.show', $article->id)}}" enctype="multipart/form-data" >
                                
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
    <div class="row">{{ $articles->links() }}</div>
</div>
</center>
@endsection