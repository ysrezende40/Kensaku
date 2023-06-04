<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/reset.css"> 
    <link rel="stylesheet" href="estilo.css"> 
	<link rel="icon" href="imagens/icone-removebg-preview.png" type="image/x-icon">
    <title>HOME</title>
    </head>
	<style>
		.box {
			cursor: pointer;
			border: none;
			margin-left: 50px;
		}
		.textobox{
			color: red;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			font-weight: bold;
			font-size: 20px;
			text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
			
		}
		.info {
			border: 1px solid red;
			background-color: black;
			display: none;
			position: absolute;
			top: 250px;
			left: 400px;
			width: 400px;
			height: 300px;
			padding: 20px;

		}
		
		.tokio{
			border: 1px solid red;
			background-color: black;
			display: none;
			position: absolute;
			top: 250px;
			left: 400px;
			width: 400px;
			height: 400px;
			padding: 20px;

		}
		.blulock{
			border: 1px solid red;
			background-color: black;
			display: none;
			position: absolute;
			top: 250px;
			left: 400px;
			width: 400px;
			height: 500px;
			padding: 20px;
			

		}
		.naruto{
			border: 1px solid red;
			background-color: black;
			display: none;
			position: absolute;
			top: 250px;
			left: 400px;
			width: 400px;
			height: 500px;
			padding: 20px;
			

		}
		.bersek{
			border: 1px solid red;
			background-color: black;
			border: 1px solid red;
			display: none;
			position: absolute;
			top: 250px;
			left: 400px;
			width: 400px;
			height: 500px;
			padding: 20px;
			

		}
		.dragonball{
			border: 1px solid red;
			background-color: black;
			display: none;
			position: absolute;
			top: 250px;
			left: 400px;
			width: 400px;
			height: 500px;
			padding: 20px;

		}
		.ocultarCaixas {
			margin-bottom: 20px;
			position:absolute;
			border-radius: 30px;
			background-color: red;
			display: block;
		    margin-top: 65px;
			border: none;
			color: white;
			font-size: 13px;
			padding: 10px 50px;
			cursor: pointer;
			outline: none;
			margin-left:570px
			
           }

		.ocultarCaixas:hover {
				opacity: 1;
				background-color: #CD0404;
				transform: translateY(-2px); /* Eleva o botão ao passar o cursor sobre ele */ 
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
			}
		.botãomoveimg{
			margin-bottom: 20px;
			position:absolute;
			border-radius: 30px;
			background-color: #FF55BB;
			display: block;
		    margin-top: -85px;
			border: none;
			color: white;
			font-size: 13px;
			padding: 10px 50px;
			cursor: pointer;
			outline: none;
			margin-left:470px

		}
		.botãomoveimg:hover{
			    opacity: 1;
				background-color: #FF55BB;
				transform: translateY(-2px); /* Eleva o botão ao passar o cursor sobre ele */ 
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);

		}

		
		
		
	</style>
<br>
<br>
<?php
include ('menu.php');
include('cabecalho.php');
?>
<body>
<div class="info" id="info">
	<img id="imagemOnepiece" src="">
	<button class="botãomoveimg" onclick="moverImagens1()">Mover</button>

	<p class="textobox">A série foca em Monkey D. Luffy, um jovem feito de borracha, que, inspirado em seu ídolo de infância, o poderoso pirata Shanks, o Ruivo, parte em uma jornada do mar do East Blue para encontrar o tesouro mítico, o One Piece, e proclamar-se o Rei dos Piratas.
	<br>
	<br>

	<p class="textobox">CLIQUE NO BOTÃO MOVER PARA VISUALIZAR PARTE DO MANGÁ</p>



</div>

<div class="tokio" id="tokio">
	<img id="imagemTokio" src="">
	<button class="botãomoveimg"  onclick="moverImagens2()">Mover</button>

	<p class="textobox">Takemichi é um virgem desempregado de 26 anos que descobre que a garota que ele namorou durante o ensino médio - a única que ele já namorou - morreu. Então, após um acidente ele se encontra de volta ao passado, durante seus anos de ensino médio. Ele promete mudar o futuro e salvar a garota, e para isso, ele planeja subir até o topo da gangue de delinquentes mais brutal da região de Kantou.</p>
	<br>
	<br>
	<p class="textobox">CLIQUE NO BOTÃO MOVER PARA VISUALIZAR PARTE DO MANGÁ</p>



</div>

<div class="blulock" id="blulock">
	<img id="imagemblulock" src="">
	<button class="botãomoveimg" onclick="moverImagens3()">Mover</button>
	<p class="textobox">Depois de refletirem sobre o estado atual do futebol japonês, a Associação Japonesa de Futebol decide contratar o enigmático e excêntrico técnico Jinpachi Ego para realizar seu sonho de ganhar a Copa do Mundo. Acreditando que ao Japão faltava um atacante egoísta faminto por gols, Jinpachi inicia o Blue Lock - uma prisão onde trezentos talentosos atacantes de escolas do ensino médio de todo o Japão são isolados e colocados uns contra os outros. O único sobrevivente do Blue Lock ganhará o direito de se tornar o atacante da equipe nacional, e aqueles que forem derrotados serão proibidos de se juntar a equipe para sempre.
	Um dos selecionados para participar deste arriscado projeto é Yoichi Isagi, um atacante que não conseguiu levar sua equipe de futebol do ensino médio para o torneio nacional.</p>
	<br>
	<br>
	<p class="textobox">CLIQUE NO BOTÃO MOVER PARA VISUALIZAR PARTE DO MANGÁ</p>




</div>

<div class ="naruto" id="naruto">
	<img id="imagemNaruto" src="">
	<button class="botãomoveimg"  onclick="moverImagens4()">Mover</button>

	<p class="textobox">Naruto Uzumaki é um menino que vive em Konohagakure no Sato ou simplesmente Konoha ou Vila Oculta da Folha, a vila ninja do País do Fogo. Quando ainda bebê, Naruto teve aprisionada em seu corpo a Kyuubi no Youko por Minato Namikaze (quarto Hokage, e seu pai), com a finalidade de salvar a Vila da Folha. Desde então, Naruto é visto por muitas pessoas como um monstro, não só pelos familiares das pessoas mortas pela Kyuubi, mas também por pessoas que não toleram suas brincadeiras, já que o mesmo é extremamente hiperativo, incompreendido e solitário. Naruto sonha em se tornar o Hokage de sua vila, um ninja poderoso e respeitado, para assim poder ser reconhecido por todos.</p>
	<br>
	<br>
	<p class="textobox">CLIQUE NO BOTÃO MOVER PARA VISUALIZAR PARTE DO MANGÁ</p>
		
</div>

<div class ="bersek" id="bersek">
	<img id="imagemBersek" src="">
	<button class="botãomoveimg"  onclick="moverImagens5()">Mover</button>

    <p class="textobox">Gatts é um sobrevivente que vaga pelo mundo à procura de respostas. Antigo membro do Exército "Bando dos Falcões", um grupo mercenário de cavaleiros e guerreiros liderado por Griffith e Caska, Gatts se adentra na história que ganha corpo e emerge sob um ponto de vista totalmente imprevisível, a medida que os acontecimentos vão se completando. É uma obra dedicada à eterna luta do Catolicismo contra Paganismo....</p>
	<br>
	<br>
	<p class="textobox">CLIQUE NO BOTÃO MOVER PARA VISUALIZAR PARTE DO MANGÁ</p>
		
	

</div>
<div class ="dragonball" id="dragonball">
    <img id="imagemDragonball" src="">
    <button class="botãomoveimg" onclick="moverImagens6()">Mover</button>
    
    <p class="textobox">Dragon Ball é um mangá japonês criado por Akira Toriyama e publicado na revista Weekly Shounen Jump, a partir de 1986. O mangá deu origem a duas séries de anime que tiveram um enorme sucesso, tanto no Japão como no resto do mundo: Dragon Ball, Dragon Ball Z e ainda Dragon Ball GT. Com elementos da mitologia japonesa, Akira criou um mundo fantasioso, com lutas espetaculares, poderes, dinossauros, máquinas futurísticas e qualquer coisa que sua imaginação permitisse.</p>
	<br>
	<br>
	<p class="textobox">CLIQUE NO BOTÃO MOVER PARA VISUALIZAR PARTE DO MANGÁ</p>

</div>
<button class="ocultarCaixas" onclick="ocultarCaixas()">FECHAR AS IMAGENS</button>





		<br><table height=auto style="background-color: white; width: 100%;"></br>
		

		<tr>
			<th class="thindex" width=40><p>ONE PIECE</p></th>

		    <th class="thindex" width="40" style="white-space: nowrap;"><p>TOKYO REVENGERS</p></th>

			<th class="thindex"  width=40><P>BLUE LOCK</p></th>

			<th class="thindex"  width=40><p>NARUTO</p></th>

			<th class="thindex"  width=40><p>BERSERK</p></th>

			<th class="thindex"  width=40><p>DRAGON BALL</p></th>


			
			
		</tr>

			<tr>
				
					
			    <td class="box" onclick="luffy()" align="center"><img src="imagens\luffy2.jpg" heigth= 155px width= 155px></td>
				<td class="box" onclick="tokio()" align="center"><img src="imagens\tokyo2.jpg" heigth= 155px width= 155px></td>
				<td class="box" onclick="blulock()" align="center"><img src="imagens\blue2.webp" heigth=155px width= 155px></td>
				<td class="box" onclick = "naruto()" align="center"><img src="imagens/naruto2.jpg" heigth= 155px width= 155px></td>
				<td class="box" onclick="bersek()" align="center"><img src="imagens/berseker1.jpg" heigth= 165px width= 165px></td>
				<td class="box" onclick="dragonball()" align="center"><img src="imagens/dragon2.jpg" heigth= 155px width= 155px></td>
			
			</tr>

		
		</table>

<script>

//FUNÇÃO QUE FAZ A SINOSPE DO MANGÁ DESAPARECER QUANDO O BOTÃO MOVER E CLICADO//
var btns = document.getElementsByClassName('botãomoveimg');

var elements = document.getElementsByClassName("textobox");

//isso serve que para quando o botão de mover for clicado a caixa ficara trasnparente e a borda ira desaparecer assim mostrando so a imagem//
var div1 = document.getElementById("info");
var div2 = document.getElementById("tokio");
var div3 = document.getElementById("blulock");
var div4 = document.getElementById("naruto");
var div5 = document.getElementById("bersek");
var div6 = document.getElementById("dragonball");


for (var i = 0; i < btns.length; i++) {

  btns[i].addEventListener('click', function() {

	div1.style.backgroundColor = "transparent";
	div1.style.border = "none";
	div2.style.backgroundColor = "transparent";
	div2.style.border = "none";
	div3.style.backgroundColor = "transparent";
	div3.style.border = "none";
	div4.style.backgroundColor = "transparent";
	div4.style.border = "none";
	div5.style.backgroundColor = "transparent";
	div5.style.border = "none";
	div6.style.backgroundColor = "transparent";
	div6.style.border = "none";

    //faz o texto desaparecer//
    for (var j = 0; j < elements.length; j++) {

      elements[j].style.display = "none";

    }
  }
  
  );
  
}

//elements[i] quando adicionado assim e para acessar cada elemneto com nome da classe separadamente e aplicar a configuração
//que eu coloquei.
//o loop e para percorrer todos os elementos com o mesmo nome da classe.





//FUNÇÕES PARA ABRIR E PASSAR AS IMAGENS//


var imagensOnepiece = [
	"mangas/ONEPIECE1.jfif",
	"mangas/ONEPIECE2.jfif",
	"mangas/ONEPIECE3.jfif"

];
var imagemAtual = 0;



function moverImagens1() {
  var divinfo = document.querySelector('#info');
  var imgOnepiece = document.querySelector('#imagemOnepiece');
  

  imgOnepiece.src = imagensOnepiece[imagemAtual];

  imgOnepiece.width = 500; 
  imgOnepiece.height = 500; 

  


  imagemAtual++;
  if (imagemAtual >= imagensOnepiece.length) {
    imagemAtual = 0;
	
	//faz a pagina recaregar para quando clicar em uma outra imagem aparecer a sinopse
	setInterval(function() {
      location.reload();
    }, 1000);

  }

}

var imagensTokio = [
  "mangas/TOKYOREVENGERS1.jfif",
  "mangas/TOKYOREVENGERS2.jfif",
  "mangas/TOKYOREVENGERS3.jfif"
];
var imagemAtual = 0;

function moverImagens2() {
  var divTokio = document.querySelector('#tokio');
  var imgTokio = document.querySelector('#imagemTokio');

  imgTokio.src = imagensTokio[imagemAtual];

  imgTokio.width = 500; 
  imgTokio.height = 500; 


  imagemAtual++;
  if (imagemAtual >= imagensTokio.length) {
    imagemAtual = 0;
     
	setInterval(function() {
      location.reload();
    }, 1000);


	
  }
  

}
var imagensBlulock = [
   "mangas/BLUELOCK1.jfif",
   "mangas/BLUELOCK2.jfif",
   "mangas/BLUELOCK3.jfif"
 ]

 var imagemAtual = 0;

function moverImagens3(){

 

  var divBlulock = document.querySelector('#imagemNaruto');
  var imgBlulock = document.querySelector('#imagemblulock');

  imgBlulock.src = imagensBlulock[imagemAtual];

  imgBlulock.width = 500; 
  imgBlulock.height = 500; 


  imagemAtual++;

  if (imagemAtual >= imagensBlulock.length) {
    imagemAtual = 0;

	setInterval(function() {
      location.reload();
    }, 1000);




  }

}
var imagensNaruto = [
    "mangas/NARUTO1.png",
	"mangas/NARUTO2.jfif",
	"mangas/NARUTO3.jfif"

];
var imagemAtual = 0;

function moverImagens4(){

var divNaruto = document.querySelector('#naruto');
var imgNaruto = document.querySelector('#imagemNaruto');

imgNaruto.src = imagensNaruto[imagemAtual];

imgNaruto.width = 500; 
imgNaruto.height = 500; 


imagemAtual++;
if (imagemAtual >= imagensNaruto.length) {
  imagemAtual = 0;

  setInterval(function() {
      location.reload();
    }, 1000);




}

}
var imagensBersek = [
     "mangas/BERSEK1.JPG",
	 "mangas/BERSEK2.JPG",
	 "mangas/BERSEK3.JPG",

]
var imagemAtual = 0;
function moverImagens5(){

var divBersek = document.querySelector('#bersek');
var imgBersek = document.querySelector('#imagemBersek');

imgBersek.src = imagensBersek[imagemAtual];

imgBersek.width = 500; 
imgBersek.height = 500; 


imagemAtual++;
if (imagemAtual >= imagensBersek.length) {
  imagemAtual = 0;


  setInterval(function() {
      location.reload();
    }, 1000);



}

}

var imagensDragonball = [
      "mangas/DRAGONBALL1.jpg",
	  "mangas/DRAGONBALL2.jpg",
	  "mangas/DRAGONBALL3.jpg",

]
var imagemAtual = 0;

function moverImagens6(){

var divDragonball = document.querySelector('#dragonball');
var imgDragonball = document.querySelector('#imagemDragonball');

imgDragonball.src = imagensDragonball[imagemAtual];

imgDragonball.width = 500; 
imgDragonball.height = 500; 


imagemAtual++;
if (imagemAtual >= imagensDragonball.length) {
  imagemAtual = 0;

  setInterval(function() {
      location.reload();
    }, 1000);


}

}





//FUNÇÕES PARA ABRIR E FECHAR AS CAIXAS//
  function luffy() {
    var info = document.getElementById("info");
	var tokio = document.getElementById("tokio");
	
    if (info.style.display === "none") {
        info.style.display = "block";
		tokio.style.display = "none";
    } else {
        info.style.display = "none";
    }   
  }
  
  function tokio() {
    var tokio = document.getElementById("tokio");
	var info = document.getElementById("info");
    
    if (tokio.style.display === "none") {
        tokio.style.display = "block";
		info.style.display = "none";

    } else {
        tokio.style.display = "none";
    }   
  }

  function blulock() {
    var blulock = document.getElementById("blulock");
	var tokio = document.getElementById("tokio");
    if (blulock.style.display === "none") {
      blulock.style.display = "block";
	  tokio.style.display = "none";
    } else {
      blulock.style.display = "none";
    }
  }

  function naruto(){
    var naruto = document.getElementById("naruto");
	var blulock = document.getElementById("blulock");
    if (naruto.style.display === "none") {
      naruto.style.display = "block";
	  blulock.style.display = "none";
    } else {
      naruto.style.display = "none";
    }
  }
  function bersek(){
    var bersek = document.getElementById("bersek");
	var naruto = document.getElementById("naruto");

    if (bersek.style.display === "none") {
		bersek.style.display = "block";
		naruto.style.display = "none";
    } else {
		bersek.style.display = "none";
    }
  }
  function dragonball(){
    var dragonball = document.getElementById("dragonball");
	var bersek = document.getElementById("bersek");

    if (dragonball.style.display === "none") {
		dragonball.style.display = "block";
		bersek.style.display = "none";
		
    } else {
		dragonball.style.display = "none";
    }
  }
  //BOTÃO PARA FECHAR TODAS AS CAIXAS
  function ocultarCaixas() {
  var info = document.getElementById("info");
  var tokio = document.getElementById("tokio");
  var blulock = document.getElementById("blulock");
  var naruto = document.getElementById("naruto");
  var bersek = document.getElementById("bersek");
  var dragonball = document.getElementById("dragonball");

  info.style.display = "none";
  tokio.style.display = "none";
  blulock.style.display = "none";
  naruto.style.display = "none";
  bersek.style.display = "none";
  dragonball.style.display = "none";

  setInterval(function() {
      location.reload();
    }, 2000);

  


}
    

</script>
</body>
</html>
