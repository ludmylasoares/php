<!--Autora: Ludmyla Oliveira Soares
	Data: 6/11/2019
	Contato: ola@ludmylasoares.site
	Função: Criar um algoritmo com uma matriz 5x5 e escreva os elementos da diagonal principal. -->

<!DOCTYPE html>
	<head>
		<title>PHP | Exercícios 19</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="estilo.css" rel="stylesheet">
	</head>
	<body>	
		<div>
			<!-- Início formulário para entrada e envio de dados -->
			<h1>Exercício 19</h1>
				<p class="paragrafo"> Criar um algoritmo com uma matriz 5x5 e escreva os elementos da diagonal principal. </p>
					<p class="paragrafo2">
						<p><a class="paragrafo2"> </a></p> <!--<input type="number" name="num" step="0.01" >-->
						<p class="paragrafo2"> 
					<!-- Início conteúdo dinâmico para processamento de dados -->
					<?php
						 
						//a matriz recebe a string "-"
						for ($l = 1; $l < 6; $l++) {
						  for ($c = 1; $c < 6; $c++) {
							$mat[$l][$c] = "|" . rand(0, 6) . "|";
						  }
						}
						 
						//pega a diagonal principal e armazena no vetorDP
						for ($l = 1; $l < 6; $l++) {
						  for ($c = 1; $c < 6; $c++) {
							if ($l == $c) {
							  $vetDP[$l] = $mat[$l][$c];
							  $mat[$l][$c] = "$vetDP[$l]";
							}
						  }
						}
						 				 
						//imprime na tela a matriz
						for ($l = 1; $l < 6; $l++) {
						  for ($c = 1; $c < 6; $c++) {
							echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $mat[$l][$c];
						  }
						  echo "<br />";
						}
						echo "<br />";
						 
						//imprime a diagonal principal
						echo "Diagonal Principal: ";
						for ($i = 1; $i < 6; $i++) {
						  echo "&nbsp;&nbsp" . $vetDP[$i]; 
						}
					?>		
						<!-- Fim conteúdo dinâmico para processamento de dados -->	
						</p>
							<!-- Link de retorno para html -->
							<div><a class="botao" href="exercicio19.html">Voltar</a></div>
							<!-- Fim formulário para entrada e envio de dados -->	
			</form>
		</div>
	</body>
</html>