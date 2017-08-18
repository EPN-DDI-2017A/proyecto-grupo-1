<?php
	$usuarios = [
			[
				"usuario" => "admin",
				"password"   => "admin"
			],
			[
				"usuario" => "henry",
				"password"   => "12345"
			],
			[
				"usuario" => "pilar",
				"password"   => "12345"
			],
			[
				"usuario" => "tatiana",
				"password"   => "12345"
			],
			[
				"usuario" => "carlos",
				"password"   => "12345"
			],
	];
	if($_POST) {
	    // Procesamos los datos y los guardamos en la BDD
	    $usuario = $_POST['usuario'];
	    $password = $_POST['password'];
	    foreach($usuarios as $datos_usuario) {
			if($usuario == $datos_usuario["usuario"] && $password == $datos_usuario["password"]) {
				echo json_encode( $datos_usuario );
				die;
			}
		}
		echo json_encode( ["error" => 1] );
	}

	if($_GET) {
	    // Procesamos los datos y los guardamos en la BDD
	   	$usuario = $_GET['usuarioRegis'];
	    $password = $_GET['passwordRegis'];
	     array_push($usuarios, [
				"usuario" => $usuario,
				"password"   => $password
			]);
		echo json_encode( "Usuario Registrado Correctamente !! :)" );
	}
?>