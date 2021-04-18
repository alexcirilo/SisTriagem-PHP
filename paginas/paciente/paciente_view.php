<?php
include "connection/Connection.php";
include 'Functions.php';

$query = "select * from sispessoa";
$busca = mysqli_query($connection, $query);


if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

?>

<table class="table" id="paciente">
    <div>
        <h2 style="text-align: center">Relação de Pessoas</h2>
        <hr/>
        <thead class="thead-dark">
        <tr>
            <th>Nome</th>
            <th>Nascimento</th>
            <th>Sexo</th>
            <th>Capital</th>
            <th colspan="2">Ações</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php while ($linha = mysqli_fetch_array($busca)) { ?>
                <td><?= $linha['nome']; ?></td>
                <td><?= date("d/m/Y", strtotime($linha['nascimento'])) ?></td>
                <td><?= sim_nao($linha['sexo']) ? "Masculino" : "Feminino" ?></td>
                <td><?= sim_nao($linha['capital']) ?></td>
                <td><a href=""> Editar</a></td>
                <td><a href="">Excluir</a></td>
            <?php } ?>
        </tr>
        </tbody>
    </div>
</table>