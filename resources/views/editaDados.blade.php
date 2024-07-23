@extends('template')
@extends('layouts.app')

@section('titulo', 'ENVIE SUA SUGESTÃO')

@section('usuario')
  <h1>Envie sua sugestão</h1>  
@endsection

@section('form')
  <br>
  @if(isset($errors) && count($errors) > 0)
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
      <p> {{$error}} </p>
      @endforeach
    </div>
  @endif
  

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

  <h2>Formulário</h2>
    <form method="POST" action="../atualiza/{{$bandas['id']}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="banda">Banda:</label>
          <input type="text" class="form-control" id="banda" placeholder="Digite o nome da banda" name="banda" value="{{$bandas['banda']}}" >
        </div>
        <div class="form-group">
        <label for="musica">Música:</label>
          <input type="text" class="form-control" id="musica" placeholder="Digite o nome da música" name="musica" value="{{$bandas['musica']}}">
        </div>
        <div class="form-group">
        <label for="comentario">Comentário:</label>
          <input type="textarea" class="form-control" id="comentario" placeholder="Faça um comentario" name="comentario" value="{{$bandas['comentario']}}">
        </div>
        <div>
        <label for="imagem">Imagem:</label>
          <input type="file" class="form-control" id="imagem" placeholder="Envie uma imagem da banda" name="imagem" >
        </div>
        <br>
        <input class="btn btn-primary" type="reset" value="LIMPAR">
        <input class="btn btn-primary" type="submit" name="submit" value="LISTAR">

    </form>
@endsection

@section('pagina')
  <a class="nav-link" href="{{'bandas'}}">CONFERIR AS BANDAS</a>
  @guest
    @if (Route::has('login'))
      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    @endif
    @if (Route::has('register'))
      <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastro') }}</a>  
    @endif
  @endguest
@endsection