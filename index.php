<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		<title>PHP Array to JAVASCRIPT Array</title>
	</head>
	<body>
		<?php

			$phpArray = array('Manga' , 'Melancia', 'Uva' );
			 
		?>
		
		<p id="demo"></p>
	
		<script type="text/javascript">
			var text = '<?php echo json_encode($phpArray, JSON_FORCE_OBJECT); ?>';	
			var obj = JSON.parse(text);					
			document.getElementById("demo").innerHTML = obj[0] + "," + obj[1] + "," + obj[2];
		
		</script>
	</body>
</html>