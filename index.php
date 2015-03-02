<?php

	echo "Equipo 1";

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