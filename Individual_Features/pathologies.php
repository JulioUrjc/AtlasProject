<html>
<head><title>Pathologies</title></head>

<body>
	<?php $rut="../img/Individual_Features/pathologies/";
		  $rutAction="../addIndex.php";
	?>
	<table>
		<caption><h1> Patholigies</h1> </caption>
		<tr>
			<td align="middle">
				<a href=<?php echo $rutAction; ?> ><img src=<?php echo $rut."healty.png"; ?> width=35% heigth=35% alt="species"><br> Healty</a>
			</td>
			<td align="middle">
				<a href=<?php echo $rutAction; ?> ><img src=<?php echo $rut."healty.png"; ?> width=35% heigth=35% alt="pathologies"><br> Alzheimer</a>
			</td>
		</tr>
			<td align="middle" colspan="2">
				<a href=<?php echo $rutAction; ?> ><img src=<?php echo $rut."healty.png"; ?> width=17% heigth=17% alt="data"><br> Epilepsy</a>
			</td>
		<tr>
		</tr>
	</table>
</body>
</html>