<!--Autora: Ludmyla Oliveira Soares
	Data: 27/10/2019
	Contato: ola@ludmylasoares.site
	Função: Ler vários números e informar quantos números entre 100 e 200 foram digitados. Se o valor 0 for lido encerrar a execução.
-->
<!DOCTYPE html>
	<head>
		<title>PHP | Exercícios 13</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="estilo.css" rel="stylesheet">
	</head>
	<body>	
		<div>
			<!-- Início formulário para entrada e envio de dados -->
			<h1>Exercício 13</h1>
				<p class="paragrafo">Ler vários números e informar quantos números entre 100 e 200 foram digitados. Se o valor 0 for lido encerrar a execução.</p>
					<p><a class="paragrafo2"> Os números são 101, 250, 612, 50, 12, 1236, -4, 18, 369, 4, -6, 112, 200, 45, 589, 456, 147,36 e -10.</a></p>	
				<p class="paragrafo2">
					<!-- Início conteúdo dinâmico para processamento de dados -->
					<?php
						$vetor=array(101,250,612,50,12,1236,-4,18,369,4,-6,112,200,45,589,456,147,36, -10);
						$neg=array();	
						$pos=array();						
							foreach($vetor as $vet){
								($vet >= 100 and $vet <= 200) ? $neg[]=$vet : $pos[]=$vet;
							}
							echo "<h3>Números entre 100 e 200: </h3>" . $neg[0] . ", " . $neg[1] . ", ". $neg[2] . " e ". $neg[3] . ". ";
							
							$count = count($neg);

							echo "<h3>Total de números entre 100 e 200: </h3>";
							print_r($count);
							
					?></p>			
					<!-- Fim conteúdo dinâmico para processamento de dados -->	
					<!-- Link de retorno para html -->
				<div><a class="botao" href="exercicio13.html">Voltar</a></div>
				<!-- Fim formulário para entrada e envio de dados -->	
			</form>
		</div>
	</body>
</html>