<?php
if (!isset($_GET['nome_livro'])) {
	header("Location: catalogo.php");
	exit;
}
 
$nome = "%".trim($_GET['nome_livro'])."%";
 
$dbh = new PDO('mysql:host=127.0.0.1;dbname=buscajapan', 'root', '');
 
$sth = $dbh->prepare('SELECT * FROM `mangas` WHERE `nome` LIKE :nome');
$sth->bindParam(':nome', $nome, PDO::PARAM_STR);
$sth->execute();
 
$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css"> 
    <title>Document</title>
</head>
<body>
<h2>Resultado da busca:</h2>

<div class="resultados"> 
<?php
include('menu.php');

if (count($resultados)) {
	foreach($resultados as $Resultado);
    echo '<div class="resultado-item">';
    echo $Resultado['ID']."- ".$Resultado['NOME']."<br>"."Autor:". $Resultado['AUTOR']."<br>"."Data de lançamento:". $Resultado['DATA_DE_LANCAMENTO']."<br>"."Ultimo lançamento:". $Resultado['ULTIMO_LANCAMENTO']."<br>"."<br>";
    echo "<img src='mangas/" . $Resultado['ID'] . ".png'>";  
    echo '</div>';

   

}
else{
  
  echo '<div class="resultado-item">Não foram encontrados resultados pelo termo buscado</div>';
  
 
}
?>
</div>
</body>
</html>






</body>
</html>