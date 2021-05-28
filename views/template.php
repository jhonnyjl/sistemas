<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SISTEMAS PLAN 2018</title>
</head>
<body>
	<h1><center>UNMSM</center></h1>
	<br>
	<h2><center>FACULTAD: INGENIERÍA DE SISTEMAS E INFORMÁTICA</center></h2>
	<br>
	<h2><center>ESCUELA: INGENIERÍA DE SISTEMAS</center></h2>	
	<br><h2><center>PLAN DE ESTUDIOS 2018</center></h2>	
	<br>
	<center>
		<h7>Diseñado por: Jhonny López - Ingeniería de sistemas - UNMSM - Base 20</h7>
	</center>

	<?php
		include "modules/navegacion.php";
	?>

	<section>
		<?php
			$mvc = new MvcController();
			$mvc ->enlacesPaginasController();
			?>
	</section>

</body>
</html>