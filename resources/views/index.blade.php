@extends('base')
@section('style')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('content')
<h3 class="text-1">Bienvenido al espacio Momentum</h3>
<p class="descripcion text-1" >somos una empresa de Coworking y aprendisaje que se encarga de que encuentres el mejor espacio para ti y que aprendas siempre algo que necesites</p>
<h3 class="text-2">Aprovecha los espacios Coworking Momentum</h3>
<p class="descripcion text-2" >encuentra un espacio que se adapte a tus necesidades en nuestros <a href="#">espacios momentum</a></p>
<h3 class="text-3">aprende y mejora con los talleres momentum</h3>
<p class="descripcion text-3">aprenda a su ritmo con los mejores <a href="#">talleres momentum</a></p>
<h3 class="text-4">visita las oficinas momentum tu mismo en:<a href="https://goo.gl/maps/1H6YwcSDVobVzhFB9"> caracas. chacao, Av blandin, torre multinacional de seguros, piso 3</a></h3>
<h3 class="text-5">tienes algun problema? contacta con nosotros</h3>
<p class="descripcion text-5" > puede contactarnos al *****</p>

<div id="image-track" data-mouse-down-at="0" data-prev-percentage="0">
  <div class="image-container">
    <img class="image" id="imagen-1" src="{{ asset('img/foto.jpg') }}" draggable="false" />
    <p class=subtext>¿Que somos?</p>
  </div>
  <div class="image-container" >
    <img class="image" id="imagen-2" src="https://plus.unsplash.com/premium_photo-1661281350976-59b9514e5364?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80" draggable="false" />
    <p class=subtext>Espacios</p>
  </div>
  <div class="image-container" >
    <img class="image" id="imagen-3" src="https://images.unsplash.com/photo-1456324504439-367cee3b3c32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" draggable="false" />
    <p class=subtext>Talleres</p>
  </div>
  <div class="image-container" >
    <img class="image" id="imagen-4" src="https://lh3.googleusercontent.com/p/AF1QipPOZq3r4L-DdtODg9MiUx3Ur4K8T7PyQ58cBRfD=s680-w680-h510" draggable="false" />
    <p class=subtext>Visitanos</p>
  </div>
  <div class="image-container" >
    <img class="image" id="imagen-5" src="https://images.unsplash.com/photo-1534073828943-f801091bb18c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" draggable="false" />
    <p class=subtext>Atencion al Cliente</p>
  </div>
</div>
<script type="module" src="{{ asset('js/try.js') }}"></script>
@endsection