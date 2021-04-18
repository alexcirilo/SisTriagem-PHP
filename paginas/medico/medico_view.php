<?php
include "connection/Connection.php";
include_once ('Functions.php');

$query = "select * from sismedico";
$busca = mysqli_query($connection,$query);


if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

?>

    <table class="table" id="medico">
        <div class="container">

        <h2 style="text-align: center">Relação de Pessoas</h2>
        <hr/>
        <thead class="thead-dark">
        <tr>
            <th>Médico</th>
            <th>Especialidade</th>
            <th>CRM</th>
            <th colspan="2">Ações</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php while ($linha = mysqli_fetch_array($busca)) { ?>
                <td><?= $linha['nome']; ?></td>
                <td><?= $linha['especialidade'] ?></td>
                <td><?= $linha['crm'] ?></td>
                <td><a href=""> Editar</a></td>
                <td><a href="">Excluir</a></td>
            <?php } ?>
        </tr>
        </tbody>
</div>
</table>