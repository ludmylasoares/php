<!--Autora: Ludmyla Oliveira Soares
	Data: 28/10/2019
	Contato: ola@ludmylasoares.site
	Função:  Chico tem 1,50m e cresce 2 centímetros por ano, enquanto Juca tem 1,10m e cresce 3 centímetros por ano. Construir um algoritmos que calcule e imprima 
	quantos anos serão necessários para que Juca seja maior que Chico.
-->
<!DOCTYPE html>
	<head>
		<title>PHP | Exercícios 14</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="estilo.css" rel="stylesheet">
	</head>
	<body>	
		<div>
			<!-- Início formulário para entrada e envio de dados -->
			<h1>Exercício 14</h1>
				<p class="paragrafo">Chico tem 1,50m e cresce 2 centímetros por ano, enquanto Juca tem 1,10m e cresce 3 centímetros por ano. Construir um algoritmos que calcule e imprima 	quantos anos serão necessários para que Juca seja maior que Chico.</p>
				<p class="paragrafo2">
					<!-- Início conteúdo dinâmico para processamento de dados -->
					<?php
						$chico = 150;
						$juca = 110;
						$anos = 0;
							while ($chico>=$juca) {

							$chico = $chico + 2;
							$juca = $juca + 3;
							$anos = $anos + 1; }
							
							echo "Necessários " . $anos . " anos para Juca ficar maior do que Chico!";
					?>			
					<!-- Fim conteúdo dinâmico para processamento de dados -->	
						</p>
							<!-- Link de retorno para html -->
							<div><a class="botao" href="exercicio14.html">Voltar</a></div>
							<!-- Fim formulário para entrada e envio de dados -->	
			</form>
		</div>
	</body>
</html>