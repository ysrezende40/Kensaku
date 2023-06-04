<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>CONTATO</title>
    <style>
    .bg-custom {
        background-color: black; 
    }
    .custom-label{
      color: red;
    }
    .custom-icon {
     color: red; 
     size: 30px
  }

</style>
<?php
include("cabecalho.php");

?>

</head>
<body class="bg-custom">
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
  <form action="enviar_email.php" method="post">
      <div class="input-group mt-10 mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" class="form-control" placeholder="Digite seu nome" aria-label="Username" aria-describedby="basic-addon1" name="nome">
    </div>
    <div class="input-group mt-15 mb-3">
      <input type="text" class="form-control" placeholder="Digite seu email" aria-label="Recipient's username" aria-describedby="basic-addon2" name="email">
      <span class="input-group-text" id="basic-addon2">@example.com</span>
    </div>
    
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label custom-label">ESCREVA SOBRE OQUE QUISER:</label>
      <i class="bi bi-chat-heart-fill fs-3 custom-icon"></i>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mensagem"></textarea>
    </div>


    <button type="submit" class="btn btn-success" style="margin-top: 20px;">ENVIAR</button>
    
  </form>
  <div class="card" style=" margin-top: 1250px; margin-left: -350px; width:350px">
    <div class="card-body">
      <h5 class="card-title">AGRADECEMOS SEU CONTATO E OPINIÃO</h5>
      <p class="card-text ">Agradecemos sinceramente por compartilhar sua opinião em nosso site! Valorizamos seu tempo e dedicação para nos fornecer um feedback valioso. Suas palavras nos ajudam a melhorar continuamente nossos serviços e oferecer a melhor experiência possível aos nossos usuários.
      Saber que você está disposto a compartilhar suas ideias e impressões conosco é extremamente gratificante. Sua opinião é essencial para entendermos como estamos atendendo às suas necessidades e expectativas.
      Saiba que levamos suas palavras a sério e estamos comprometidos em aprimorar nossos produtos e serviços com base em seus comentários. Seu feedback é uma ferramenta essencial para nosso crescimento e sucesso.
      Mais uma vez, gostaríamos de expressar nossa sincera gratidão por sua participação ativa em nosso site. Esperamos continuar a fornecer um ambiente onde sua opinião seja valorizada e considerada. Se houver algo mais que possamos fazer para melhorar sua experiência, não hesite em nos informar. Estamos aqui para servir você.<br>
      Atenciosamente,<br>
      [Ysaac Rezende e João Rocha ]</p>
    </div>
</div>

    
</body>
</html>