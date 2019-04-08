@extends('home')
@section('cards')
<div class="col-md-4 text-center">
            <div class="card bg-dark text-white">
              <img src= {{ $post['imagem'] }} class="card-img cardCerto " alt="...">
              <div class="card-img-overlay" >
                <br><br><br><br><br><br><br><br><br>
                <h5 class="card-title text-center"> {{ $post['nome'] }} </h5>
              </div>
            </div>
</div>
@endsection
<!--/.Card-->