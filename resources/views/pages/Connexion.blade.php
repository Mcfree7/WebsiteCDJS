@extends('Layout.app')
@section('content')

<div class="login pt-70 pb-100">
<div class="container">
<div class="row">
<center>
<div class="col-lg-6 col-md-12 col-sm-12 col-12">
<div class="log-in-card">
<div class="default-section-title">
<h3>Connectez vous sur votre compte</h3>
</div>
<div class="login-form pr-20">
<form>
<div class="mb-3">
<input type="email" class="form-control" placeholder="Enter your email" aria-describedby="emailHelp" required>
</div>
<div class="mb-3">
<input type="password" class="form-control" placeholder="Password" required>
</div>
<div class="mb-3 form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">se rappelez de moi</label>
</div>
<button type="submit" class="default-button">Connexion<i class="fas fa-angle-right"></i></button>
</form>
</div>
</div>
</div>
</center>
</div>
</div>
</div>

@endsection