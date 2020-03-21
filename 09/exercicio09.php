<!--Autora: Ludmyla Oliveira Soares
	Data: 22/10/2019
	Função: Entrar com o número de vezes que se deseja imprimir a palavra SOL e imprimir.
-->
<!DOCTYPE html>
	<head>
		<title>PHP | Exercícios 09</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="estilo.css" rel="stylesheet">
	</head>
	<body>	
		<div>
			<!-- Início formulário para entrada e envio de dados -->
			<h1>Exercício 09</h1>
				<p class="paragrafo">Entrar com o número de vezes que se deseja imprimir a palavra SOL e imprimir.</p>
				<p class="paragrafo2">
					<!-- Início conteúdo dinâmico para processamento de dados -->
						<?php
						//if(isset($POST['num'])) {verifica se o usuário digitou algum valor e submeteu no form.
						 $num = $_POST["num"];
						 {
							echo str_repeat("SOL <br/>", $num);
						 }	
						?></p>			
					<!-- Fim conteúdo dinâmico para processamento de dados -->	
					<!-- Link de retorno para html -->
				<div><a class="botao" href="exercicio09.html">Voltar</a></div>
				<!-- Fim formulário para entrada e envio de dados -->	
			</form>
		</div>
	</body>
</html>