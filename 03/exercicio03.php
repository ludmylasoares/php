<!--Autora: Ludmyla Oliveira Soares
	Data: 21/10/2019
	Função: Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes!
-->
<!DOCTYPE html>
	<head>
		<title>PHP | Exercícios 03</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="estilo.css" rel="stylesheet">
	</head>
		<body>	
		<div>
			<!-- Início formulário para entrada e envio de dados -->
			<h1>Exercício 03</h1>
				<p class="paragrafo">Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a mensagem: ACEITA.<br/>
					Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.</p>
			<p class="paragrafo2">
				<!-- Início conteúdo dinâmico para processamento de dados -->
				<?php
					//if(isset($POST['num'])) {verifica se o usuário digitou algum valor e submeteu no form.
					$nome = $_POST['nome'];
					$sexo = $_POST['sexo'];
					$idade = $_POST['idade'];
					if ($sexo == "feminino" and $idade < 25) {
						echo "Olá, $nome <br/> Situação: ACEITA";
					}
					else  {
						echo "Olá, $nome <br/> Situação: NÃO ACEITA";
					}					
				?>
				<!-- Fim conteúdo dinâmico para processamento de dados -->
			</p>	
		</div>
				<!-- Link de retorno para html -->
			<div><a class="botao" href="exercicio03.html">Voltar</a></div>
			<!-- Fim formulário para entrada e envio de dados -->	
			</form>
		</div>
	</body>
</html>
			
		