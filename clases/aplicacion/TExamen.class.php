<?php
/**
* TExamen
* Construcción del examen y su gestión
* @package aplicacion
* @autor Hugo Santiago hugo.santiago@iebo.edu.mx
**/


class TExamen{
	private $idExamen;
	private $periodo;
	private $tiempo;
	public $reactivos;
	private $nombre;
	private $descripcion;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	
	public function TExamen($id = ''){
		$this->setId($id);
		$this->reactivos = array();
	}
	
	/**
	* Carga los datos del objeto
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setId($id = ''){
		if ($id == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from examen where idExamen = ".$id);
		
		foreach($rs->fields as $field => $val)
			$this->$field = $val;
			
		$this->reactivos = $this->reactivos;
		
		return true;
	}
	
	/**
	* Retorna el identificador del objeto
	*
	* @autor Hugo
	* @access public
	* @return integer identificador
	*/
	
	public function getId(){
		return $this->idExamen;
	}
	
	/**
	* Establece el periodo
	*
	* @autor Hugo
	* @access public
	* @param string $id identificador del objeto
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setPeriodo($val = ''){
		$this->periodo = $val;
		return true;
	}
	
	/**
	* Retorna el valor del periodo
	*
	* @autor Hugo
	* @access public
	* @return string Periodo
	*/
	
	public function getPeriodo(){
		return $this->periodo;
	}
	
	/**
	* Establece el tiempo
	*
	* @autor Hugo
	* @access public
	* @param int $seg Segundos permitidos para contestar el examen
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setTiempo($seg = 0){
		$this->tiempo = $val;
		return true;
	}
	
	/**
	* Retorna el valor del tiempo
	*
	* @autor Hugo
	* @access public
	* @return integer Cantidad de segundos
	*/
	
	public function getTiempo(){
		return $this->tiempo;
	}
	
	/**
	* Establece el nombre
	*
	* @autor Hugo
	* @access public
	* @param string $val Nombre del examen
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setNombre($val = ''){
		$this->nombre = $val;
		return true;
	}
	
	/**
	* Retorna el nombre del examen
	*
	* @autor Hugo
	* @access public
	* @return string Nombre
	*/
	
	public function getNombre(){
		return $this->nombre;
	}
	
	/**
	* Establece el descripcion
	*
	* @autor Hugo
	* @access public
	* @param string $val Descripción del examen
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setDescripcion($val = ''){
		$this->descripcion = $val;
		return true;
	}
	
	/**
	* Retorna la descripción
	*
	* @autor Hugo
	* @access public
	* @return string Descripción
	*/
	
	public function getDescripcion(){
		return $this->descripcion;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$rs = $db->Execute("INSERT INTO examen(nombre, descripcion, periodo, tiempo) VALUES ('', '', '', 0)");
			$this->idExamen = $db->Insert_ID();
		}
		
		$db->Execute("UPDATE examen
			SET
				nombre = '".$this->getNombre()."',
				descripcion = '".$this->getDescripcion()."',
				periodo = '".$this->getPeriodo()."',
				tiempo = ".$this->getTiempo()."
			WHERE idExamen = ".$this->getId());
			
		return true;
	}
	
	/**
	* Elimina el objeto de la base de datos
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function eliminar(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("delete from examen where idExamen = ".$this->getId());
		
		return $rs?true:false;
	}
	
	/**
	* Agrega la opción y la guarda en la base de datos
	*
	* @autor Hugo
	* @access public
	* @param TOpcion|char Objeto que representa una opción en la pregunta
	* @return boolean True si se realizó sin problemas
	*/
	public function addReactivo($obj = ''){
		if ($this->getId() == '') return false;
		if ($obj == '') return false;
		
		if (!$obj->guardar($this->getId())) return false;
		
		array_push($this->reactivos, $obj);
		return true;
	}
	
	/**
	* Elimina la opción de la lista
	*
	* @autor Hugo
	* @access public
	* @param TOpcion|char Objeto que representa una opción en la pregunta
	* @return boolean True si se realizó sin problemas
	*/
	public function delReactivo($obj = ''){
		if ($this->getId() == '') return false;
		if ($obj == '') return false;
		
		if(!$obj->eliminar()) return false;
		
		$this->getReactivos();
		return true;
	}
	
	/**
	* Carga la lista de opciones al objeto que representa la pregunta
	*
	* @autor Hugo
	* @access public
	* @return array Lista de opciones
	*/
	
	public function getReactivo(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select idReactivo from reactivo where idExamen = ".$this->getId()." order by posicion");
		$this->reactivos = array();
		while(!$rs->EOF){
			array_push($this->reactivos, new TReactivo($rs->fields['idReactivo']));
			
			$rs->moveNext();
		}
		
		return $this->reactivos;
	}
	
	/**
	* crea un objeto json con los datos del examen
	*
	* @autor Hugo
	* @access private
	* @return json Objeto json con todos los datos (preguntas y opciones) del examen
	*/
	
	private function exportar(){
		if ($this->getId() == '') return false;
		$datos = array();
		
		return json_encode($datos);
	}
}
?>