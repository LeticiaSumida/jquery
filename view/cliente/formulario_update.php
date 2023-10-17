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

    <?php
        include '../../model/conexao.php';
        $cli_id = filter_input(INPUT_GET, 'cli_id' , FILTER_DEFAULT);
        $sth = $pdo->prepare("select *from clientes where cli_id = :cli_id");
        $sth->bindValue(':cli_id' , $cli_id);
        $sth->execute();
        $data = $sth->fetch(PDO::FETCH_ASSOC);
        extract($data);
    ?>

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
                        <a class="nav-link text-light" href="clientes.php">Novo cliente</a>
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
                    <h5 class="text-center">Atualizar cliente</h5>
                    <br>
                    <form name="form_update_cliente" method="post">
                        <div class="load"></div>
                        <input type="hidden" name="cli_id" value="<?= $cli_id ?>"/>
                        <div class="form-group">
                            <label for="login">Nome</label>
                            <input class="w-100 arredondado" type="text" name="cli_nome" value="<?= $cli_nome ?>" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="login">E-mail</label>
                            <input class="w-100 arredondado" type="email" name="cli_email" value="<?= $cli_email ?>" required>
                        </div>
                        <br>
                        <input class="btn btn-md w-100 botao text-light" type="submit" value="Atualizar" id="botaoEnviar">
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