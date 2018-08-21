<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		<title>PHP Array to JAVASCRIPT Array</title>
	</head>
	<body>
		<?php
		//Classe de teste com 2 atributos : $nome e $idade
			class Teste{
			public $nome;
			public $idade;
			}
		//Instancia 2 objetos do tipo Teste() $p1 e $p2
			$p1 = new Teste();
			$p2 = new Teste();
		//Insere Valores nos 2 objetos criados
			$p1->nome = "Ewerton";
			$p1->idade = 27;
			$p2->nome = "Ricardo";
			$p2->idade = 44;
		//Cria um Array $phpArray e insere os 2 objetos
			$phpArray = array($p1, $p2);
		//Codifica o $phpArray para JSON			
			$json = json_encode($phpArray);				
			 
		?>
		
		<p id="demo"></p>	
	
		<script type="text/javascript">
			/*Cria a variavel text com o valor da variavel $json do PHP que é uma STRING */
			var text = <?php echo $json; ?>;	
			/*Mostra no console o text JSON*/
			console.log(text);
			text.forEach((cur,idx,arr) => console.log(cur.idade,cur.nome));
			/*Imprime na tela no elemento <p> com id "demo" o index 0 do text*/	
			var html = "";
			text.forEach(function(elemento,index){
				html += "Nome: " + elemento.nome + " Idade: " + elemento.idade + "<br>";
			});			
			document.getElementById("demo").innerHTML = html;
		</script>

	</body>
</html>