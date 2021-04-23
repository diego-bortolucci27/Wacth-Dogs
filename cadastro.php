<?php
    
    include "classes/conexao.class.php";
    include "classes/dao/usuarioDao.class.php";
    include "classes/entidade/classeUsuario.php";

    $usuarioDao = new usuarioDAO();
    $usuario = new usuario();
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Usuario</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </head>
    <body style="font-family: 'Berlin Sans FB'; background-image: url(img/watch-dogs8.jpg);">
        <section class="container-fluid">
            <div class="jumbotron">
                <h1 class="display-4">Watch Dogs 2</h1>
                <p class="lead"> Sistema Administrativo - DedSec</p>
                <hr class="my-4">
                <p>Cadastro | Consulta | Exclusão | Atualização de Dados</p>
                <div class="btn-group">
                <button type="button" class="btn btn-success">Ação</button>
                <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="index.php">Incio</a>
                    <a class="dropdown-item" href="consulta.php">Consulta</a>
                    <a class="dropdown-item" href="deletar.php">Excluir</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="alterar.php">Atualizar</a>
                </div>
                </div>
            </div>
        </section>
        <section class="container">
    <body>
        <div class="page-header" align="center">
            <h1 style="background: black; opacity: 0.8; color: green;">Cadastro:</h1>
            <h2 style="background: black; opacity: 0.8; color: green;">Faça parte do DedSec</h2>
        </div>
        <div class="row"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                Cadastro
            </div>
            <div class="panel-body">
                <form action="#" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <p style="background: black; opacity: 0.8; color: green; font-family: Berlin Sans FB; font-size: 15pt;">Nome Completo <input type="text" name="nome" required class="form-control"/></p>
                        </div>
                        <div class="col-md-6">
                            <p style="background: black; opacity: 0.8; color: green; font-family: Berlin Sans FB; font-size: 15pt;">Senha:<input type="password" name="senha" required class="form-control"></p>
                        </div>

                    </div>
                    <br />
                    <input type="submit" name="gravar" value="Gravar" class="btn btn-sucess">
                    <a href="index.php" class="btn btn-primary">Home</a>
                </form>

            </div>
        </div>
    </section>
    </body>
</html>

<?php
    
    if (isset($_POST['gravar'])) 
    {
        $usuario->setNome($_POST['nome']);
        $usuario->setSenha($_POST['senha']);
        $usuarioDao->inserir($usuario);
    }

?>