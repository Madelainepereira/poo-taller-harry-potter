<?php
//Herencia y Polimorfismo (polimorfismo se refiere a la propiedad por la que es posible enviar 
//mensajes sintácticamente iguales a objetos de tipos distintos.) - Personajes

//Clase base
class character{

//Atributos
	public $name; //nombre
	public $house; //casa
	
//Constructor para inicializar la clase con los atributos
	public function __construct($name, $house)
	{
		$this->name = $name;
		$this->house = $house;
	}

//Colocar la accion que quiero que se realice
	public function greet(){
		echo "Hi, i am {$this->name} from the house {$this->house}!\n"; 
	}
}

//Crear las subclases estudiante y profesor que heredan de personaje
//Subclase
class student extends character {
	public $year;

	public function __construct($name, $house, $year)
	{
		parent::__construct($name, $house);
		$this->year = $year;
	}
	
		public function study() 
		{
			echo "{$this->name} is studying for his subjects.\n";
		} 

		public function year() 
		{
			echo "{$this->name} is in 4 year\n";
		}

}

//Subclase
class professor extends character {
	public $subject;

	public function __construct($name, $house, $subject)
	{
		parent::__construct($name, $house);
		$this->subject = $subject;
	}

	public function teach()
	{
		echo "{$this->name} is teaching the subject {$this->subject}.\n";
	}
}
?>