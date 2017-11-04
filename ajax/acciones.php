<?php
	include("../class/class_conexion.php");
	$objConexion = new Conexion();
	switch ($_GET["accion"]) {
	 	case "guardar":
	 		include("../class/class_usuario.php");
	 		/*include("../class/class-empresa.php");
	 		include("../class/class-tipo-calificacion.php");
	 		include("../class/class-tipo-contenido.php");*/
	 		$usuario = new usuario(
	 				$_POST["txt-nombre"],
					$_POST["txt-apellido"],
					$_POST["txt-correo"]
					/*new Empresa($_POST["slc-empresa"],null,null,null),
					new TipoCalificacion($_POST["slc-tipos-calificaciones"],null),
					new TipoContenido($_POST["slc-tipos-contenidos"],null)*/
			);

			$usuario->insertarRegistro($objConexion);

	 	break;
	 	default:
	 		echo "Accion invalida";
	 		break;
	 } 
	 $objConexion->cerrarConexion();
?>