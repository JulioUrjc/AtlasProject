<html>
<head>
	<title>Data</title>
	<link href="../css/basic.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php $rut="../img/Individual_Features/data/";
		  $rutAction="../addIndex.php";
		  $initial="&initial=Individual_Features/individual_features.php";
	?>
	<table>
		<caption><h1> Data</h1> </caption>
		<tr>
			<td align="middle">
				<a href=<?php echo $rutAction."?index=02001".$initial; ?> ><img src=<?php echo $rut."race.png"; ?> width=35% heigth=35% alt="species"><br> Age</a>
			</td>
			<td align="middle">
				<a href=<?php echo $rutAction."?index=02002".$initial; ?> ><img src=<?php echo $rut."race.png"; ?> width=35% heigth=35% alt="pathologies"><br> Race</a>
			</td>
		</tr>
			<td align="middle" colspan="2">
				<a href=<?php echo $rutAction."?index=02003".$initial; ?> ><img src=<?php echo $rut."race.png"; ?> width=17% heigth=17% alt="data"><br> Sex</a>
			</td>
		<tr>
		</tr>
	</table>
</body>
</html>