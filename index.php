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
				<th>alumnos</th>
				<th>comentarios</th>
				<th>temas</th>
				<th>usuarios</th>
			</tr>
				<?php
					while ($row = mysql_fetch_array($rs_alumnos)) 
					{
						echo "<tr>";
						echo "<td>". $row ["alumnos"]. "</td>";
						echo"<td>". $row ["comentarios"]. "</td>";
						echo "<td>". $row ["temas"]. 	}
			
		</table>
	</body>
</html>
