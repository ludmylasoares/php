<!--Autora: Ludmyla Oliveira Soares
	Data: 11/11/20
	Contato: ola@ludmylasoares.site
	Função: Criar um algoritmo com uma matriz 5x5 e imprima: toda a matriz, a matriz gerada só com números ímpares e outra só com números pares. -->

<!DOCTYPE html>
	<head>
		<title>PHP | Exercícios 20</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="estilo.css" rel="stylesheet">
	</head>
	<body>	
		<div>
			<!-- Início formulário para entrada e envio de dados -->
			<h1>Exercício 20</h1>
				<p class="paragrafo"> Criar um algoritmo com uma matriz 5x5 e imprima: toda a matriz, a matriz gerada só com números ímpares e outra só com números pares. </p>
					<p class="paragrafo2">
						<p><a class="paragrafo2"> </a></p> <!--<input type="number" name="num" step="0.01" >-->
						<p class="paragrafo2"> 
					<!-- Início conteúdo dinâmico para processamento de dados -->
						<?php	
							//Imprime a matriz toda
							echo "Matriz Geral: <br /> <br />";
							for ($l = 1; $l < 6; $l++) {
							  for ($c = 1; $c < 6; $c++) {
								$mat[$l][$c] = "|" . rand(0, 6) . "|";
								echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $mat[$l][$c];
							  }
							  echo "<br />";
							}
							echo "<br />";		
							
							//Imprime na tela os números pares e ímpares;
							function impar($var) {

								return ($var % 2 == 1);
							}
							function par($var) {

								return ($var % 2 == 0);
							}
							$par  = array_filter($mat[i][j], "par");
							$impar = array_filter($mat[i][j], "impar");

							echo "Pares:". print_r($par)."<br>";

							echo "Impares:". print_r($impar);
							
							
							
							for ($linha=0; $linha<3; $linha++) {
								for ($coluna=0; $coluna<3; $coluna++) {
									echo $jogo[$linha][$coluna]."  ";
								}
								echo "<br/> \n";
						?>			
						<!-- Fim conteúdo dinâmico para processamento de dados -->	
						</p>
							<!-- Link de retorno para html -->
							<div><a class="botao" href="exercicio20.html">Voltar</a></div>
							<!-- Fim formulário para entrada e envio de dados -->
		</div>
	</body>
</html>