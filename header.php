<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>SisTriagem</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="utf-8" http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

    <!--    <link rel="stylesheet" href="css/style.css">-->
    <!--    <link rel="stylesheet" href="css/bootstrap.min.css">-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="nav-link mx-auto" href="?pagina=home"><img src="imagens/Triagem.png" width="120px" height="120px"></a>
        <div class="col-md-6">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="navbar-brand" href="?pagina=home">Home</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                           role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">Cadastro</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="?pagina=cadastro_paciente">Paciente</a>
                            <a class="dropdown-item" href="?pagina=cadastro_medico">M??dico</a>
                            <a class="dropdown-item" href="?pagina=cadastro_usuario">Usu??rio</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                           role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">Consulta</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="?pagina=agendamento_consulta">Agendamentos de Consulta</a>
                            <a class="dropdown-item" href="?pagina=pesquisa_consulta">Pesquisar Consultas</a>
                            <a class="dropdown-item" href="?pagina=paciente">Consulta Paciente</a>
                            <a class="dropdown-item" href="?pagina=medico">Consulta M??dico</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


</header>
<?php
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
<div class="container">

