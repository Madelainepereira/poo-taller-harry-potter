<?php
//Métodos Especiales y Encapsulación - Hechizo

class spell {
//Definicion de la clase
	public $name;
	public $tipe;
	public $level;

	public function __construct($name, $tipe, $level)
	{
		$this->name = $name;
		$this->tipe = $tipe;
		$this->level = $level;
	}

	public function launch($caster)
	{
		echo "{$caster->name} cast the spell {$this->name} of tipe {$this->tipe}.\n";
	}
	
//Para mostrar informacion de los hechizos
	public function __toString() {
        return "{$this->name} (level {$this->level})";
    }
}

?>