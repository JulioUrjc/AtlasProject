<html>
<head>
	<title>Species</title>
	<link href="../css/basic.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php $rut="../img/Individual_Features/species/";
		  $rutAction="../addIndex.php";
		  $initial="&initial=Individual_Features/individual_features.php";
	?>
	<table>
		<caption><h1> Species</h1> </caption>
		<tr>
			<td align="middle">
				<a href=<?php echo $rutAction."?index=10001".$initial; ?> ><img src=<?php echo $rut."human2.png"; ?> width=35% heigth=35% alt="human"><br> Human</a>
			</td>
			<td align="middle">
				<a href=<?php echo $rutAction."?index=10002".$initial; ?> ><img src=<?php echo $rut."monkey.png"; ?> width=35% heigth=35% alt="monkey"><br> Monkey</a>
			</td>
		</tr>
			<td align="middle" colspan="2">
				<a href=<?php echo $rutAction."?index=10003".$initial; ?> ><img src=<?php echo $rut."rat.png"; ?> width=17% heigth=17% alt="rat"><br> Rat</a>
			</td>
		<tr>
		</tr>
	</table>
</body>
</html>