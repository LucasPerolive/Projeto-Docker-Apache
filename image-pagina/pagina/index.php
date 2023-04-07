<!DOCTYPE html>

<?php
require('Calculadora.class.php');
$numero1 = @$_POST['numero1'];
$numero2 = @$_POST['numero2'];
$acao= @$_POST['acao'];
?>


<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link  href="css/bootstrap.css" rel="stylesheet">
    <title>Calculadora</title>
</head>
	<body class="p-3 mb-2 bg-dark text-white">
		<form method="POST" action="">
		 <center>
			<fieldset>
				<div class="p-3 mb-2 bg-dark text-white">
					<h1>Calculadora</h1>
					<h3>Insira 2 números para a operação desejada:</h3>
				</div>
				<hr>
				<div>
					<br>

					<div class="form-group row">
						<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Numero 1: </label>
						<div class="col-sm-10">
							<input type="text" name="numero1" id="numero1" class="form-control form-control-lg"><br><br>
						</div>

						<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Numero 2: </label>
						<div class="col-sm-10">
							<input type="text" name="numero2" id="numero2" class="form-control form-control-lg"><br><br>
						</div>
					</div>

					<button type="submit" class="btn btn-success" name="acao" value="soma" id="submit">Somar</button>
					<button type="submit" class="btn btn-success" name="acao" value="subtrai" id="submit">Subtrair</button>
					<button type="submit" class="btn btn-success" name="acao" value="multiplica" id="submit">Multiplicar</button>
					<button type="submit" class="btn btn-success" name="acao" value="divide" id="submit">Dividir</button>

					<br><br><br>
					<button type="submit" class="btn btn-danger" name="limpar">Limpar</button>
					<br><br><hr>
				</div>
			</fieldset>
		 </center>
		</form>

		<?php
			$obj = new Calculadora;
			echo("<center>");
			$obj->calcula($numero1, $numero2, $acao);
			$obj->confere_operacao($acao);
			if($acao != null){$obj->imprimi();}
			echo("</center>");
        ?>

	<script src="validacao.js"></script>
	</body>
</html>
