<?php 
    session_start();
    if(empty($_SESSION["id"])){
        header("location: apps/singin.php");
    }
    $title = 'Aero Club Oran';
    include("model/conexion.php");
    include("templates/top.php");

    $opcion = $_SESSION["nivel"];
    $username = strtoupper($_SESSION["usuario"]);

    switch ($opcion) {
        case 1:
            // Código a ejecutar si $opcion es igual a 1
            echo "Opción 1 seleccionada";
            break;
        case 2:
            // Código a ejecutar si $opcion es igual a 2
            echo "Opción 2 seleccionada";
            break;
        case 3:
            include("templates/mm_pilotos.php");
            include("templates/dash_pilotos.php");
            break;
        default:
            // Código a ejecutar si $opcion no coincide con ningún caso anterior
            echo "Opción no válida";
            break;
    }


    include("templates/bottom.php");
?>
