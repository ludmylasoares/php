<!--Autora: Ludmyla Oliveira Soares
	Data: 07/11/2019
	Contato: ola@ludmylasoares.site
	Função: Criar um vetor com 20 elementos inteiros. Imprimir o maior e o menor, sem ordenar, o percentual de números pare e média dos elementos do vetor. -->

<!DOCTYPE html>
	<head>
		<title>PHP | Exercícios 18</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="estilo.css" rel="stylesheet">
	</head>
	<body>	
		<div>
			<!-- Início formulário para entrada e envio de dados -->
			<h1>Exercício 18</h1>
				<p class="paragrafo">Criar um vetor com 20 elementos inteiros. Imprimir o maior e o menor, sem ordenar, o percentual de números pare e média dos elementos do vetor. </p>
					<p><a class="paragrafo2">Números inteiros: 2, 3, 5, 56, 108, 99, 11, 240, 77, 37, 12, 1, 0, 23, 52, 152, 19, 69, 48, 600. </a></p> <!--<input type="number" name="num" step="0.01" >-->
					<p class="paragrafo2"> 
					<!-- Início conteúdo dinâmico para processamento de dados -->
					<?php
						$vetor = array("2", "3", "5", "56", "108", "99", "11", "240", "77", "37", "12", "1", "0", "23", "52", "152", "19", "69", "48", "600");
						$contador = 0;
							echo "Maior valor: " . max($vetor) . ".";
							echo "<br/> Menor valor: " . min($vetor) . ". <br/>";
								foreach ($vetor as $item) {
									if ($item % 2 == 0) {
										$contador++;			
									}
								}
								if (($contador/20) * 100); { //percentual de números pares.
									echo "Porcentagem de números pares: $contador%. <br/>";
								}
								if ($media = ARRAY_SUM($vetor)/20); { //média dos elementos do vetor.
									echo "Média dos elementos do vetor: $media. <br/>";
								}		
					?>		
						<!-- Fim conteúdo dinâmico para processamento de dados -->	
						</p>
							<!-- Link de retorno para html -->
							<div><a class="botao" href="exercicio17.html">Voltar</a></div>
							<!-- Fim formulário para entrada e envio de dados -->	
			</form>
		</div>
	</body>
</html>