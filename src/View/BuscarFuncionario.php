<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Buscar Funcionarios</title>
    <meta name="author" content="Gabrielle">
    <link rel="icon" href="imagens/hogwarts.png">

    <!-- Responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap  -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/buscar.css">

	<!-- Icones decorativos-->
    <script src="https://kit.fontawesome.com/63cd9f4730.js"></script>
</head>
<body>
	<div class = "Titulo">
		<h1>Buscar Funcionário</h1>
	</div>
	<main>
		<div>
			<!-- Código do input buscar-->
			<form method="POST" action="../Controller/controller_BuscarFuncionario.php" class = "form-dark">
				<div class="input-group mb-3 col-sm-6 barraPesquisa">
					<input type="text" name="nome" class="form-control " placeholder="Você jura solenemente não fazer nada de bom?" aria-label="Recipient's username" aria-describedby="button-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
					</div>
				</div>
			</form>
		</div>
	</main>
	<?php
		if(!empty($_SESSION['buscafun'])){ //se a busca não estiver vazia 

			if($_SESSION['buscafun']=='nada'){ // caso não haver nenhum resultadp
				echo "nenhum usuario encontrado"; 
			}
			else{
				echo $_SESSION['buscafun']; //retorna
				
				unset($_SESSION['buscafun']);
			}
		}
	
	
	?>	
	<?php
		if(!empty($_SESSION['excluiufun'])){
			echo $_SESSION['excluiufun'];
			unset($_SESSION['excluiufun']);
		}
	?>
	<?php
		if(!empty($_SESSION['alteradofun'])){
			echo $_SESSION['alteradofun'];
			unset($_SESSION['alteradofun']);
		}
	?>
</body>
</html>