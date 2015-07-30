<html>
<head>
	<title>Pathologies</title>
	<link href="../css/basic.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php $rut="../img/Individual_Features/pathologies/";
		  $rutAction="../addIndex.php";
		  $initial="&initial=Individual_Features/individual_features.php";
	?>
	<table>
		<caption><h1> Patholigies</h1> </caption>
		<tr>
			<td align="middle">
				<a href=<?php echo $rutAction."?index=11001".$initial; ?> ><img src=<?php echo $rut."healty.png"; ?> width=35% heigth=35% alt="healty"><br> Healty</a>
			</td>
			<td align="middle">
				<a href=<?php echo $rutAction."?index=11002".$initial; ?> ><img src=<?php echo $rut."alzheimer.png"; ?> width=35% heigth=35% alt="Alzheimer"><br> Alzheimer</a>
			</td>
		</tr>
			<td align="middle" colspan="2">
				<a href=<?php echo $rutAction."?index=11003".$initial; ?> ><img src=<?php echo $rut."epilepsy.png"; ?> width=17% heigth=17% alt="Epilepsy"><br> Epilepsy</a>
			</td>
		<tr>
		</tr>
	</table>
</body>
</html>