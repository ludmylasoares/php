<!--Autora: Ludmyla Oliveira Soares
	Data: 17/10/2019
	Função: Construir um algoritmo que leia 2 números e efetue a adição;
	caso o valor somado seja maior que 20, este deverá ser apresentado somando-se a ele mais 8 e;
	caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5.
-->
<!DOCTYPE html>
	<head>
		<title>PHP | Exercícios 01</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="estilo.css" rel="stylesheet">
	</head>
		<body>	
		<div>
			<!-- Início formulário para entrada e envio de dados -->
			<h1>Exercício 01</h1>
				<p class="paragrafo">Construir um algoritmo que leia 2 números e efetue a adição: </p>
				a.) Caso o valor somado seja maior que 20, este deverá ser apresentado somando-se a ele mais 8 e; </p>
				b.) Caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5.</p> 
		</div>
		<div>
			<p class="paragrafo2">
				<!-- Início conteúdo dinâmico para processamento de dados -->
				<?php
					$num1 = $_POST['num1'];
					$num2 = $_POST['num2'];
					$soma = $num1 + $num2;
					$limite = 20;
					$a = 8;
					$b = 5;
					$result1 = $soma + $a;
					$result2 = $soma - $b;
					
						if ($soma > $limite)
						{
							echo "Soma = $soma. Resultado $result1!";
						}	
						else 
						{
							echo "Soma = $soma. Resultado $result2!";
						}
				?>
				<!-- Fim conteúdo dinâmico para processamento de dados -->
			</p>	
		</div>
				<!-- Link de retorno para html -->
			<div><a class="botao" href="exercicio01.html">Voltar</a></div>
			<!-- Fim formulário para entrada e envio de dados -->	
			</form>
		</div>
	</body>
</html>
			
		