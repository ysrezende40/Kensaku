<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css"> 
    <title>CADRASTO MANGA</title>
</head>
<br>
<br>
<?php
include('menu.php');

?>
<body>
   
    
    <form class="cadmanga" enctype="multipart/form-data" method="post" action="cadastra_prod.php">
        NOME DO MANGÁ: <input type="text" name="nome" required><br>
        AUTOR: <input type="text" name="autor" required><br>
        DATA DE LANÇAMENTO: <input type="date" name="datalan" required><br>
       ULTIMO LANÇAMENTO <input type="date" name="dataulti" required><br>
       <label>Selecione uma imagem:</label>
		<input type="file" name="imagem" required><br><br>
         <input type="submit" name="ARQUIVO" value="enviar"><br>
		
    </form>
    <br>






</body>
</html>