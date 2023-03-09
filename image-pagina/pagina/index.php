<html>
<head>
    <meta charset="UTF-8">
    <link  href="css/bootstrap.css" rel="stylesheet">
    <title>Calculadora</title>
</head>
	<body>
		<form method="POST" action="Calculo.php">
		 <center>
			<fieldset>
				<legend>Calculadora</legend>
				<h3>Insira 2 números para a operação desejada:</h3>
				Número 1:<input type="text" name="n1"><br><br>
				Número 2:<input type="text" name="n2"><br><br>
				<button type="submit" class="btn btn-primary" name="acao" value="soma">Somar</button>
				<button type="submit" class="btn btn-primary" name="acao" value="subtrai">Subtrair</button>
				<button type="submit" class="btn btn-primary" name="acao" value="multiplica">Multiplicar</button>
				<button type="submit" class="btn btn-primary" name="acao" value="divide">Dividir</button>
			</fieldset>
		 </center>
		</form>
	</body>
</html>
