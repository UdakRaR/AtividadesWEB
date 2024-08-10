<?php require("cabecalho.php"); ?>
<h1>Exercício 1</h1>
<form action="exer1.php" method="post">
    <div class="row">
        <div class="col">
            <label for="horas_trabalhadas" class="form-label">
                Informe as horas trabalhadas no mes:
            </label>
            <input type="time" name="horas_trabalhadas" id="horas_trabalhadas" class="form-control"/>
        </div>
        <div class="col">
            <label for="valor_hora" class="form-label">
                Informe o valor da hora trabalhada:
            </label>
            <input type="int" name="valor_hora" id="valor_hora" class="form-control"/>
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
        $horas_trabalhadas = new DateTime($_POST['horas_trabalhadas']);
        $valor_hora = new Integer($_POST['valor_hora']);
    }

    require("rodape.php"); ?>