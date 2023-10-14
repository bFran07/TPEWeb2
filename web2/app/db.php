<?php



function obtenerTareas () {

    $db = new PDO('mysql:host=localhost;dbname=tpe2web;charset=utf8', 'root', '');

    $query = $db->prepare( 'SELECT * FROM trabajo');
    $query->execute();

    $tareas = $query->fetchAll(PDO::FETCH_OBJ);
    
     return $tareas; 

}