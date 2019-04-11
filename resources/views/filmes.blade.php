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
            <!--Card-->
            <a data-toggle="modal" data-target= {{ "#modal".$post['id'] }} href= {{ "modal".$post['id'] }}>
                <div class="card bg-dark text-white cardM" id="card">
                <img src= {{ $post['imagem'] }} class="card-img cardCerto " alt="...">
                <div class="card-img-overlay" >
                    <div class="cardTittle">
                        <h5 class="card-title  text-center "> {{ $post['nome'] }} </h5>
                    </div>
                </div>
                </div>
            </a>
        </div>

            <!-- Modal -->
            <div class="modal fade" id= {{ "modal".$post['id'] }} tabindex="-1" role="dialog" aria-labelledby="Description" aria-hidden="true">
                <div class="modal-dialog  modal-lg bg-dark" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id= {{ "modal".$post['id'] }}> {{ $post['nome'] }}</h5>
                    </div>
                    <div class="modal-body bg-black text-white">
                        <img src= {{ $post['imagem'] }} class="rounded mx-auto d-block modal-image"  alt="...">
                        <h3>Sinopse:</h3>
                        <p class="text-justified" >{{ $post['sinopse'] }}</p>
                        <p><strong>Gênero: </strong>{{ $post['genero'] }}
                        <br><strong>Lançamento: </strong>{{ $post['lancamento'] }}</p>
                    </div>
                    </div>
                </div>
            </div>       
        @endif
      @endforeach
    </div>
  </div>
</div>



@endsection
