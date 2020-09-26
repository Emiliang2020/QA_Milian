<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CONSULTA DE CLIENTE</title>
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body class="caja3">
	<center>
		<img src="./Imagenes/buscando.png" width="75px" height="150px">
		<h1 class="h1_style">CONSULTA DE CLIENTE</h1>
		<form action="consultarCliente.php" method="post">
			<table cellspacing="10px" style="margin-top: 20px" border="2px solid">
	            <tr>
	            	<td>
	            		<label class="label_style">NIT</label>
	                </td>
	                <td>
	                    <input type="text" name="nit" width="30">
	                </td>
	            </tr>
	            <tr>
	                <td colspan="2" align="center">
	                	<input class="boton3" type="submit" name="consultar" value="Consultar">
	                </td>
	            </tr>
        	</table>
		</form>
	</center>
</body>
</html>