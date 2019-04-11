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
<!--Carousel Wrapper-->
<div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!-- First slide -->
    <div class="carousel-item active">
      <!--Mask color-->
      <div class="view">
        <!--Video source-->
        <img class="d-block w-100 c-image" src="https://images2.9c9media.com/image_asset/2019_3_14_4f5cbc27-1ce9-4465-9240-a80a2871f962_png_1500x684.jpg?width=1500&maintain_aspect=1&size=1500" alt="First slide">
        <div class="mask rgba-indigo-light"></div>
      </div>

      <!--Caption-->
      <div class="carousel-caption">
        <div class="animated fadeInDown">
          <h1 class="h1-responsive"><a href=  {{ Route('filmes') }} class="link">Filmes</a></h1>
        </div>
      </div>
      <!--Caption-->
    </div>
    <!-- /.First slide -->

    <!-- Second slide -->
   
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <!--Video source-->
        <img class="d-block w-100 c-image" src="https://www.dailydot.com/wp-content/uploads/2017/09/best_netflix_original_series_stranger_things.jpg" alt="First slide">
        <div class="mask rgba-indigo-light"></div>
      </div>

      <!--Caption-->
      <div class="carousel-caption">
        <div class="animated fadeInDown">
          <h1 class="h1-responsive"> <a href=  {{ Route('series') }} class="link">Séries</a></h1>
        </div>
      </div>
      <!--Caption-->
    </div>
    <!-- /.Second slide -->

    <!-- Third slide -->
    
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <!--Video source-->
        <img class="d-block w-100 c-image" src="http://www.okcmoa.com/wp-content/uploads/2018/10/Mirai-1.jpg" alt="First slide">
        <div class="mask rgba-indigo-light"></div>
      </div>

      <!--Caption-->
      <div class="carousel-caption">
        <div class="animated fadeInDown">
          <h1 class="h1-responsive"><a href=  {{ Route('desenhos') }} class="link">Desenhos</a></h1>
        </div>
      </div>
      <!--Caption-->
    </div>
    </a>
    <!-- /.Third slide -->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--Carousel Wrapper-->
<div class="container">
  <br><br>
  <div class="col-lg-12 col-md-12 col-sm-12">
      <h1 class="text-center text-white">Adicionados Recentemente</h1>
      <div class="row">
      @foreach ($posts as $post)
        @if($post['id']<'7')
            <div class="col-lg-4 col-md-6 col-sm-6 text-center">
            <a data-toggle="modal" data-target= {{ "#modal".$post['id'] }} href= {{ "modal".$post['id'] }}>
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
            <br>

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
<!--/.Card-->
      @endforeach
    </div>
  </div>
</div>
<br><br><br><br>
@endsection

