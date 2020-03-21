<!--Autora: Ludmyla Oliveira Soares
	Data: 22/10/2019
	Função: Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes).
-->
<!DOCTYPE html>
	<head>
		<title>PHP | Exercícios 04</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="estilo.css" rel="stylesheet">
	</head>
		<body>	
		<div>
			<!-- Início formulário para entrada e envio de dados -->
			<h1>Exercício 04</h1>
				<p class="paragrafo">Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes).</p>
			<p class="paragrafo2">
				<!-- Início conteúdo dinâmico para processamento de dados -->
				<?php
					//if(isset($POST['num'])) {verifica se o usuário digitou algum valor e submeteu no form.
					$num1 = $_POST['num1'];
					$num2 = $_POST['num2'];
					$num3 = $_POST['num3'];
					$numeros_ordenar = array($num1, $num2, $num3);
					rsort($numeros_ordenar);
						echo 'Número 1: '.$numeros_ordenar[0] . '<br/>';
						echo 'Número 2: '.$numeros_ordenar[1] . '<br/>';
						echo 'Número 3: '.$numeros_ordenar[2] . '<br/>';
				?>			
				<!-- Fim conteúdo dinâmico para processamento de dados -->
			</p>	
		</div>
				<!-- Link de retorno para html -->
			<div><a class="botao" href="exercicio04.html">Voltar</a></div>
			<!-- Fim formulário para entrada e envio de dados -->	
			</form>
		</div>
	</body>
</html>
			
		