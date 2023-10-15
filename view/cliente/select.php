<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/estilo.css"/>
    <title>Clientes - tutorial</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <!--<a class="navbar-brand" href="#">Navbar</a>-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item text-light">
                        <a class="nav-link text-dark" href="#">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="clientes.php">Novo cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="sair.php">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 5vh;">
        <div class="load"></div>
        <?php

        include '../../model/conexao.php';

        $sth = $pdo->prepare("select *from clientes order by cli_id DESC");
        $sth->execute();

        echo '<h6 class="bg-danger p-2 w-25 mx-auto text-center">' . $sth->rowCount(); if($sth->rowCount() == 1){ echo " Cliente cadastrado"; } else{ echo " Clientes cadastrados"; } echo '</h6>';
        echo '<br>';
        echo '<table class="table table-striped">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col"> <b> Nome </b> </th>';
        echo '<th scope="col"> <b> E-mail </b> </th>';
        echo '<th scope="col"> <b> Editar </b> </th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($sth as $res) {
            extract($res);
            echo '<tr>';
            echo '<td>' . $cli_nome . '</td>';
            echo '<td>' . $cli_email . '</td>';
            echo '<td>';
            echo '<a href="#" class="deleteClientes" cli_id=' . $cli_id . ' "> Excluir </a>';
            echo ' / ';
            echo '<a href="formulario_update.php?cli_id=' . $cli_id . ' "> Editar </a>';
            echo '<div class="msg" cli_id=' . $cli_id . '></div>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        ?>
    </div>
</body>

<script type="text/javascript" src="../../controller/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>

<script type="text/javascript" src="../../controller/cliente.js"></script>

</html>