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
        </div>
    </nav>

    <div class="container w-50">
        <div class="row align-items-center" style="min-height: 90vh">
            <div class="col-md-12 bg-secondary text-light d-flex justify-content-center">
                <div class="p-5">
                    <h5 class="text-center">Cadastro de Clientes</h5>
                    <br>
                    <form name="form_cliente">
                        <div class="load"></div>
                        <div class="form-group">
                            <label for="login">Nome</label>
                            <input class="w-100" type="text" name="cli_nome" id="cli_nome" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="login">E-mail</label>
                            <input class="w-100" type="email" name="cli_email" id="cli_email" required>
                        </div>
                        <br>
                        <input class="btn btn-primary btn-md w-100" id="botaoEnviar" type="submit" value="Cadastrar">
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