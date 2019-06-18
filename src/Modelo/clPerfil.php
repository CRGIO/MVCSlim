<?php
namespace Modelo;

class clPerfil {

	protected $database;

	public function __construct($container)
	{	
		$this->database = $container->database;
	}

	public function datos(){
		$arr = $this->database->select('perfil', ['id', 'nombre']);
		return $arr;
	}
	
}