<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css"> 
    <title>USARIO CADRASTADO</title>
</head>

<body>
    
</body>
</html>





<?php
include('config.php');
include('menu.php');
include('cabecalho.php');



$sqlcaduser = "INSERT INTO tab_users(nick_usario,senha_usuario,nome_usuario,email_usuario,data_de_nascimento) VALUES(?,?,?,?,?)";




$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$nickname = $_POST['txtnickname'];
$senha = $_POST['txtsenha']; 
$date = $_POST['txtdate'];
$conn->prepare($sqlcaduser)->execute([$nickname,$senha,$nome,$email,$date]);

echo "<div class='mensagem-bem-vindo' style='display: flex; justify-content: center; align-items: center; height: 50vh;margin-left: -220px;'>";
echo "<h2>Bem-vindo, $nome!<br><br>Você está cadastrado. Por gentileza, clique em 'Login' e acesse nosso site.</h2>";
echo "</div>";




?>
