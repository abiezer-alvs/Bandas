@extends('template')
@extends('layouts.app')

@section('titulo', 'TABELA DE SUGESTÕES')

@section('usuario')
  <h1>CONFIRA AS SUGESTÕES</h1>  
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
  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif
  @if(session('error'))
    <div class="alert alert-danger">
    {{ session('error') }}
    </div>
  @endif

  <br>
  <h2>SUGESTÕES</h2>
  <br>
  <table class="table table-striped">
        <thead>
      <tr>
        <th>BANDA</th>
        <th>MÚSICA</th>
        <th>COMENTÁRIO</th>
        <th>IMAGEM</th>
        <th>EDITAR</th>
        <th>APAGAR</th>
      </tr>
    </thead>
    <tbody>
      @foreach($bandas as $banda)
          <tr>
            <td> {{$banda['banda']}} </td>
            <td> {{$banda['musica']}} </td>
            <td> {{$banda['comentario']}} </td>
            <td>
                @if(isset($banda['imagem']))
                    <img src='{{asset("storage/{$banda->imagem}") }}' alt="{{$banda->imagem}}" height='50' width='65'> 
                @endif
            </td>
            <td><a href="edita/{{$banda['id']}}">
                <span class='material-icons'> &#9998 </span>
                </a>
            </td>
            <td><a href="apaga/{{$banda['id']}}" >
                <span class='material-icons'> &#10006 </span>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
   {!!$bandas->links()!!}

@endsection