<?php
//Clases y objetos - Varita magica

//Vamos a hacer la simulacion de estar creando un juego de magia, en el que
//los personajes pueden usar varitas magicas para lanzar hechizos.

//Una clase define qué cosas puede hacer un objeto y qué cosas puede almacenar.
class MagicWand {

//Atributos (características) que tiene un objeto
	public $wood; //madera
	public $length; //longitud
	public $corecore; //nucleo

//Constructor para inicializar la clase con los atributos
	public function __construct($wood, $length, $corecore)
	{
		$this -> wood = $wood;
		$this -> length = $length;
		$this -> corecore = $corecore;
	}

//Metodos de clase - Acciones que un objeto puede hacer

//Colocar la accion que quiero que se realice
	public function castSpell($spell){
	echo "casting $spell with {$this -> wood} wand\n";
	}

	public function showInfo(){
	echo "wand of {$this -> wood}, length {$this -> length} inches, corecore of {$this ->corecore}\n";
	}
}
?>