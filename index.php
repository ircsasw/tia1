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
		<title>Mi blog</title>
	</head>
	<body>
		<table border="1">
			<tr>
				<th>ID</th>
				<th>ID Usuario</th>
				<th>Título</th>
				<th>Fecha de publicación</th>
				<th>Contenido</th>
			</tr>
				<?php
					while ($row = mysql_fetch_array($rs_temas)) 
					{
						echo "<tr>";
						echo "<td>". $row ["id"]. "</td>";
						echo "<td>". $row ["id_usuario"]. "</td>";
						echo "<td>". $row ["titulo"]."</td>";
						echo "<td>". $row ["fecha_pub"]. "</td>";
						echo "<td>". $row ["contenido"]. "</td>";
						echo "</tr>";

					}
				?>


			
		</table>
		<table border="1">
			<tr>
			 <td colspan="3"> titulo1 </td> <td> controles</td>
			</tr>
			<tr>
				<td colspan="4"> usuario y fecha</td>
			</tr>
			<tr>
				<td colspan="4">comentario</td>
			</tr>
			<tr>
				<td colspan="4">me gusta </td> 
			</tr>
			<tr>
				<td colspan="3"> usuario y fecha </td> <td> controles</td>
			</tr>
			<tr> 
				<td colspan="4"></td>
			</tr>

		</table>
	</body>
</html>
