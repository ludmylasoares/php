<!--Autora: Ludmyla Oliveira Soares
	Data: 22/10/2019
	Função: Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número.
-->
<!DOCTYPE html>
	<head>
		<title>PHP | Exercícios 06</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="estilo.css" rel="stylesheet">
	</head>
		<body>	
		<div>
			<!-- Início formulário para entrada e envio de dados -->
			<h1>Exercício 06</h1>
				<p class="paragrafo">Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número.</p>
			<p class="paragrafo2">
				<!-- Início conteúdo dinâmico para processamento de dados -->
				<?php
					//if(isset($POST['num'])) {verifica se o usuário digitou algum valor e submeteu no form.
					  $mes = isset($_POST['num1'])?$_POST['num1']:0;
		 switch ($mes) {
		     
		    case 1:
			     echo ("JANEIRO");
				 break;
			case 2:
			     echo ("FEVEREIRO");
				 break;
			case 3:
			     echo ("MARÇO");
				 break;
			case 4:
			     echo ("ABRIL");
				 break;
			case 5:
			     echo ("MAIO");
				 break;
            case 6:
			     echo ("JUNHO");
				 break;
            case 7:
			     echo ("JULHO");
				 break;
            case 8:
			     echo ("AGOSTO");
				 break;
            case 9:
			     echo ("SETEMBRO");
				 break;
            case 10:
			     echo ("OUTUBRO");
				 break;
            case 11:
			     echo ("NOVEMBRO");
				 break;
            case 12:
			     echo ("DEZEMBRO");	
                 break;	
            case ($mes < 1):
                 echo ("NÃO EXISTE MÊS COM ESTE NÚMERO");
                 break;	
            case ($mes > 12):
                 echo ("NÃO EXISTE MÊS COM ESTE NÚMERO");
                 break;				
             }
			?>			
				<!-- Fim conteúdo dinâmico para processamento de dados -->
			</p>	
		</div>
				<!-- Link de retorno para html -->
			<div><a class="botao" href="exercicio06.html">Voltar</a></div>
			<!-- Fim formulário para entrada e envio de dados -->	
			</form>
		</div>
	</body>
</html>
			
		