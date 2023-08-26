<?php
require_once 'magicwand.php';

//Crear una instancia de MagicWand
$myWand = new MagicWand("oak", 11.5, "Phoenix Feathers");

//Lanzar un hechizo con la varita
$myWand->castSpell("Expecto Patronum");

//Mostrar informacion de la varita
$myWand->showInfo();

//Lanzar un hechizo con la varita
$myWand->castSpell("Expelliarmus");

?>