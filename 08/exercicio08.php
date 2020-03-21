<!--Autora: Ludmyla Oliveira Soares
	Data: 22/10/2019
	Função: Criar um algoritmos que leia um número e imprima todos os número de 1 até ele e o seu produto.
-->
<!DOCTYPE html>
	<head>
		<title>PHP | Exercícios 08</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="estilo.css" rel="stylesheet">
	</head>
		<body>	
		<div>
			<!-- Início formulário para entrada e envio de dados -->
			<h1>Exercício 08</h1>
				<p class="paragrafo">Criar um algoritmos que leia um número e imprima todos os número de 1 até ele e o seu produto.</p>
			<p class="paragrafo2">
				<!-- Início conteúdo dinâmico para processamento de dados -->
				<?php
					//if(isset($POST['num'])) {verifica se o usuário digitou algum valor e submeteu no form.
					 $num = isset($_POST["num"])?$_POST["num"]: 0;
						for ($cont = 1; $cont <= $num; $cont++) {
						 $cont2 = $cont * $num;
						 echo "$num * $cont = $cont2 <br/>";
					 // tambem poderia declarar o meu echo como ex: echo "O produto de 1 até $var1 é igual a $cont2";	 
					 }
				?>			
				<!-- Fim conteúdo dinâmico para processamento de dados -->
			</p>	
		</div>
				<!-- Link de retorno para html -->
			<div><a class="botao" href="exercicio08.html">Voltar</a></div>
			<!-- Fim formulário para entrada e envio de dados -->	
			</form>
		</div>
	</body>
</html>
			
		