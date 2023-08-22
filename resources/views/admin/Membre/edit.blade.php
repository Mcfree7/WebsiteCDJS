@extends('admin.app')
@section('content')
<div class="pcoded-content">
        <div class="page-header card">
        <div class="row align-items-end">
        <div class="col-lg-8">
        <div class="page-header-title">
        <i class="feather icon-home bg-c-blue"></i>
        <div class="d-inline">
        <h5>Membres </h5>
        <span>Gestion des Membres </span>
        </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="page-header-breadcrumb">
        <ul class=" breadcrumb breadcrumb-title">
        <li class="breadcrumb-item">
        <a href="index.html"><i class="feather icon-home"></i></a>
        </li>
        <li class="breadcrumb-item"><a href="#">Membres</a> </li>
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
    <div class="text-right">
        <a href="{{ route('membre.index')}}" class="btn btn-primary mt-2">Afficher</a>
    </div>
    <h5>Modifier les infos d'un membre</h5>
    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
    </div>
    <center>
    <div class="card-block  ">
    <form id="main" method="post" action="{{ route('membre.update', $membre) }}" novalidate enctype="multipart/form-data">
        @method('PUT')
        @csrf
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Nom et Prénom(s)</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="nom" id="nom" placeholder=" Nom et Prénom(s) " value="{{ old('nom',$membre->Nom) }}">
    @if ($errors->has('nom'))
        <span class="text-danger"> Champs obligatoire</span>
    @endif
    <span class="messages"></span>
    </div>
    </div>
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Poste Occupé</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="poste" id="poste" placeholder=" Poste d'occupé " value="{{ old('poste',$membre->Poste) }}">
    @if ($errors->has('poste'))
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
        <span class="text-danger"> la taille de l'image n'est pas valide, obligatoire(600x600)  </span>
    @endif
    <span class="messages"></span>
    </div>
    </div>
    </div>
    </center>
    <div class="form-group row">
    <label class="col-sm-2"></label>
    <div class="col-sm-2">
    <button type="submit" class="btn btn-secondary mb-2">Ajouter</button>
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