<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../materialize/css/materialize.min.css"/>
    <link rel="stylesheet" href="../estilo.css"/>
    <title>Clientes - tutorial</title>
</head>
<body>

    <?php
        include '../../model/conexao.php';
        $cli_id = filter_input(INPUT_GET, 'cli_id' , FILTER_DEFAULT);
        $sth = $pdo->prepare("select *from clientes where cli_id = :cli_id");
        $sth->bindValue(':cli_id' , $cli_id);
        $sth->execute();
        $data = $sth->fetch(PDO::FETCH_ASSOC);
        extract($data);
    ?>

    <nav class="indigo">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="select.php">Clientes</a></li>
                <li><a href="clientes.php">Novo</a></li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="card-panel">
            <h6>Cadastro de Clientes</h6>
            <form name="form_update_cliente" method="post">
                <div class="load"></div>
                <input type="hidden" name="cli_id" value="<?= $cli_id ?>"/>
                <div class="input-field">
                    <label> Nome </label>
                    <input type="text" name="cli_nome" value="<?= $cli_nome ?>">
                </div>
                <div class="input-field">
                    <label> Email </label>
                    <input type="text" name="cli_email" value="<?= $cli_email ?>">
                </div>
                <input class="btn indigo" type="submit" value="Atualizar">
            </form>
                <div class="msg"></div>
        </div>
    </div>
</body>

<script type="text/javascript" src="../../controller/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="../../materialize/js/materialize.min.js"></script>

<script type="text/javascript" src="../../controller/cliente.js"></script>>

</html>