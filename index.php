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
			
			var javaArray = [];
			<?php
				foreach ($phpArray as $value) {
			?>
				javaArray.push("<?php echo $value; ?>");
			<?php
				}
			?>
			document.getElementById("demo").innerHTML = javaArray;
		
		</script>
	</body>
</html>