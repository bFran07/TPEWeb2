<?php

require_once './app/db.php';

function mostrarTareas() {

    require 'templates/header.php';
    
    require 'templates/footer.php' ;
    $tareas = obtenerTareas();

    foreach($tareas as $tarea){

        echo $tarea->titulo;

    }

   

}