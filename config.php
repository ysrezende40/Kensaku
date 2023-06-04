<?php
//conexão
$username = "root";
$password = "";

try{
    $conn = new PDO('mysql:host=localhost;dbname=cadrasta_user',$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}
catch(PDOEexception $e){
    echo 'ERROR: ' . $e->getMessage();
}
//esse config so conecta ao banco do usario.