<html>
<head>
	<title>Tipes of Stadies</title>
	<link href="../css/basic.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php $rut="../img/Tipes_Of_Stadies/"?>
	<table>
		<caption><h1> Individual Features</h1> </caption>
		<tr>
			<td align="middle">
				<a href="species.php" ><img src=<?php echo $rut."species.png"; ?> width=35% heigth=35% alt="species"><br> Species</a>
			</td>
			<td align="middle">
				<a href="pathologies.php" ><img src=<?php echo $rut."pathologies.png"; ?> width=35% heigth=35% alt="pathologies"><br> Pathologies</a>
			</td>
		</tr>
			<td align="middle" colspan="2">
				<a href="data.php" ><img src=<?php echo $rut."data.png"; ?> width=17% heigth=17% alt="data"><br> Data</a>
			</td>
		<tr>
		</tr>
	</table>
	<a href="../BrainMenu.php">Main Menu</a>
</body>
</html>