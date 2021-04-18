<?php
session_start();
include "../connection/Connection.php";
require "../Functions.php";

$enviar = filter_input(INPUT_POST, 'enviar', FILTER_SANITIZE_STRING);

if ($enviar) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $nascimento = $_POST['nascimento'];
    $sexo = isset($_POST['sexo']) ? 1 : 0;
    $capital = isset($_POST['capital']) ? 1 : 0;

    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $logradouro = $_POST['logradouro'];
    $num = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $complemento = $_POST['complemento'];

    $tipo = $_POST['tipo'];
    $numero_telefone = $_POST['numero_telefone'];
    $email = $_POST['email'];

    $query = "insert into sispessoa(nome,cpf,nascimento,sexo,capital) values ('{$nome}','{$cpf}','{$nascimento}','{$sexo}','{$capital}')";
    $pessoa = mysqli_query($connection, $query);

//var_dump($query);
    $query = "select * from sispessoa";
    $busca = mysqli_query($connection, $query);

    while ($linha = mysqli_fetch_array($busca)) {


        $query = "insert into sisendereco(logradouro,numero_endereco,bairro,cidade,complemento,cep,pessoa_id) values ('{$logradouro}','{$num}','{$bairro}','{$cidade}','{$complemento}','{$cep}',{$linha['id']})";
        $endereco = mysqli_query($connection, $query);

        $query = "insert into siscontato (tipo,numero_contato,email,pessoa_id) values ('{$tipo}','{$numero_telefone}','{$email}',{$linha['id']})";
        $contato = mysqli_query($connection, $query);
    }
    header('location: /SisTriagem/?pagina=paciente');
    $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>Salvo com Sucesso! </div>";

} else {
//    header('location: /SisTriagem?/pagina=paciente');
//    $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao Salvar os Dados! </div>";
}
