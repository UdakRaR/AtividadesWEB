<?php require("cabecalho.php"); ?>
<h1>Exercício 1</h1>
<form action="exer1.php" method="post">
    <div class="row">
        <div class="col">
            <label for="lucro_empresa" class="form-label">
                Informe o lucro da empresa:
            </label>
            <input type="int" name="lucro_empresa" id="lucro_empresa" class="form-control"/>
        </div>
        <div class="col">
            <label for="nome_funcionario" class="form-label">
                Informe o nome do funcionario:
            </label>
            <input type="string" name="nome_funcionario" id="nome_funcionario" class="form-control"/>
        </div>
        <div class="col">
            <label for="nota_funcionario" class="form-label">
                Informe a nota do funcionario:
            </label>
            <input type="int" name="nota_funcionario" id="nota_funcionario" class="form-control"/>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-danger">Calcular</button>
        </div>
    </div>
</form>

<?php 
    if ($_POST){
        $lucro_empresa = new Integer($_POST['lucro_empresa']);
        $nome_funcionario =  String $_POST['nome_funcionario'];
        $nota_funcionario =  Integer $_POST['nota_funcionario'];
    }

    require("rodape.php"); ?>