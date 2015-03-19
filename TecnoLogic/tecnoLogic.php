<?php include_once 'include/conexion.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<script src="js/jquery-2.1.3.mim"></script>
	<meta charset="utf-8">
	<title>TecnoLogic</title>
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width">
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/main.js"></script>

</head>
<body>
	<div id="containerT">
		<div id="encabezado">
			<h1>Tecno - Logic</h1>
		</div>
		<div id="contentMensajes">
			<?php

			$idUser=$_GET['id'];
			$query="SELECT m.idMensajes AS id, m.texto AS texto, u.idUsuario AS idUsuario, u.url AS urlImage, u.nombre AS nombre FROM mensajes AS m, usuario AS u WHERE m.idUsuario=u.idUsuario AND NOT(u.idUsuario=$idUser)";
			$result = mysqli_query($con,$query);
			while($row = mysqli_fetch_array($result)){
				echo "<article class = 'texto'>";
				echo "<figure class = 'urlImage'>";
				echo "<img src='".$row['urlImage']."'/>";
				echo "</figure>";
				echo "<div class='contentMsg'>";
				echo "<div class='msg'>";
				echo "<h3>".$row['nombre'].":</h3>";
				echo "<p>".$row['texto']."</p>";
				echo "</div>";
				echo "<div class='meGusta'><p>Like</p></div>";
				echo "</div>";
				echo "</article>";
			}
			?>
		</div>
		<div id="footer">
			<p>D.D.P</p>
		</div>
	</div>
	
</body>
</html>