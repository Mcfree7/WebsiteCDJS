@extends('admin.app')
@section('content')
<div class="pcoded-content">
        <div class="page-header card">
        <div class="row align-items-end">
        <div class="col-lg-8">
        <div class="page-header-title">
        <i class="feather icon-home bg-c-blue"></i>
        <div class="d-inline">
        <h5>Activités</h5>
        <span>Gestion des Activités </span>
        </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="page-header-breadcrumb">
        <ul class=" breadcrumb breadcrumb-title">
        <li class="breadcrumb-item">
        <a href="{{route('home')}}"><i class="feather icon-home"></i></a>
        </li>
        <li class="breadcrumb-item"><a href="{{route('home')}}">Activités</a> </li>
        </ul>
        </div>
        </div>
        </div>
        </div>
    </div>
    <div class="pcoded-content">



<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">

<div class="page-body">
<div class="row">
<center>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
        </div>
    @endif
<div class="col-sm-10">

    <div class="card">
    <div class="card-header">
    <h5>Modification d'une activité</h5>
    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
    <div class="text-right">
        <a href="{{ route('activite.index')}}" class="btn btn-dark mt-2">Afficher activités</a>
    </div>
    </div>
    <center>
    <div class="card-block  ">
        <form id="main" method="POST" action="{{ route('activite.update', $activity) }}" novalidate enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group row">
        <label class="col-sm-2 col-form-label">Titre</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="titre" id="titre" placeholder=" Tapez le titre " value="{{ old('titre',$activity->Titre) }}">
        @if ($errors->has('titre'))
            <span class="text-danger"> Champs obligatoire</span>
        @endif
        <span class="messages"></span>
        </div>
        </div>
        <div class="form-group row">
        <label class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
        <input type="date" class="form-control" name="date" id="date" placeholder="Text Input Validation" value="{{ old('date',$activity->Date) }}">
        @if ($errors->has('date'))
            <span class="text-danger">Champs obligatoire </span>
        @endif
        <span class="messages"></span>
        </div>
        </div> 
        <div class="form-group row">
        <label class="col-sm-2 col-form-label">Contenu</label>
        <div class="col-sm-10">
        <textarea class="form-control" rows="5"  name="contenu" id="contenu" placeholder="contenu de l'articles" >{{ old('contenu',$activity->Contenu) }}</textarea>
        @if ($errors->has('contenu'))
            <span class="text-danger"> Champs obligatoire</span>
        @endif
        <span class="messages"></span>
        </div>
        </div>
        <div class="form-group row">
        <label class="col-sm-2 col-form-label">Categorie</label>
        <div class="col-sm-10">
        <select class="form-control" rows="5"  name="categorie" id="categorie" placeholder="categorie " >
            <option value="">selectionner</option>
            <option value="Sport" {{ $activity->Categorie =="Sport" ? 'selected': ''}}>Sport</option>
            <option value="Jeunesse" {{ $activity->Categorie =="Jeunesse" ? 'selected': ''}}>Jeunesse</option>
            <option value="Volontariat" {{ $activity->Categorie =="Volontariat" ? 'selected': ''}}>Volontariat</option>
            {{ old('categorie') }}
        </select>
        @if ($errors->has('categorie'))
            <span class="text-danger"> Champs obligatoire</span>
        @endif
        <span class="messages"></span>
        </div>
        </div>
        <div class="form-group row">
        <label class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
        <select class="form-control" rows="5"  name="status" id="status" placeholder="Status " >
            <option value="">selectionner</option>
            <option value="A venir"{{ $activity->Status =="A venir" ? 'selected': ''}}>A venir</option>
            <option value="Realisée"{{ $activity->Status =="Realisée" ? 'selected': ''}}>Realisée</option>
            {{ old('status') }}
        </select>
        @if ($errors->has('status'))
            <span class="text-danger"> Champs obligatoire</span>
        @endif
        <span class="messages"></span>
        </div>
        </div>
        <div class="form-group row">
        <label class="col-sm-2 col-form-label">Photo</label>
        <div class="col-sm-10">
        <input type="file" class="form-control" name="image" id="image" placeholder="Text Input Validation">
        @if ($errors->has('image'))
            <span class="text-danger"> la taille de l'image n'est pas valide, obligatoire(900x600)  </span>
        @endif
        <span class="messages"></span>
        </div>
        </div>
    </div>
    </center>
    <div class="form-group row">
        <label class="col-sm-2"></label>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-secondary mb-2">Modifier</button>
        </div>
    </div>
</form>
</div>
</div>
</center>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
@endsection