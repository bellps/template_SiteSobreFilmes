@extends('master')

@section('titulo', 'Tecflix')

@section('header')
<!--Mask-->
<div id="intro" class="view" style='background: url("https://cbsminnesota.files.wordpress.com/2015/10/thinkstockphotos-525210723.jpg?w=1500")no-repeat center center fixed;'>
    <div class="mask rgba-black-strong">
        <div class="container-fluid d-flex align-items-center justify-content-center h-100">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-md-12">
                    <!-- Heading -->
                    <h2 class="display-4 white-text">Pronto para uma noite mais divertida?</h2>
                    <!-- Divider -->
                    <hr class="hr-light">
                    <!-- Description -->
                    <h4 class="white-text my-4"><em>Leia sobre seus filmes e séries favoritos</em> </h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Mask-->
@endsection

@section('conteudo')
<h1>Novos desenhos</h1>
<div class="container">
  <br><br>
  <div class="col-md-12">
      <h1 class="text-center text-white">Adicionados Recentemente</h1>
      <div class="row">
      @foreach ($posts as $post)
          <div class="col-md-4 text-center">
            <div class="card bg-dark text-white">
              <img src= {{ $post['imagem'] }} class="card-img cardCerto " alt="...">
              <div class="card-img-overlay" >
                <div class="cardTittle">
                <h5 class="card-title  text-center "> {{ $post['nome'] }} </h5>
                </div>
              </div>
            </div>
          </div>
<!--/.Card-->
      @endforeach
    </div>
  </div>
</div>
@endsection
