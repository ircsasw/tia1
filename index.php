<?php

	$Link = mysql_connect(
"localhost",
"root",
""
);
mysql_select_db(
"tia",
$Link
) OR DIE("Error!!");
$sql_temas = "SELECT * FROM temas";
$rs_temas = mysql_query(
$sql_temas,
$Link) or die(mysql_error());
?>

<html>
	<head>
		<title>mi blog</title>
	</head>
	<body>
		<table border="1">
			<tr>
				<th>id</th>
				<th>id_usuario</th>
				<th>titulo</th>
				<th>fecha_pub</th>
				<th>contenido</th>
			</tr>
				<?php
					while ($row = mysql_fetch_array($rs_temas)) 
					{
						echo "<tr>";
						echo "<td>". $row ["id"]. "</td>";
						echo"<td>". $row ["id_usuario"]. "</td>";
						echo "<td>". $row ["titulo"]."</td>";
						echo "<td>". $row ["fecha_pub"]. "</td>";
						echo "<td>". $row ["contenido"]. "</td>";
						echo "</tr>";

					}
				?>


			
		</table>
	</body> 
</html>
