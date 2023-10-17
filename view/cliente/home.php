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
    <title>Home - tutorial</title>
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
                        <a class="nav-link text-dark" aria-current="page" href="#">Home</a>
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
    <div class="container">
        <div class="row align-items-center" style="min-height: 86.1svh">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="p-4">
                    <?php
                        echo "<h2>Bem vindo " . $_SESSION['Login']['nome'] . "</h2>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript" src="../../controller/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>

</html>