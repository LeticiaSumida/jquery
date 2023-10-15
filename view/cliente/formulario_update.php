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

    <?php
        include '../../model/conexao.php';
        $cli_id = filter_input(INPUT_GET, 'cli_id' , FILTER_DEFAULT);
        $sth = $pdo->prepare("select *from clientes where cli_id = :cli_id");
        $sth->bindValue(':cli_id' , $cli_id);
        $sth->execute();
        $data = $sth->fetch(PDO::FETCH_ASSOC);
        extract($data);
    ?>

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
        </div>
    </nav>

    <div class="container w-50">
        <div class="row align-items-center" style="min-height: 90vh">
            <div class="col-md-12 bg-secondary text-light d-flex justify-content-center">
                <div class="p-5">
                    <h5 class="text-center">Atualizar cliente</h5>
                    <br>
                    <form name="form_update_cliente" method="post">
                        <div class="load"></div>
                        <input type="hidden" name="cli_id" value="<?= $cli_id ?>"/>
                        <div class="form-group">
                            <label for="login">Nome</label>
                            <input class="w-100" type="text" name="cli_nome" value="<?= $cli_nome ?>" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="login">E-mail</label>
                            <input class="w-100" type="email" name="cli_email" value="<?= $cli_email ?>" required>
                        </div>
                        <br>
                        <input class="btn btn-primary btn-md w-100" type="submit" value="Atualizar">
                    </form>
                    <div class="msg"></div>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript" src="../../controller/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>

<script type="text/javascript" src="../../controller/cliente.js"></script>

</html>