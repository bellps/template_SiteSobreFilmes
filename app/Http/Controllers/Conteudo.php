<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Conteudo extends Controller
{
    public function posts(){
            $post1 = $this->criarPost(
                '1',
                'D.U.F.F. - VOCÊ CONHECE, TEM OU É',
                'Filme',
                'A jovem Bianca descobre que foi escolhida pelas amigas de colégio como uma D.U.F.F., uma amiga feia para que elas se pareçam ainda mais bonitas quando comparadas. Revoltada, Bianca pede a um atleta popular da escola para ajudá-la a melhorar seu visual.',
                '30 de julho de 2015', 
                'Comédia',
                'http://s2.glbimg.com/nNlVDtRasZ-fD07Afk56la0Bi_c=/s.glbimg.com/jo/g1/f/original/2015/07/30/d.u.f.f..jpg'
            );
        $post2 = $this->criarPost(
            '2',
            'HISTÓRIAS CRUZADAS',
            'Filme',
            'Jackson, pequena cidade no estado do Mississipi, anos 60. Skeeter (Emma Stone) é uma garota da sociedade que retorna determinada a se tornar escritora. Ela começa a entrevistar as mulheres negras da cidade, que deixaram suas vidas para trabalhar na criação dos filhos da elite branca, da qual a própria Skeeter faz parte. Aibileen Clark (Viola Davis), a emprega da melhor amiga de Skeeter, é a primeira a conceder uma entrevista, o que desagrada a sociedade como um todo. Apesar das críticas, Skeeter e Aibileen continuam trabalhando juntas e, aos poucos, conseguem novas adesões.',
            '3 de fevereiro de 2012', 
            'Drama',
            'https://occ-0-987-990.1.nflxso.net/art/35808/87c79d71353b6df898440a4474fc4c1ca4a35808.jpg'
        );
        $post3 = $this->criarPost(
            '3',
            'Titanic',
            'Filme',
            'Jack Dawson (Leonardo DiCaprio) é um jovem aventureiro que, na mesa de jogo, ganha uma passagem para a primeira viagem do transatlântico Titanic. Trata-se de um luxuoso e imponente navio, anunciado na época como inafundável, que parte para os Estados Unidos. Nele estão também Rose DeWitt Bukater (Kate Winslet), a jovem noiva de Caledon Hockley (Billy Zane). Rose está descontente com sua vida, já que se sente sufocada pelos costumes da elite e não ama Caledon. Entretanto, ela precisa se casar com ele para manter o bom nome da família, que está falida. Um dia, desesperada, Rose ameaça se atirar do Titanic, mas Jack consegue demovê-la da ideia. Pelo ato ele é convidado a jantar na primeira classe, onde começa a se tornar mais próximo de Rose. Logo eles se apaixonam, despertando a fúria de Caledon. A situação fica ainda mais complicada quando o Titanic se choca com um iceberg, provocando algo que ninguém imaginava ser possível: o naufrágio do navio.',
            '16 de janeiro de 1998 ', 
            'Drama, romance',
            'https://timeentertainment.files.wordpress.com/2012/08/titanic.jpg?w=720&h=480&crop=1'
        );
        //fazer o resto
        $posts = [$post1, $post2, $post3];
        //, $post3, $post4, $post5, $post6, $post7, $post8, $post9
        return $posts;
    }
    function recentes(){
        return view('home')->with('posts', $this->posts());
    }
    function desenhos(){
        return view('desenhos')->with('posts', $this->posts());
    }
    function filmes(){
        return view('filmes')->with('posts', $this->posts());
    }
    function series(){
        return view('series')->with('posts', $this->posts());
    }
    public function criarPost($id,$nome,$categoria,$sinopse,$lancamento,$genero,$imagem){
        $novoPost['id']=$id;
        $novoPost['nome']=$nome;
        $novoPost['categoria']=$categoria;
        $novoPost['sinopse']=$sinopse;
        $novoPost['lancamento']=$lancamento;
        $novoPost['genero']=$genero;
        $novoPost['imagem']=$imagem;
        return $novoPost;
    }

}
