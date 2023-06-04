<!DOCTYPE html>
<div class="menu">
<?php
session_start();

if(isset($_SESSION['user'])){
echo "<a href='index.php'>Home</a> -
<a href='catalogo.php'>catalago</a> -
<a href='mangas.php'>mangas</a> -
<a href='lancamentos.php'>lançamentos</a> -
<a href='lought.php'>Logout</a> -
<a href='topanimes.php'>top mangás</a> -
<a href='sobre.php'>sobre</a> -
<a href='formcontato.php'>Contato</a>
";
 }else{
echo "<a href='index.php'>Home</a> -
<a href='Formlogin.php'>Login</a> -
<a href='sobre.php'>sobre</a> -
<a href='Formuser.php'>Cadastre-se</a>";
 }
?>
</div>

