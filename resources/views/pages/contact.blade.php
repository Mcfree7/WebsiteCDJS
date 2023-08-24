@extends('Layout.app')
@section('content')
<section class="uni-banner">
<div class="container">
<div class="uni-banner-text-area">
<h1>Contactez Nous</h1>
<ul>
<li><a href="{{ route('acceuil')}}">Acceuil</a></li>
<li>Contactez Nous</li>
</ul>
</div>
</div>
</section>
<section class="contcat-card-area pt-70 pb-100">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
<div class="contact-card">
<i class="fas fa-map-marker-alt"></i>
<h5>Adresse</h5>
<p><a href="https://goo.gl/maps/KpjQNQafUV4XaFZB7" target="_blank">Avenue des Martyrs, Patte d´oie, Ouagadougou</a></p>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
<div class="contact-card">
<i class="fas fa-envelope"></i>
<h5>Adresse Email</h5>
<p><a href="mailto:cdjs@fasonet.bf?cc=cdjs@ecowas.int &subject= Mail from Website"><span>cdjs@fasonet.bf</span></a></p>
<p><a href="mailto:cdjs@ecowas.int?cc=cdjs@fasonet.bf &subject= Mail from Website"><span>cdjs@ecowas.int</span></a></p>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
<div class="contact-card">
<i class="fas fa-phone-alt"></i>
<h5>Telephone</h5>
<p><a href="tel:+22625375490">+226 25 37 54 90 </a></p>
<p><a href="tel:+22625375490">+226 25 37 54 90 </a></p>
</div>
</div>
</div>
</div>
</section>
<section class="contact-form-area pb-100">
<div class="container">
<div class="default-section-title default-section-title-middle">
<h3>Rejoignez-nous</h3>
<p>Passez dans nos locaux ou laissez-nous un email</p>
</div>
<div class="section-content">
<div class="row">
<div class="col-lg-4">
<div class="google-map pr-20">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3897.8652294568465!2d-1.5060047254627764!3d12.324856728728637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2ebd0f24343bb1%3A0x5147aa28291f7c9d!2sCentre%20de%20D%C3%A9veloppement%20de%20la%20Jeunesse%20et%20des%20Sports%20de%20la%20CEDEAO%20(CDJS%2FCEDEAO)!5e0!3m2!1sfr!2sbf!4v1692802199438!5m2!1sfr!2sbf" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="g-map">
</iframe>
</div>
</div>
<div class="col-lg-8">
<div class="contact-form-text-area">
<form id="contactForm">
<div class="row align-items-center">
<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
<input type="text" class="form-control" placeholder="Name" id="name" required data-error="Please enter your name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
<input type="email" name="email" class="form-control" placeholder="Email" id="email" required data-error="Please enter your Email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
<input type="text" name="phone_number" class="form-control" placeholder="Phone Number" id="phone_number" required data-error="Please enter your phone number">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
<input type="text" name="msg_subject" class="form-control" placeholder="Subject" id="msg_subject" required data-error="Please enter your subject">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12 col-sm-12 col-12">
<div class="form-group">
<textarea name="message" id="message" class="form-control" placeholder="Your Messages.." cols="30" rows="5" required data-error="Please enter your message"></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
</div>
</div>
<div class="col-md-12 col-sm-12 col-12">
<button class="default-button" type="submit"><span><a href="mailto:mailto:cdjs@ecowas.int?cc=cdjs@fasonet.bf &subject= Message venant du site web CDJS">Ecrire le message</a></span></button>
<div id="msgSubmit" class="h6 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection