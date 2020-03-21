<!--Autora: Ludmyla Oliveira Soares
	Data: 22/10/2019
	Função: A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será emprestado, o tipo de usuário (professor ou aluno) e 
			possa imprimir um recibo conforme mostrado a seguir. Considerar que o professor tem 10 dias para devolver o livro o aluno somente 3 dias
-->
<!DOCTYPE html>
	<head>
		<title>PHP | Exercícios 07</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="estilo.css" rel="stylesheet">
	</head>
		<body>	
		<div>
			<!-- Início formulário para entrada e envio de dados -->
			<h1>Exercício 07</h1>
				<p class="paragrafo">A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será emprestado, o tipo de usuário (professor ou aluno) e 
				possa imprimir um recibo conforme mostrado a seguir. Considerar que o professor tem 10 dias para devolver o livro o aluno somente 3 dias</p>
			<p class="paragrafo2">
				<!-- Início conteúdo dinâmico para processamento de dados -->
				<?php
					//if(isset($POST['num'])) {verifica se o usuário digitou algum valor e submeteu no form.
					  $nome = $_POST['nome'];
					  $usuario = $_POST['usuario'];
					   if ($usuario == "aluno") {
						  echo "Olá, aluno! O livro $nome deve ser devolvido em 3 dias!" ;
					  }
					  else {
						  echo "Olá, professor! O livro $nome deve ser devolvido em 10 dias!" ;
						}
				?>			
				<!-- Fim conteúdo dinâmico para processamento de dados -->
			</p>	
		</div>
				<!-- Link de retorno para html -->
			<div><a class="botao" href="exercicio07.html">Voltar</a></div>
			<!-- Fim formulário para entrada e envio de dados -->	
			</form>
		</div>
	</body>
</html>
			
		