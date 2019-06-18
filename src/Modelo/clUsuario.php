<?php
namespace Modelo;

class clUsuario {

	protected $database;

	public function __construct($container)
	{	
		$this->database = $container->database;
	}

	public function datos(){
		$arr = $this->database->select('usuario', ['id', 'usuario','pass']);
		return $arr;
	}

	public function unusuario($id) {
		$data = $this->database->select( "usuario",["usuario","pass"],["id"=>$id]);
		return $data;
	}
	
	public function agregar($id, $usuario, $pass) {
		$this->database->insert("usuario",["id"=>$id,"usuario"=>"$usuario","pass"=>"$pass"]);
	}

	public function	modificar($id, $usuario, $pass) {
		$data = $this->database->update("usuario",["usuario"=>"$usuario","pass"=>"$pass"],["id"=>$id]);
		return $data;
	}

	public function eliminar($id) {
		$this->database->delete("usuario", [ "AND" => [ "id" => $id ] ]);
	}

}