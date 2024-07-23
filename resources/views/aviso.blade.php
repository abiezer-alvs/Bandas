@extends('template')
@extends('layouts.app')

@section('titulo', 'AVISO')

@section('usuario')
  <h1>EM BREVE</h1>  
@endsection

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
  @parent
    <a class="nav-link" href="bandas">CONFIRA AS BANDAS</a>
@endsection

@section('conteudos')
    <br>
    <div class="alert alert-warning">
        <strong>AVISO!</strong> Em breve será disponibilizado todas as informações da banda. Por favor, aguarde!
    </div>
@endsection