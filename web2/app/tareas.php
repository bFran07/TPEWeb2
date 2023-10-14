<?php

require_once './app/db.php';

function mostrarTareas() {

    require 'html/index.php';
    
    $tareas = obtenerTareas();

    foreach($tareas as $tarea){

        echo $tarea->titulo;

    }

   

}