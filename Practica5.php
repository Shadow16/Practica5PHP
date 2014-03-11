<!DOCTYPE html>
<html>
	<head>
		<title>Pr&aacutectica 5 Programaci&oacuten IV</title>
		<style>
		.p
		{
			font-style:Calibri;
			font-size:18px;
		}
		.color1
		{
			background-color:#118AAF;
		}

		.color2
		{
			background-color:#229D4E;
		}
	</style>
		<center>
		<p> Tabla Din&aacutemica en PHP </p>
		<hr width="50%">
	</head>
	<body>
		<table border="1" cellspacing="0" cellpadding="5" width="50%">
      <?php 
        $cont=1;
        for($i=1; $i<=10; $i++){
	        echo "<tr class='".($i%2 != 0 ? "color1" : "color2")."'>";
	          for($j=1; $j<=10; $j++){
		          echo "<td >".($cont++)."</td>";
	            }
	          echo "</tr>";
            }
      ?>
			</center>
		</table>
	</body>
</html>
