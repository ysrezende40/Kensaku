<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css"> 
    <title>Cadrasta-se</title>
</head>
<br>
<br>
<body>
<?php include("menu.php");
?>
    
       
    <form method= "post" action="cadrastarusuario.php">
     nome completo:
     <input type='text' name='txtnome' required><br>
     email:
     <input type='text' name='txtemail' required><br>
     nickname
     <input type='text' name='txtnickname' required><br>
     Senha:
    <input type='password' name='txtsenha' required required pattern="[A-Za-z1-9]{6}" title="PERMITIDO APENAS LETRAS E NÚMEROS E ATÉ 6 DIGITOS"><br><br>
    Data da nascimento:
    <input type='date' name='txtdate' required><br>
    
    <input type='submit' value="Cadrastar"><br><br>
    *Seu Nickname será seu usario ao logar*
    </form>

    










    
 
</body>
</html>