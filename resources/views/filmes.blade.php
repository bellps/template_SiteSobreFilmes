@extends('master')
@section('titulo', 'Filmes')

@section('header')

<div id="sec" class="view" style='background: url("https://i.imgur.com/DYXcXzL.jpg")no-repeat center center fixed;'>
    <div class="mask rgba-black-strong">
        <div class="container-fluid d-flex align-items-center justify-content-center h-100">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-md-12">
                    <!-- Heading -->
                    <h2 class="display-4 white-text">Filmes</h2>
                    <!-- Divider -->
                    <!-- Description -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('conteudo')
<div class="container cima">
  <br><br>
  <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="row">
      @foreach ($posts as $post)
        @if($post['categoria'] == "Filme" )
            <div class="col-lg-4 col-md-6 col-sm-6 text-center">
            <a data-toggle="modal" data-target= {{ $post['id'] }}>
                <div class="card bg-dark text-white cardM">
                <img src= {{ $post['imagem'] }} class="card-img cardCerto " alt="...">
                <div class="card-img-overlay" >
                    <div class="cardTittle">
                    <h5 class="card-title  text-center "> {{ $post['nome'] }} </h5>
                    </div>
                </div>
                </div>
            </a>
            </div>
            
                     
        @endif
    <!--/.Card-->
      @endforeach
    </div>
  </div>
</div>



@endsection
