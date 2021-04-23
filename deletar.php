<?php
	
	include 'classes/conexao.class.php';
	include 'classes/dao/usuarioDAO.class.php';
	include 'classes/entidade/classeUsuario.php';
	include "menu.php";

	$usuarioDAO = new usuarioDAO(); // Classe do DAO
	$usuario = new usuario(); // Entidades / Classes Usuario
?>

<!DOCTYPE html>
<html>
<head>
	<title>Deletar Usuário</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
</head>
<body>
	<div class="page-header" align="center">
		<h1>Login</h1>
		<h2><small>Página Administrativa</small></h2>	
	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Acesso ao Painel de Controle			
				</div>
				<div class="panel-body">
					<form action="#" method="POST">
						<div class="row">
							<div class="col-md-6">
								ID: <input type="text" name="id" required class="form-control"/>
							</div>
						</div>
				</div>
				<br>
				<input type="submit" name="deletar" value="Deletar" class="btn btn-outline-danger">
				<a class="btn btn-outline-primary" href="index.php" role="button">Home</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>

<?php

	if (isset($_POST['deletar'])) 
	{
		$usuario->setId($_POST['id']);
		$usuarioDAO->excluir($usuario);
		echo "<meta http-equiv = 'refresh' content='0'>";
	}

?>