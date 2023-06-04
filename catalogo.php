<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css"> 
    <title>CATALOGO</title>
</head>
<br>
<br>
<?php
include('menu.php');

?>
<body>
    <h2>BUSQUE SEU MANGÁ FAVORITO AQUI:</h2>
    <br>
    <br>

<form class="formcatalogo" action = "busca.php" method="GET">
<label>DIGITE O NOME DO MANGÁ</label>
<input type = "text" name = "nome_livro" size = "50" placeholder = "insira o nome do manga" required>
<button class="botãocata">BUSCAR</button>
    
</body>
</html>
