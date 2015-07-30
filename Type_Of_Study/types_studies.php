<html>
<head>
	<title>Types of Studies</title>
	<link href="../css/basic.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php $rut="../img/Types_Of_Studies/";
		  $rutAction="../addIndex.php";
		  $initial="&initial=Type_Of_Study/types_studies.php";
	?>

	<table>
		<caption><h1> Types of Studies</h1> </caption>
		<tr>
			<td align="middle">
				<a href="morphological.php" ><img src=<?php echo $rut."morphological.png"; ?> width=35% heigth=35% alt="morphological"><br> Morphological</a>
			</td>
			<td align="middle">
				<a href=<?php echo $rutAction."?index=31000".$initial; ?> ><img src=<?php echo $rut."genomical2.png"; ?> width=35% heigth=35% alt="genomical"><br> Genomical</a>
			</td>
		</tr>
			<td align="middle" colspan="2">
				<a href=<?php echo $rutAction."?index=32000".$initial; ?> ><img src=<?php echo $rut."physiological2.png"; ?> width=17% heigth=17% alt="physiological"><br> Physiological</a>
			</td>
		<tr>
		</tr>
	</table>
	<a href="../BrainMenu.php">Main Menu</a>
</body>
</html>