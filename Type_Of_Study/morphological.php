<html>
<head>
	<title>Morphological</title>
	<link href="../css/basic.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php $rut="../img/Types_Of_Studies/morphological/";
		  $rutAction="../addIndex.php";
		  $initial="&initial=Type_Of_Study/types_studies.php";
	?>
	<table>
		<caption><h1> Morphological</h1> </caption>
		<tr>
			<td align="middle">
				<a href=<?php echo $rutAction."?index=30001".$initial; ?> ><img src=<?php echo $rut."pyramidals.png"; ?> width=35% heigth=35% alt="pyramidals"><br> Pyramidals</a>
			</td>
			<td align="middle">
				<a href=<?php echo $rutAction."?index=30002".$initial; ?> ><img src=<?php echo $rut."interneurons.png"; ?> width=35% heigth=35% alt="interneurons"><br> Interneurons</a>
			</td>
		</tr>
			<td align="middle" colspan="2">
				<a href=<?php echo $rutAction."?index=30003".$initial; ?> ><img src=<?php echo $rut."chandelier.png"; ?> width=17% heigth=17% alt="chandelier"><br> Chandelier</a>
			</td>
		<tr>
		</tr>
	</table>
</body>
</html>