<html>
<head>
	<title>Brodman Areas</title>
	<link href="../css/basic.css" rel="stylesheet" type="text/css" />

</head>

<body>
	<?php $rut="../img/Brain_Parcelations/";
		  $rutAction="../addIndex.php";
		  $initial= "&initial=Brain_Parcelations/Brain_Parcelations.php";
	?>
	<table border="1" style="margin: 0 auto;">
		<caption><h1> Brodman Areas</h1> </caption>
			
			<td align=center>
				<a href=<?php echo $rutAction."?index=01001".$initial; ?> ><img src=<?php echo $rut."areaspng.png"; ?> width=50% heigth=50% alt="BrodmanAreas"></a>

			</td>

			<td> 

	<?php 

			for($i=0; $i<25; $i=$i+1){


			echo "<p> <a href= ".$rutAction."?index=0100".$i.$initial."> Area Numero $i</p>";
			}

	?>
			</td>


			<td> 
	<?php 
			for($i=24; $i<49; $i=$i+1){
				echo "<p> Area Numero $i</p>";
			}
	?>
			</td>





	</table>
</body>
</html>