<!--Autora: Ludmyla Oliveira Soares
	Data: 08/11/2019
	Contato: ola@ludmylasoares.site
	Função: Criar 2 vetores com 10 números inteiros cada. Gerar e imprimir um vetor dos números não comuns entre os vetores. -->

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
				<p class="paragrafo">Criar 2 vetores com 10 números inteiros cada. Gerar e imprimir um vetor dos números não comuns entre os vetores.</p>
					<p class="paragrafo2">
						<p><a class="paragrafo2">Vetor A: 2, 15, 56, 108, 99, 11, 240, 77, 1, 0. </a></p> <!--<input type="number" name="num" step="0.01" >-->
						<p><a class="paragrafo2">Vetor B: 12, 773, 15, 20, 500, 99, 1, 240, 40, 10. </a></p>
						<p class="paragrafo2"> 
					<!-- Início conteúdo dinâmico para processamento de dados -->
					<?php
						$vetor1 = array(2, 15, 56, 108, 99, 11, 240, 77, 1, 0);
						$vetor2 = array(12, 773, 15, 20, 500, 99, 1, 240, 40, 10);
						$resultado1 = array_diff($vetor1, $vetor2);
						$resultado2 = array_diff($vetor2, $vetor1);
						$vetor3 = array_merge($resultado1, $resultado2);
						
						foreach($vetor3 as $vet){
								($vet<0) ? $neg[]=$vet : $pos[]=$vet;
							}
							echo "<h3> Números não comuns entre os vetores!  </h3>" . $pos[0] . ", " . $pos[1] . ", ". $pos[2] . ", ". $pos[3] . ", ". $pos[4] . ", ". $pos[5] . ", ". $pos[6] . ", ". $pos[7] . ", ". $pos[8] . ", ". $pos[9] . ", " . $pos[10] . " e " . $pos[11] . "!";
					?>		
						<!-- Fim conteúdo dinâmico para processamento de dados -->	
						</p>
							<!-- Link de retorno para html -->
							<div><a class="botao" href="exercicio18.html">Voltar</a></div>
							<!-- Fim formulário para entrada e envio de dados -->	
			</form>
		</div>
	</body>
</html>