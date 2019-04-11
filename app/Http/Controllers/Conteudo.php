<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Conteudo extends Controller
{
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
        $post4 = $this->criarPost(
            '4',
            'A CINCO PASSOS DE VOCÊ',
            'Filme',
            'Aos dezesseis anos de idade, Stella Grant (Haley Lu Richardson) é diferente da maior parte dos adolescentes: devido a uma fibrose cística, ela passa muito tempo no hospital, entre tratamentos e acompanhamento médico. Um dia, conhece Will Newman (Cole Sprouse), garoto que sofre da mesma doença que ela. A atração é imediata, porém os dois são obrigados a manter distância um do outro por questões de saúde. Enquanto Stella pensa em quebrar as regras e se aproximar do garoto da sua vida, Will começa a se rebelar contra o sistema e recusar o rigoroso tratamento.',
            '21 de março de 2019. ', 
            'Drama, romance',  
           ' https://cinema10.com.br/upload/noticias/2018/4357b0bf0b.jpg '
        );
        $post5 = $this->criarPost(
            '5',
            'DR. HOUSE',
            'Série',
            'O cientista House (Hugh Laurie) é especializado em infectologia e nefrologia, realiza excelentes diagnósticos mantendo uma postura cética, distanciada e até mesmo mau humorada com os pacientes do fictício hospital de Princeton-Plainsboro. Ele trabalha com uma equipe de médicos selecionada de acordo com critérios duvidosos na busca de soluções para os piores males relacionados à saúde.',
            '2004 a 2012', 
            'Drama, médico, comédia romantica',      
            'https://mariabonitabiju.files.wordpress.com/2010/02/house-md-642352_2.jpg'
        );
        $post6 = $this->criarPost(
            '6',
            'TODO MUNDO ODEIA O CHRIS',
            'Série',
            'A série conta a história da família Rock entre os anos de 1982 até 1987, com o foco no menino Chris (Tyler James Williams). Em 1982, Chris completa 13 anos e muda-se com a sua família para Bedford-Stuyvesant, no Brooklyn. Lá, Chris vive situações corriqueiras da vida de um adolescente, tanto nas histórias que realmente acontecem quanto nos pensamentos que são expostos de uma forma humorística. Chris vive com os pais Julius (Terry Crews) e Rochelle (Tichina Arnold), e com os dois irmãos Drew (Tequan Richmond) e Tonya (Imani Hakim). Ele estuda no Corleone Junior High School, colégio onde Chris é o único aluno negro, situação que o vitimiza durante todo seu tempo lá. Mas ele faz um amigo, Greg (Vicent Martella), que vai estar sempre junto de Chris, passando por suas situações tragicamente cômicas.',
            '2005 a 2009', 
            'Comédia',
            'https://static.otvfoco.com.br/2015/07/xyhL1X3UGaDXMSlHDJXbMHOq6wB.jpg'
        );
        $post7 = $this->criarPost(
            '7',
            'BROOKLYN NINE-NINE',
            'Série',
            'Brooklyn Nine-Nine conta o dia a dia de uma delegacia de polícia no distrito do Brooklyn, Nova York. O maior foco são os detetives, que acabam mudando seu cotidiano quando o severo novo Capitão Raymond Holt chega. Jake é o palhaço, Rosa é a séria, Terry é o musculoso, Amy é a organizadinha, Charles é o gastrônomico, Gina é a atual, Hitchcock e Scully são os preguiçosos.',
            '2013 - 2018', 
            'Comédia',
            'https://images-na.ssl-images-amazon.com/images/I/91hGUBfBjUL._SY445_.jpg'
        );
        $post8 = $this->criarPost(
            '8',
            'LUCIFER',
            'Série',
            'A série se desenvolve ao redor de Lucifer Morningstar, que está entediado e infeliz como o Senhor do Inferno. Ele renuncia seu trono e abandona seu reinado para tirar férias em Los Angeles, onde dá início a uma casa noturna com a ajuda de sua aliada demoníaca chamada Mazikeen. Depois que uma celebridade a quem Lucifer ajudou a alcançar a fama é assassinada, ele se envolve com a polícia, onde começa a ajudar a Detetive Chloe Decker a resolver casos de homicídio e encontrar os responsáveis para que possa "puni-los".',
            'Desde 2016', 
            'Comédia',
            'https://www.whats-on-netflix.com/wp-content/uploads/2019/03/Lucifer-Season-4-Netflix.jpg'
        );
        $post9 = $this->criarPost(
            '9',
            'BOB ESPONJA',
            'Desenho',
            'Uma esponja-do-mar chamada Bob Esponja Calça Quadrada mora com seu caracol de estimação na Fenda do Biquíni, no fundo do oceano. Bob trabalha no Siri Cascudo e, nas horas vagas, vive arrumando confusões com seu melhor amigo, a estrela-do-mar Patrick.',
            'desde 1999.', 
            'Comédia',
            'https://i.ytimg.com/vi/3Li0xa1p6qs/hqdefault.jpg'
        );
        $post10 = $this->criarPost(
            '10',
            'HORA DE AVENTURA',
            'Desenho',
            'O desenho se passa nos arredores de Ooo, uma terra pós-apocalíptica cheia de criaturas magicas. Após a guerra dos cogumelos Finn, que acredita ser o último humano da terra, é adotado por uma família de cachorros inteligentes e começa uma grande amizade com seu irmão adotivo Jake, um cachorro com super poderes. Ao decorrer da série conhecemos a história de outros personagens como o Rei Gelado, que antigamente era um historiador até que encontrou uma coroa mágica e enlouqueceu, Marcceline, a rainha vampira que foi criada pelo rei gelado durante o apocalipse, Princesa Jujuba, nascida da goma mãe a princesa jujuba deu início a um império, o reino doce, entre outros. Finn e Jake tem de derrotar vilões poderosos como o lich, um monstro maligno e antigo, da época em que na terra só haviam monstros.',
            '2010 - 2017', 
            'Aventura',
            'http://br.web.img2.acsta.net/r_1920_1080/pictures/14/04/09/13/23/045814.jpg'
        );
        $post11 = $this->criarPost(
            '11',
            'GRAVITY FALLS',
            'Desenho',
            'Os gêmeos Dipper e Mabel Pines passam as férias com o tio-avô numa misteriosa cidade. Eles tentam se adaptar à estranha região, mas sentem algo estranho e começam a investigar. Dipper encontra um diário codificado e a aventura começa. As crianças ajudam Stan a administrar "A Cabana do Mistério", a armadilha turística que ele possui, enquanto também investigam os verdadeiros mistérios do local. Nada é o que parece nessa cidadezinha, e com ajuda de um diário misterioso que Dipper acha na floresta, eles começam a desvendar os mistérios locais.',
            '2012 - 2016', 
            'Aventura',
            'http://br.web.img2.acsta.net/r_1920_1080/pictures/15/02/09/09/50/131883.jpg'
        );
        $post12 = $this->criarPost(
            '12',
            'SCOOBY DOO',
            'Desenho',
            'Scooby-Doo é um desenho animado americano produzido pela Hanna-Barbera, e criado no ano de 1969 por Joe Ruby. Constituído por um grupo de quatro pessoas metidas a detetives Fred, Velma, Daphne e Salsicha, com um Dogue Alemão falante chamado Scooby-Doo, que viajam numa van chamada Máquina Mistério, e ajudam a investigar casos misteriosos. Eles seguem pistas, fogem dos vilões e, muitas vezes, vêem-se perdidos em labirintos, passagens secretas e porões escuros. Dividem-se sempre em dois grupos quando vão procurar pistas: Fred e Daphne vão por um lado, enquanto Salsicha e Scooby acompanham Velma, que, apesar da esperteza e inteligência, vive perdendo seus óculos e se metendo nas confusões de Salsicha e Scooby.',
            'Desde 1969.', 
            'Aventura',
            'https://1.bp.blogspot.com/-S6LT0c7qHnY/Tqm21R1ADLI/AAAAAAAAM9A/e2GGgxEB7lY/s1600/Scooby+Doo+%25281%2529.png'
        );

        //fazer o resto
        $posts = [$post1, $post2, $post3, $post4, $post5, $post6, $post7, $post8, $post9, $post10, $post11, $post12];
        return $posts;
    }
}
