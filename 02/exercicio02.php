<!--Autora: Ludmyla Oliveira Soares
	Data: 21/10/2019
	Função: Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes!
-->
<!DOCTYPE html>
	<head>
		<title>PHP | Exercícios 02</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="estilo.css" rel="stylesheet">
	</head>
		<body>	
		<div>
			<!-- Início formulário para entrada e envio de dados -->
			<h1>Exercício 02</h1>
				<p class="paragrafo">Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes!</p>
		</div>
		<div>
			<p class="paragrafo2">
				<!-- Início conteúdo dinâmico para processamento de dados -->
				<?php
					//if(isset($POST['num'])) {verifica se o usuário digitou algum valor e submeteu no form.
						$num = $_POST['num'];
						
						// Divisão por 10
						if($num % 10 == 0) 
						{
							echo $num . " é divísível por 10! <br/>";} 
						else 
						{
							echo $num . " não é divísível por 10! <br/>";
						}
						
						// Divisão por 5
						if($num % 5 == 0) 
						{
							echo $num . " é divísível por 5! <br/>";}	
						else 
						{
							echo $num . " não é divísível por 5! <br/>";
						}
						
						// Divisão por 2
						if($num % 2 == 0) 
						{
							echo $num . " é divísível por 2! <br/>";}
						else 
						{
							echo $num . " não é divísível por 2! <br/>";
						}

				?>
				<!-- Fim conteúdo dinâmico para processamento de dados -->
			</p>	
		</div>
				<!-- Link de retorno para html -->
			<div><a class="botao" href="exercicio02.html">Voltar</a></div>
			<!-- Fim formulário para entrada e envio de dados -->	
			</form>
		</div>
	</body>
</html>
			
		