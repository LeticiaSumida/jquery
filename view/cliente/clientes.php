<?php
    session_start();
    if(!isset($_SESSION["Login"])){
        header("Location: ../");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/estilo.css"/>
    <title>Clientes - tutorial</title>
</head>
<body style="background-image: url('../img/fundo_cliente.png'); background-size: cover;">
    <nav class="navbar navbar-expand-lg rosa">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item text-light">
                        <a class="nav-link text-light" href="select.php">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Novo cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="sair.php">Sair</a>
                    </li>
                </ul>
            </div>
            <span class="navbar-text" style="margin-right: 5%">
                <img src="../img/patinha.png" width="50" height="50">
            </span>
        </div>
    </nav>

    <div class="container w-25">
        <div class="row align-items-center" style="min-height: 86.1svh">
            <div class="col-md-12 text-light d-flex justify-content-center arredondado rosa sombra">
                <div class="p-5">
                    <h5 class="text-center">Cadastro de Clientes</h5>
                    <br>
                    <form name="form_cliente">
                        <div class="load"></div>
                        <div class="form-group">
                            <label for="login">Nome</label>
                            <input class="w-100 arredondado" type="text" name="cli_nome" id="cli_nome" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="login">E-mail</label>
                            <input class="w-100 arredondado" type="email" name="cli_email" id="cli_email" required>
                        </div>
                        <br>
                        <input class="btn btn-md w-100 botao text-light" type="submit" value="Cadastrar" id="botaoEnviar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript" src="../../controller/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>

<script type="text/javascript" src="../../controller/cliente.js"></script>

</html>