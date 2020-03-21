<!--Autora: Ludmyla Oliveira Soares
	Data: 05/11/2019
	Contato: ola@ludmylasoares.site
	Função: Na usina de Angra dos Reis, os técnicos analisam a perda de massa de um material radioativo. Sabendo-se que este perde 25% de sua massa a cada 30 segundos, criar um algoritmos que imprima o tempo necessário para que a massa desse material seja menor que 0.10.
-->
<!DOCTYPE html>
	<head>
		<title>PHP | Exercícios 15</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="estilo.css" rel="stylesheet">
	</head>
	<body>	
		<div>
			<!-- Início formulário para entrada e envio de dados -->
			<h1>Exercício 15</h1>
				<p class="paragrafo">Na usina de Angra dos Reis, os técnicos analisam a perda de massa de um material radioativo. Sabendo-se que este perde 25% de sua massa a cada 30 segundos, criar um algoritmos que imprima o tempo necessário para que a massa desse material seja menor que 0.10.</p>
					<p class="paragrafo2">
					<!-- Início conteúdo dinâmico para processamento de dados -->
					<?php
						$massa = $_POST['num'];
						$segundos = 0;                                           ;
						$perda = 0.25;
						$meta = 0.10;
						while($massa >= $meta)
							{
							$massa = ($massa * $perda);
							$segundos = $segundos + 30;
							$minutos = ($segundos/60);
							}
							echo ("Massa material em gramas: " . $_POST['num'] . "! O tempo necessário para a massa atingir 0.10 gramas será de $segundos segundos ou $minutos minutos!" );
					?>			
						<!-- Fim conteúdo dinâmico para processamento de dados -->	
						</p>
							<!-- Link de retorno para html -->
							<div><a class="botao" href="exercicio15.html">Voltar</a></div>
							<!-- Fim formulário para entrada e envio de dados -->	
			</form>
		</div>
	</body>
</html>