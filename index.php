<?php
    
    include 'classes/conexao.class.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Watch Dogs 2</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/estilo_css/estilo.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </head>
    <body style="background: url(img/watch-dogs2.jpg);">
        <section class="container-fluid">
            <div class="jumbotron">
                <h1 class="display-4">Wacth Dogs 2</h1>
                <p class="lead"> Sistema Administrativo - DedSec</p>
                <hr class="my-4">
                <p>Cadastro | Consulta | Exclusão | Atualização de Dados</p>
                <div class="btn-group">
                <button type="button" class="btn btn-success">Ação</button>
                <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="cadastro.php">Cadastro</a>
                    <a class="dropdown-item" href="consulta.php">Consulta</a>
                    <a class="dropdown-item" href="deletar.php">Excluir</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="alterar.php">Atualizar</a>
                </div>
                </div>
            </div>
        </section>

        <section class="container">
        <div class="row">
            <div class="card" style="width: 16rem">
                <img class="card-img-top" src="img/watch-dogs2.png" alt="Imagem de Capa do Card" title="Watch Dogs 2">
                <div class="card-body">
                    <h5 class="card-title">Entrar Para o DedSec</h5>
                    <p class="card-text">Watch Dogs 2</p>

                    <!-- Exemplo de único botão Primary -->
                    <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Fazer Cadastros
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="cadastro.php">Cadastro</a>
                    </div>
                    </div>
                </div>
            </div>
        
            
            <div class="row">
            <div class="card" style="width: 16rem">
                <img class="card-img-top" src="img/watch-dogs3.jpg" alt="Imagem de Capa do Card">
                <div class="card-body">
                    <h5 class="card-title">Consultar Dados</h5>
                    <p class="card-text">Ctos</p>
                    <!-- Exemplo de único botão Success -->
                    <div class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Consultar Dados
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="consulta.php">Consultar</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card" style="width: 16rem">
                <img class="card-img-top" src="img/watch-dogs4.jpg" alt="Imagem de Capa do Card">
                <div class="card-body">
                    <h5 class="card-title">Excluir</h5>
                    <p class="card-text">Equipe Watch Dogs</p>

                    <!-- Exemplo de botão danger dividido -->
                    <div class="btn-group">
                    <button type="button" class="btn btn-danger">Excluir Dados</button>
                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="deletar.php">Deletar</a>
                    </div>
                    </div>
                </div>
            </div>

            <div class="row">
            <div class="card" style="width: 16rem">
                <img class="card-img-top" src="img/dedsec.jpg" alt="Imagem de Capa do Card">
                <div class="card-body">
                    <h5 class="card-title">Atualizar Base Dados</h5>
                    <p class="card-text">DedSec</p>
                    <!-- Exemplo de botão danger dividido -->
                    <div class="btn-group">
                    <button type="button" class="btn btn-info">Alterar Dados</button>
                    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="alterar.php">Alterar</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>    
        </section>
    </body>
</html>