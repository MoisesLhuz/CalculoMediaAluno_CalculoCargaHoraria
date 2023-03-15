<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Media</title>
</head>
<body>
	
	<form action="send.php" method="POST">
		<div>
			<label for="">Digite o nome do Aluno:</label>
			<input type="text" name="nameAluno" placeholder="Digite o nome do Aluno" required="">
		</div>
		<div>
			<label for="">Informe o % da Frequência do Aluno:</label>
			<input type="number" name="freqAluno" placeholder="Frequência" required="">
		</div>
		<div>
			<label for="">Informe a Primeira Nota do Aluno:</label>
			<input type="number" name="nota1" placeholder="Nota Numero 1" required="">
		</div>
		<div>
			<label for="">Informe a Segunda Nota do Aluno:</label>
			<input type="number" name="nota2" placeholder="Nota Numero 2" required="">
		</div>
		<div>
			<label for="">Informe a Terceira Nota do Aluno:</label>
			<input type="number" name="nota3" placeholder="Nota Numero 3" required="">
		</div>
		<div>
			<button type="submit">Enviar Dados</button>
		</div>	
	</form>
	

</body>
</html>