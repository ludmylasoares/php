<!--Autora: Ludmyla Oliveira Soares
	Data: 24/10/2019
	Função: Criar um algoritmos que imprima a tabuada de um número.
-->
<!DOCTYPE html>
	<head>
		<title>PHP | Exercícios 11</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="estilo.css" rel="stylesheet">
	</head>
	<body>	
		<div>
			<!-- Início formulário para entrada e envio de dados -->
			<h1>Exercício 11</h1>
					<p class="paragrafo">Criar um algoritmos que imprima a tabuada de um número.</p>
					</p>
				<p class="paragrafo2">
					<!-- Início conteúdo dinâmico para processamento de dados -->
						<?php
							$num = $_POST["num"];
							for($i = 1; $i <= 10; $i++):
								$res = $i * $num; 
								echo "$i x $num =  $res <br/>";   
							endfor;
						?></p>			
					<!-- Fim conteúdo dinâmico para processamento de dados -->	
					<!-- Link de retorno para html -->
				<div><a class="botao" href="exercicio11.html">Voltar</a></div>
				<!-- Fim formulário para entrada e envio de dados -->	
			</form>
		</div>
	</body>
</html>