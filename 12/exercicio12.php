<!--Autora: Ludmyla Oliveira Soares
	Data: 24/10/2019
	Função:  Criar um algoritmos que entre com uma palavra e imprima conforme o exemplo:
				◦ Palavra: sonho
				◦ SONHO
				◦ SONHO SONHO
				◦ SONHO SONHO SONHO
				◦ SONHO SONHO SONHO SONHO
				-->
<!DOCTYPE html>
	<head>
		<title>PHP | Exercícios 12</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="estilo.css" rel="stylesheet">
	</head>
	<body>	
		<div>
			<!-- Início formulário para entrada e envio de dados -->
			<h1>Exercício 12</h1>
					<p class="paragrafo">Criar um algoritmos que entre com uma palavra e imprima conforme o exemplo:<br/>
						◦ Palavra: sonho <br/>
						◦ SONHO <br/>
						◦ SONHO SONHO <br/>
						◦ SONHO SONHO SONHO <br/>
						◦ SONHO SONHO SONHO SONHO<br/>
					</p>
				<p class="paragrafo2">
					<!-- Início conteúdo dinâmico para processamento de dados -->
						<?php
							$input = $_POST["texto"];
							$separator = ' ';
							print " ◦ Palavra: $input<br/> " ;
							print " ◦ " . implode ($separator, array_fill(0, 1, strtoupper($input)));
							print "<br/>";
							print " ◦ " . implode($separator, array_fill(0, 2, strtoupper($input)));
							print "<br/>";
							print " ◦ " . implode($separator, array_fill(0, 3, strtoupper($input)));
							print "<br/>";
							print " ◦ " . implode($separator, array_fill(0, 4, strtoupper($input)));
							print "<br/>";
						?></p>			
					<!-- Fim conteúdo dinâmico para processamento de dados -->	
					
					<!-- Link de retorno para html -->
				<div><a class="botao" href="exercicio12.html">Voltar</a></div>
				<!-- Fim formulário para entrada e envio de dados -->	
			</form>
		</div>
	</body>
</html>