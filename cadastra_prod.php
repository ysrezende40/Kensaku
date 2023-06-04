
<!DOCTYPE html>
<html>
<head>
  <title>Minha página</title>
</head>
<body>
<?php
    //conexao
    $username = "root";
    $password = "";
    try{
        $conn = new PDO('mysql:host=localhost;dbname=buscajapan', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
    }
    $nomedomanga = $_POST['nome'];
    $autor = $_POST['autor'];
    $datadelançamento = $_POST['datalan'];
    $ultimolancamento = $_POST['dataulti'];
   
   
    // Verifique se um arquivo foi enviado e se é do tipo PNG ou JPG
if ($_FILES['imagem']['name'] != '' && ($_FILES['imagem']['type'] == 'image/png')) {
    // Define o caminho de destino onde a imagem será salva
    $target_path = "mangas/" . basename($_FILES['imagem']['name']);
  
    // Move o arquivo de imagem para o diretório de destino
    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $target_path)) {

      echo "<script>alert('Imagem enviada com sucesso!');</script>";

    } else {
      echo "<script>alert('Ocorreu um erro ao fazer upload da imagem.')</script>";
     
    }
  } else {
    echo "<script>alert('Por favor, selecione uma imagem nos formatos PNG ou JPG para enviar.')</script>";
  }
  
  //inserido na tabela, e essa parte do código sempre deve estar por ultimo porque todas as variaveis ja foram definidas e podem
  //ser inseridas da maneira correta.
  $sql = "INSERT INTO mangas (NOME,AUTOR,DATA_DE_LANCAMENTO,ULTIMO_LANCAMENTO,img_coluna) VALUES (?,?,?,?,?)";
  $conn->prepare($sql)->execute([$nomedomanga,$autor,$datadelançamento,$ultimolancamento,$target_path]);
  header("location: formcad.php");
 
  
?>
</body>
</html>
 

