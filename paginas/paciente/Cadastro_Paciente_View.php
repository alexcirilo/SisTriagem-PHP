<?php

if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

?>
<form action="controller/paciente/cadastro_paciente.php" method="post" id="cadastro_paciente">
    <div class="container">
        <div class="text-md-center">
            <h2>Cadastro de Paciente <img src="imagens/cadPacientes.png" class="img-thumbnail" alt="paciente"></h2>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group col-md-8">
                    <h5>Dados Pessoais</h5>
                    <label class="col-form-label">Nome:</label>
                    <input required class="form-control" placeholder="Nome do Paciente" type="text" name="nome">
                </div>
                <div class="form-group col-md-8">
                    <label class=col-form-label">CPF: </label>
                    <input required type="text" class="form-control cpf" name="cpf" placeholder="Ex.: 000.000.000-00">
                </div>
                <div class="form-group col-md-8">
                    <label>Nascimento</label>
                    <input type="date" class="form-control" name="nascimento">
                </div>
                <div class="form-group col-md-8">
                    <label>Sexo</label>
                    <select class="form-control-sm" name="sexo">
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>
                <div class="form-group col-md-8">
                    <label for="capital">Capital? </label>
                    <input type="checkbox" name="capital" title="Capital ?">
                </div>
            </div>

            <div class="col-md-4">
                <?php include __DIR__ . "/endereco.php"; ?>
            </div>

            <div class="col-md-4">
                <?php include __DIR__ . "/contato.php"; ?>
            </div>

        </div>
    </div>
    <hr/>

    <div class="container">
        <input type="submit" class="btn btn-success" name="enviar">
    </div>
</form>