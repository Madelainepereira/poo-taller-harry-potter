<?php
//Composición y Agregación - Escuela y Casa
//Clase
	class house
	{
//Atributos
		public $name;
		public $founder;
		public $points = 0;
		public $students = [];

		public function __construct($name, $founder) 
	{
			$this->name = $name;
			$this->founder = $founder;
	}

//Metodos
	public function addStudent($student) 
	{
		$this->students[] = $student;
	}

	public function scorePoints($points) 
	{
		$this->points += $points;
	}
}

//Clase
	class HogwartsSchool {

		public $name;
		public $foundation;
		public $houses = [];

	public function __construct($name, $foundation)
	{
		$this->name = $name;
		$this->foundation = $foundation;
	}

	public function totalStudents()
	{
	//Metodos
		$totalStudents = 0;
		foreach ($this->houses as $house){
			$totalStudents += count($house->students);
		}
		 	return $totalStudents;
	}
}
?>