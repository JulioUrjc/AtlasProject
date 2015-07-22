<html>
<head><title>Species</title></head>

<body>
	<?php 
		  $rut="../img/Individual_Features/species/";
		  $rutAction="../addIndex.php";
	?>
	<table>
		<caption><h1> Species</h1> </caption>
		<tr>
			<td align="middle">
				<a href=<?php echo $rutAction."?index=00001"; ?> ><img src=<?php echo $rut."human.png"; ?> width=35% heigth=35% alt="species"><br> Human</a>
			</td>
			<td align="middle">
				<a href=<?php echo $rutAction."?index=00002"; ?> ><img src=<?php echo $rut."human.png"; ?> width=35% heigth=35% alt="pathologies"><br> Monkey</a>
			</td>
		</tr>
			<td align="middle" colspan="2">
				<a href=<?php echo $rutAction."?index=00003"; ?> ><img src=<?php echo $rut."human.png"; ?> width=17% heigth=17% alt="data"><br> Rat</a>
			</td>
		<tr>
		</tr>
	</table>
</body>
</html>