<!--Autora: Ludmyla Oliveira Soares
	Data: 22/10/2019
	Função: Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados.
-->
<!DOCTYPE html>
	<head>
		<title>PHP | Exercícios 05</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="estilo.css" rel="stylesheet">
	</head>
		<body>	
		<div>
			<!-- Início formulário para entrada e envio de dados -->
			<h1>Exercício 05</h1>
				<p class="paragrafo">Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados.</p>
			<p class="paragrafo2">
				<!-- Início conteúdo dinâmico para processamento de dados -->
				<?php
					//if(isset($POST['num'])) {verifica se o usuário digitou algum valor e submeteu no form.
							//regra para que possa os lados informados, possam formar um triângulo ou não!
							if($_POST["num1"]!="" and $_POST["num2"]!="" and $_POST["num3"]!=""){
								echo "Os valores formam um triângulo!";
							if ($_POST["num1"]==$_POST["num2"] and $_POST["num2"]==$_POST["num3"]) {
								echo "<br>Equilátero todos os lados iguais";
							}elseif ($_POST["num1"]!=$_POST["num3"] and $_POST["num1"]!=$_POST["num2"] and $_POST["num2"]!=$_POST["num3"]){
									echo "<br>Isósceles - 2 lados iguais!";
							}else{
								echo "<br>Escaleno - todos os lados diferentes!";
							}
					}
				?>			
				<!-- Fim conteúdo dinâmico para processamento de dados -->
			</p>	
		</div>
				<!-- Link de retorno para html -->
			<div><a class="botao" href="exercicio05.html">Voltar</a></div>
			<!-- Fim formulário para entrada e envio de dados -->	
			</form>
		</div>
	</body>
</html>
			
		