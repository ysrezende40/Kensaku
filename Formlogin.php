<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css"> 
    <title>LOGIN</title>
</head>
<br>
<br>
<?php
include('menu.php');
?>
<body>
<form method="post" action="logar.php">
    Usuário:
    <input type='text' name='user' required><br><br>
    Senha:
    <input type='password' name='pass' placeholder="Digite sua senha" required><br><br>
    <input type='submit' value="Logar"><br>
    
    </form>  
    
</body>
</html>