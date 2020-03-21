<!--Autora: Ludmyla Oliveira Soares
	Data: 07/11/2019
	Contato: ola@ludmylasoares.site
	Função: Armazenar 15 números inteiros em um vetor e imprimir uma mensagem contendo o número e uma das mensagens: par ou ímpar. -->

<!DOCTYPE html>
	<head>
		<title>PHP | Exercícios 16</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="estilo.css" rel="stylesheet">
	</head>
	<body>	
		<div>
			<!-- Início formulário para entrada e envio de dados -->
			<h1>Exercício 16</h1>
				<p class="paragrafo">Armazenar 15 números inteiros em um vetor e imprimir uma mensagem contendo o número e uma das mensagens: par ou ímpar.</p>
					<p class="paragrafo"> 
						<p <a class="paragrafo2">Números armazenados: 2, 3, 5, 56, 108, 99, 11, 240, 77, 37, 12, 1, 0, 23, 52. </a> </p>
						<p class="paragrafo2"> 
					<!-- Início conteúdo dinâmico para processamento de dados -->
					<?php
						$vetor = array("2","3","5","56","108","99","11","240","77","37","12","1","10","23","52");
							foreach ($vetor as $t){
								echo "O número " . $t . " é " . ($t % 2 == 0 ? " par!" : " ímpar!") . "<br/>";
						}
					?>			
						<!-- Fim conteúdo dinâmico para processamento de dados -->	
						</p>
							<!-- Link de retorno para html -->
							<div><a class="botao" href="exercicio16.html">Voltar</a></div>
							<!-- Fim formulário para entrada e envio de dados -->	
			</form>
		</div>
	</body>
</html>