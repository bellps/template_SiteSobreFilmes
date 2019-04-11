@extends('master')
@section('titulo', 'Sobre')

@section('header')

<div id="sec" class="view" style='background: url("https://4.bp.blogspot.com/-c-ZxM5B0N4w/WpmKatXHobI/AAAAAAAAA90/AlCyGtAf1kwyhjafIiVq43e9QN4OHF7dwCLcBGAs/s1600/Pair%2Bon%2Bwater%2BMP.jpeg")no-repeat bottom center fixed;'>
    <div class="mask rgba-black-strong">
        <div class="container-fluid d-flex align-items-center justify-content-center h-100">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-md-12">
                    <!-- Heading -->
                    <h2 class="display-4 white-text">Sobre nós</h2>
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
  <div class="col-md-8 mx-auto">
    <p class="text-white text-center"><em>"Este site foi feito com um único intuito, um trabalho escolar. Na verdade este erá o foco no começo mas o mundo do cinema é tão maravilhoso que nossa atenção para ele foi crescendo cada vez mais e hoje,este que vos fala, tem mais de 5 anos. O site deixou de ser uma obrigação e passou a ser algo divertido onde duas adolescentes falam sobre as coisas que gostam e publicam conteúdo para amantes do cinema. "</em></p>
  </div>
  <br>
  <hr class="hr-light">
  <br>
  <h2 class="text-white h2 text-center">Criadoras</h2>
  <br>
  <div class="row">
        <div class="col-md-4">
            <div class="view overlay zoom">
                <img src="https://scontent.fcpq2-1.fna.fbcdn.net/v/t1.0-9/56624603_2969691066382236_5632913586536841216_n.jpg?_nc_cat=102&_nc_ht=scontent.fcpq2-1.fna&oh=39dad2b8ca851628d195efa7ebba2ea7&oe=5D4F7897" class="img-fluid " alt="zoom">
                <div class="mask rgba-black-light flex-center waves-effect waves-light">
                    <p class="white-text">Isabella Adorno</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="view overlay zoom">
                <img src="https://scontent.fcpq2-1.fna.fbcdn.net/v/t1.0-9/31948409_1670142466427288_6461761980251242496_n.jpg?_nc_cat=107&_nc_ht=scontent.fcpq2-1.fna&oh=f3d8d3dadae1ee9ec1e10b660cb2026e&oe=5D023541" class="img-fluid " alt="zoom">
                <div class="mask rgba-black-light flex-center waves-effect waves-light">
                    <p class="white-text">Lara Nogueira</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="view overlay zoom">
                <img src="https://scontent.fcpq2-1.fna.fbcdn.net/v/t1.0-9/39665485_1397981410346575_5918829726935285760_n.jpg?_nc_cat=104&_nc_ht=scontent.fcpq2-1.fna&oh=502ce434cfb91cc1cafe914427fc9a36&oe=5D37C5DC" class="img-fluid " alt="zoom">
                <div class="mask rgba-black-light flex-center waves-effect waves-light">
                    <p class="white-text">Yasmin Dias</p>
                </div>
            </div>
        </div>
  </div>

<br>
    <blockquote class="blockquote text-white">
        <p class="mb-0">Tô com dor de cabeça mas to programando. Merecia um MB ein</p>
        <footer class="blockquote-footer">Isabella</footer>
    </blockquote>   

<br>
    <blockquote class="blockquote text-right text-white">
        <p class="mb-0">Pegar citação da lara</p>
        <footer class="blockquote-footer">Lara</footer>
    </blockquote>

<br>
    <blockquote class="blockquote text-white">
        <p class="mb-0">Yasmin entrou de penetra na dupla não merece citação</p>
        <footer class="blockquote-footer">Yasmin</footer>
    </blockquote>          
</div>  

@endsection