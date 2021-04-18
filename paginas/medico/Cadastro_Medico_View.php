<form action="controller/cadastro_medico.php" method="post" id="cadastro_medico">
    <div class="container text-md-center">
        <h2>Cadastro de Médico <img class="img-thumbnail" src="imagens/CadMedicos.png"></h2>
    </div>
    <br>
    <div class="row">
        <div class="container form-group col-6">
            <div class="container">
                <label>Nome</label>
                <input class="form-control" name="nome" type="text" required>
            </div>
            <div class="container">
                <label>CRM</label>
                <input class="form-control col-md-5" type="text" name="crm" required>
            </div>
        </div>
        <div class="container form-group col-6">
            <div class="container">
                <label>Especialidade: </label>
                <select class="custom-select" name="especialidade" required>
                    <option value="TO">Terapia Ocupacional</option>
                    <option value="Psicoterapeuta">Psicoterapeuta</option>
                    <option value="Psicólogo">Psicólogo</option>
                    <option value="Psicanalista">Psicanalista</option>
                </select>
            </div>
            <div class="container">
                <label>UF</label>
                <select class="custom-select" name="estado">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>
        </div>
    </div>
    <hr/>
    <div class="container">
        <input class="btn btn-success" name="enviar" value="Salvar" type="submit">
    </div>
</form>