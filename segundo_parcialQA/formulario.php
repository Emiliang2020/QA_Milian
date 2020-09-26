<!DOCTYPE html>
<html>

<head>
	<title>MI FORMULARIO</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />	
</head>
<body class="caja2">

	<?php
    	include ("registro.php");
    ?>
	<center>
        <h1 class="heading">NUEVO REGISTRO</h1>
		<form method="post">
			<table>
				<tr>
					<td>
						<label class="label_style">NIT</label>
					</td>
					<td>
						<input class="input_style" type="text" name="nit" size="20"/>
					</td>
				</tr>
				<tr>
					<td>
						<label class="label_style">NOMBRE</label>
					</td>
					<td>
						<input class="input_style" type="text" name="nombre" size="50"/>
					</td>
				</tr>
				<tr>
					<td>
						<label class="label_style">APELLIDO</label>
					</td>
					<td>
						<input class="input_style" type="text" name="apellido" size="50"/>
					</td>
				</tr>
				<tr>
					<td>
						<label class="label_style">DIRECCION</label>
					</td>
					<td>
						<input class="input_style" type="text" name="direccion" size="80"/>
					</td>
				</tr>
				<tr>
					<td>
						<label class="label_style">TELEFONO</label>
					</td>
					<td>
						<input class="input_style" type="number" name="telefono" size="20"/>
					</td>
				</tr>
				<tr>
					<td>
						<label class="label_style">CORREO</label>
					</td>
					<td>
						<input class="input_style"  type="email" name="correo" size="50"/>
					</td>
				</tr>
				<tr>
					<div>-</div>
					<td>.</td>
					<td colspan="2" align="center">
						<input class="boton3" type="submit" name="registro" value="Registrar Cliente"/>
					</td>
				</tr>

			</table>
		</form>
	</center>
</body>
</html>