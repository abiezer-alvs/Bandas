@extends('template')
@extends('layouts.app')

@section('titulo', 'BANDINHAS')

@section('pagina')
  <a class="nav-link" href="{{'dados'}}">INSERIR SUGESTÃO DE BANDA</a>
  @guest
    @if (Route::has('login'))
      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    @endif
    @if (Route::has('register'))
      <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastro') }}</a>  
    @endif
  @endguest
@endsection

@section('bandas')
<div class="container">
    <br>
    <h2>BANDAS</h2>
    <BR>
    <div class="card-deck">
      <div class="card bg-secondary">
        <img class="card-img-top" src="https://i.em.com.br/p2FuEPXIgfyQHSC4zDXXLflG6qQ=/790x/smart/imgsapp.em.com.br/app/noticia_127983242361/2022/03/14/1352317/os-quatro-integrantes-da-terno-rei-de-pe-com-as-maos-nos-bolsos-num-estacionamento-fotografados-com-lente-olho-de-peixe-_1_46655.jpg" alt="TERNO REI IMG" style="width:100%">
        <div class="card-body text-center">
          <p class="card-text">TERNO REI</p>
          <a href='aviso' class="btn btn-outline-dark">CONFERIR</a>
        </div>
      </div>
      <div class="card bg-secondary">
        <img class="card-img-top" src="https://www.tenhomaisdiscosqueamigos.com/wp-content/uploads/2019/12/bring-me-the-horizon-nova-696x464.jpg" alt="Card image" style="width:100%">
        <div class="card-body text-center">
          <p class="card-text">BRING ME THE HORIZON</p>
          <a href='aviso' class="btn btn-outline-dark">CONFERIR</a>
        </div>
      </div>
      <div class="card bg-secondary">
        <img class="card-img-top" src="https://www.spirit-of-metal.com/les%20goupes/A/Avenged%20Sevenfold/pics/97d8_2.jpg" alt="Card image" style="width:100%">
        <div class="card-body text-center">
          <p class="card-text">AVANGED SEVENFOLD</p>
          <a href='aviso' class="btn btn-outline-dark">CONFERIR</a>
        </div>
      </div>
      <div class="card bg-secondary">
        <img class="card-img-top" src="https://studiosol-a.akamaihd.net/tb/letras-blog/wp-content/uploads/2021/05/64f4e2e-arctic-monkeys-1024x683.jpg" alt="Card image" style="width:100%">
        <div class="card-body text-center">
          <p class="card-text">ARTIC MONKEYS</p>
          <a href='aviso' class="btn btn-outline-dark">CONFERIR</a>
        </div>
      </div>
    </div>
</div>
@endsection
