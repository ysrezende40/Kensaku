<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
require_once('script.js');


?>
<body>
<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de caixa que mostra informações ao clicar</title>
	<style>
		.box {
			width: 200px;
			height: 100px;
			background-color: #f2f2f2;
			border: 1px solid #ccc;
			padding: 10px;
			cursor: pointer;
		}
		.info {
			display: none;
			background-color: #fff;
			border: 1px solid #ccc;
			padding: 10px;
			margin-top: 5px;
            width: 500px;
            height: 100px;
		}
	</style>
</head>
<body>

	<div class="box" onclick="mostrarInfo()">Clique aqui para ver informações</div>

	<div class="info" id="info">
		<p>Algumas informações sobre algo interessante.</p>
	</div>

	<script>
		function mostrarInfo() {
			var info = document.getElementById("info");
			if (info.style.display === "none") {
				info.style.display = "block";
			} else {
				info.style.display = "none";
			}
		}
	</script>

</body>
</html>

    
</body>
</html>