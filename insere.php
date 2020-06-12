

<html>
	<head>
		<title>Contato</title>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script type="text/javascript" src='jquery-3.5.1.js'></script>
		<script type="text/javascript" src='script.js'></script>
		<script type="text/javascript" async src="https://tenor.com/embed.js"></script>
		
		<link rel="stylesheet" href="style.css" >
	</head>

	<body>
		<nav class="navbar navbar-dark" style='background-color:#310D4A'>
			<a class='btn' href='index.html'>HOME</a>
			<a class='btn' href='tekusa_game.html'>TEKUSA</a>
			<a class='btn' href='sliding_simulator.html'>SLIDING SIMULATOR</a>
			<a class='btn' href='contato.html'>CONTATO</a>
		</nav>

		
		<div class = 'container'>
		<h6>
			<?php
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$assunto = $_POST['assunto'];
			$mensagem = $_POST['mensagem'];
			
			$con = mysqli_connect('sql10.freesqldatabase.com:3306','sql10347687','BU2IfltPWx') or die ("Falha na conexão!");
			mysqli_select_db($con,'sql10347687') or die("Alguma coisa deu ruim");
			
			$query = "INSERT INTO Feedbacks (NOME,EMAIL,ASSUNTO,MENSAGEM) VALUES ('$nome','$email','$assunto','$mensagem');";
			$ok = mysqli_query($con,$query);
			if($ok){
				echo "Feedback enviado com sucesso!!!";
			}else{
				echo "Mmm... deu algum erro...";
			}

			mysqli_close($con);
		?>
		</h6>	

		<a class='btn' style = 'background-color:#764896; padding:10px;'href='contato.html'>VOLTAR</a>		
		</div>
		
		
	</body>
	
</html>