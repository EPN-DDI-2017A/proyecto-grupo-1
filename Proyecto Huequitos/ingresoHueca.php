<?php
	if($_POST) {
	    // Procesamos los datos y los guardamos en la BDD
	    $latitud = $_POST['latitud'];
	    $longitud = $_POST['longitud'];
	    $nombreHueca = $_POST['nombreHueca'];
	    $imagenHueca = $_POST['imagenHueca'];
	    $horarioHueca = $_POST['horarioHueca'];
	    $plato = $_POST['plato'];
	    $respuesta = [
	        'latitud' => $latitud,
	        'longitud' => $longitud,
	        'nombreHueca' => $nombreHueca,
	        'imagenHueca' => $imagenHueca,
	        'horarioHueca' => $horarioHueca,
	        'plato' => $plato,
	    ];
	    // Devolvemos una respuesta al cliente, codificado en json.
	    echo json_encode($respuesta);
	}
?>