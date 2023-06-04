<?php  
    session_start();
    $_SESSION['user']= $_POST['user'];
    
    include('config.php');
    $consultauser = $conn->prepare("SELECT * FROM tab_users where nick_usario = :nick;");

    $consultauser->bindParam(':nick', $_SESSION['user']);
    $consultauser->execute();
    

    if($consultauser->rowCount()>0){
        $user = $consultauser->fetch(PDO::FETCH_ASSOC);
        if($_POST['pass'] == $user['senha_usuario'] && $user['super_usuario'] == 0){
            header("location: catalogo.php");
        }
        else if($_POST['pass'] == $user['senha_usuario'] && $user['super_usuario'] == 1){
            header("location: formcad.php");
        }
    
        else{
        session_destroy();
        echo "Usuário ou senha errados<br>";
        echo "<a href= 'formlogin.php'>Voltar</a>";
        }
    }
?>