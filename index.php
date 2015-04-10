<?php
$comentario = "";
if (isset($_POST["comentario"])) 
{
	$comentario= $_POST ["comentario"];	
}
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

		<?php ($row = mysql_fetch_array($rs_temas));
			echo "<h1> Bienvenidos a mi blog" . $row["id_usuario"] ."</h1>";
			?>
		<table border="1">

		<table border="1">

				<?php /**
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
				**/ ?>


		<a href="longin.php"> longin </a><br>
		</table>

		<table border="1">

			<tr>
			 <td colspan="3"> <?php echo $row["titulo"]; ?>  </td>
			 <td>
			 	<input type="submit" name="comentar" value="comentar" onclick="window.location.href='comentar.php?id=<?php echo $row['id'];?>'">
			 	<input type="submit" name="editar" value="editar">
			 	<input type="submit" name="borrar" value="borrar">
			 </td>
			</tr>
			<tr>
				<td colspan="4"> <?php echo $row["id_usuario"] . "-" . $row["fecha_pub"]; ?></td>
			</tr>
			<tr>
				<td colspan="4"><?php echo $row["contenido"]; ?></td>
			</tr>
			<tr>
				<td colspan="4"> <input type="submit" name="Me gusta" value="Me gusta"> </td>
			</tr>
			<tr>
				<td colspan="3"> <?php echo $row["id_usuario"] . "-" . $row["fecha_pub"]; ?></td> <td> <input type="submit" name="editar" value="editar"> <input type="submit" name="borrar" value="borrar"> </td>
			</tr>
			<tr>
				<td colspan="4"><?php echo "$comentario"; ?></td>
			</tr>

		</table>
	</body>
</html>
