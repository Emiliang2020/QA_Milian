<html>
<head>
    <meta charset="utf-8">
    <title>Modificado</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<?php
	//Incluimos la clase conexion
    include ("conexion.php");
	if (!empty($_POST)) {  
                         $idCliente  = $_POST['nit'];
        				 $nombre     = $_POST['nombre'];
        				 $apellido   = $_POST['apellido'];
        	   			 $direccion  = $_POST['direccion'];
        			     $telefono   = $_POST['telefono'];
        				 $correo     = $_POST['correo'];
        
        				 $sql = "UPDATE CLIENTE SET nombre     = '$nombre', 
                                           	        apellido   = '$apellido',
                                                    direccion  = '$direccion', 				 
                                                    telefono   = '$telefono',
                                                    correo 	   = '$correo'
                                             	WHERE nit_cliente    = '$idCliente'";

                        $resultado = mysqli_query($conexion, $sql);
            
        if(!$resultado){        	    
                echo'<script type="text/javascript">
					alert("No se logro");
	                window.location.href="consultarCliente.php";
	                </script>';
            }else {               
                echo'<script type="text/javascript">
                    alert("EL REGISTRO HA SIDO MODIFICADO");
                    window.location.href="menuPrincipal.php";
                    </script>';  
            }
 } else {  }
   ?>     
