<?php
    
    include "classes/conexao.class.php";
    include "classes/dao/usuarioDao.class.php";
    include "classes/entidade/classeUsuario.php";
    include "menu.php";

    $usuarioDao = new usuarioDAO();
    $usuario = new usuario();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Consulta de Dados</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
</head>
<body style="background-image: url(img/watch-dogs2.jpg);">
	<section class="container">
	<table class="table" id="table" style="background: black; color: orange; opacity: 0.8;">
		<thead style="color: green;">
			<tr style="color: green;">
				<th style="color: green;">ID</th>
				<th style="color: green;">NOME</th>
				<th style="color: green;">SENHA</th>
			</tr>
		</thead>
		<?php

			foreach ($usuarioDao->busca() as $row) 
			{
				?>
				<tbody>
					<tr>
						<td> <?php echo $row["idUsuario"]; ?> </td>
						<td> <?php echo $row['nomeUsuario']; ?> </td>
						<td> <?php echo $row['senhaUsuario']; ?> </td>
					</tr>
				</tbody>

				<?php
			}

			?>
	</table>
	</section>
</body>
</html>