@extends('admin.app')
@section('content')
<div class="pcoded-content">
        <div class="page-header card">
        <div class="row align-items-end">
        <div class="col-lg-8">
        <div class="page-header-title">
        <i class="feather icon-home bg-c-blue"></i>
        <div class="d-inline">
        <h5>Offres</h5>
        <span>Gestion des Offres </span>
        </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="page-header-breadcrumb">
        <ul class=" breadcrumb breadcrumb-title">
        <li class="breadcrumb-item">
        <a href="{{route('home')}}"><i class="feather icon-home"></i></a>
        </li>
        <li class="breadcrumb-item"><a href="{{route('home')}}">Offres</a> </li>
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
<div class="col-sm-12 ">
    <div class="card">
    <div class="card-header">
    <h5>Ajouter une offre</h5>
    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
    </div>
    <center>
    <div class="card-block col-sm-12 ">
        <form id="main" method="POST" action="{{ route('offre.store') }}" novalidate enctype="multipart/form-data">
            @csrf
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Reférence</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="reference" id="reference" placeholder=" Tapez la reference " value="{{ old('reference') }}">
            @if ($errors->has('reference'))
                <span class="text-danger"> Champs obligatoire</span>
            @endif
            <span class="messages"></span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Titre</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="titre" id="titre" placeholder=" Tapez le titre " value="{{ old('titre') }}">
            @if ($errors->has('titre'))
                <span class="text-danger"> Champs obligatoire</span>
            @endif
            <span class="messages"></span>
            </div>
        </div>
        <div class="form-group row">
        <label class="col-sm-2 col-form-label">Date de Parution</label>
        <div class="col-sm-10">
        <input type="date" class="form-control" name="dateP" id="dateP" placeholder="Text Input Validation" value="{{ old('dateP') }}">
        @if ($errors->has('dateP'))
            <span class="text-danger">Champs obligatoire </span>
        @endif
        <span class="messages"></span>
        </div>
        </div>     
        <div class="form-group row">
        <label class="col-sm-2 col-form-label">Date de Clôture</label>
        <div class="col-sm-10">
        <input type="date" class="form-control" name="dateC" id="dateC" placeholder="Text Input Validation" value="{{ old('dateC') }}">
        @if ($errors->has('dateC'))
            <span class="text-danger">Champs obligatoire </span>
        @endif
        <span class="messages"></span>
        </div>
        </div> 
        <div class="form-group row">
        <label class="col-sm-2 col-form-label">Contenu</label>
        <div class="col-sm-10">
        <textarea class="form-control" rows="8"  name="contenu" id="contenu" placeholder="contenu de l'offre" > {{ old('contenu') }}</textarea>
        @if ($errors->has('contenu'))
            <span class="text-danger"> Champs obligatoire</span>
        @endif
        <span class="messages"></span>
        </div>
        </div>
        <div class="form-group row">
        <label class="col-sm-2 col-form-label">Fichier pdf</label>
        <div class="col-sm-10">
        <input type="file" class="form-control" name="fichier" id="fichier" placeholder="Text Input Validation">
        @if ($errors->has('fichier'))
            <span class="text-danger"> Fichier obligatoirement pdf, taille- max 5Mb  </span>
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

@endsection