<?php
require_once 'character.php';

//Crear un estudiante llamado "Harry" de la casa "Gryffindor" en el año 4
$harry = new Student("Harry Potter", "Gryffindor", 4);

//Crear un profesor llamado "Dumbledore" de la casa "Gryffindor" que enseña "Defensa Contra las Artes Oscuras"
$dumbledore = new professor("Albus Dumbledore", "Gryffindor", "Defense against the dark arts");

//Usar los métodos de los objetos
$harry->greet();
$harry->study();
$harry->year();

$dumbledore->greet();
$dumbledore->teach();
?>