<?php
session_start();

include '../connection/Connection.php';
include '../Functions.php';
$enviar = $_POST['enviar'];

if ($enviar) {
    $nome = $_POST['nome'];
    $crm = $_POST['crm'];
    $especialidade = $_POST['especialidade'];
    $uf = $_POST['estado'];

    $query = "insert into sismedico(nome,crm,especialidade,uf) values('$nome',$crm,'$especialidade','$uf')";
    $resultado = executarQuery($connection,$query);

    header('location: /SisTriagem/?pagina=medico');
    $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>Salvo com Sucesso! </div>";
}else{
    header('location: /SisTriagem/?pagina=medico');
    $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao Salvar os Dados! </div>";
}
