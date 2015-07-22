<html>
<head></head>

<body>
	<?php
		$fich=fopen("index.txt","a+");
			 fputs($fich,$_GET['index']);
			 fputs($fich,CHR(13).CHR(10)); // new line y carriage return
			 fclose($fich);
			 header('Location: index.php');
	
	?>
</body>
</html>