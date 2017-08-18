<?php
    if($_POST){
        $correo = $_POST['correo'];
        $sugerencia = $_POST['sugerencia'];
        $respuesta = [
            'correo' => $correo,
            'sugerencia' => $sugerencia
        ];
        echo json_encode($respuesta);
    } 
?>