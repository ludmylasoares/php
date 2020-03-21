<!--Autora: Ludmyla Oliveira Soares
	Data: 22/10/2019
	Contato: ola@ludmylasoares.site
	Função: Entrar com 20 números e imprimir a soma dos positivos e o total de números negativos.
-->
<!DOCTYPE html>
	<head>
		<title>PHP | Exercícios 10</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="estilo.css" rel="stylesheet">
	</head>
	<body>	
		<div>
			<!-- Início formulário para entrada e envio de dados -->
			<h1>Exercício 10</h1>
					<p class="paragrafo">Entrar com 20 números e imprimir a soma dos positivos e o total de números negativos.</p>
					<p><a class="paragrafo2"> Os números são 1,-1,2,-2,3,-3,4,-4,5,-5,6,-6,7,-7,8,-8,9,-9,10,-10 </a> <!--<input type="number" name="num"></p>-->
					</p>
				<p class="paragrafo2">
					<!-- Início conteúdo dinâmico para processamento de dados -->
						<?php
							 //declaração dos 3 vetores
							$vetor=array(1,-1,2,-2,3,-3,4,-4,5,-5,6,-6,7,-7,8,-8,9,-9,10,-10);
							$pos=array();
							$neg=array();

							foreach($vetor as $vet){
								($vet<0) ? $neg[]=$vet : $pos[]=$vet;
							}
							echo "<h3>São estes os valores positivos: </h3>" . $pos[0] . ", " . $pos[1] . ", ". $pos[2] . ", ". $pos[3] . ", ". $pos[4] . ", ". $pos[5] . ", ". $pos[6] . ", ". $pos[7] . ", ". $pos[8] . " e ". $pos[9] . ".";
							
							echo "<h3>São estes os valores negativos: </h3>" . $neg[0] . ", " . $neg[1] . ", ". $neg[2] . ", ". $neg[3] . ", ". $neg[4] . ", ". $neg[5] . ", ". $neg[6] . ", ". $neg[7] . ", ". $neg[8] . "  e ". $neg[9] . ".";
							
							echo "<br />";

							$total = array_sum($pos);
							$count = count($neg);

							echo "<h3>Soma dos números positivos: </h3>"; 
							print_r($total); // soma de valores positivos
							echo "<h3>Total de números negativos: </h3>";
							print_r($count); // quantidade de valores negativos
							
						?></p>			
					<!-- Fim conteúdo dinâmico para processamento de dados -->	
					<!-- Link de retorno para html -->
				<div><a class="botao" href="exercicio10.html">Voltar</a></div>
				<!-- Fim formulário para entrada e envio de dados -->	
			</form>
		</div>
	</body>
</html>