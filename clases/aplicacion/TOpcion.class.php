<?php
/**
* TOpcion
* Control de opciones a preguntas
* @package aplicacion
* @autor Hugo Santiago hugo.santiago@iebo.edu.mx
**/


class TOpcion{
	private $idOpcion;
	private $idReactivo;
	private $texto;
	private $posicion;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	
	public function TOpcion($id = ''){
		$this->setId($id);
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
		$rs = $db->Execute("select * from opcion where idOpcion = ".$id);
		
		foreach($rs->fields as $field => $val)
			$this->$field = $val;
		
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
		return $this->idOpcion;
	}
	
	/**
	* Establece el texto
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setTexto($val = ''){
		$this->texto = $val;
		return true;
	}
	
	/**
	* Retorna el valor del texto
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getTexto(){
		return $this->texto;
	}
	
	/**
	* Establece el valor de la posicion
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setPosicion($val = 0){
		$this->posicion = $val;
		return true;
	}
	
	/**
	* Retorna el número de posición
	*
	* @autor Hugo
	* @access public
	* @return integer Posicion
	*/
	
	public function getPosicion(){
		return $this->posicion;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @param integer $reactivo Identificador del reactivo
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar($reactivo = ''){
		$db = TBase::conectaDB();
		if ($reactivo == '') return false;
		
		$rs = $db->Execute("select * from reactivo where idReactivo = ".$reactivo);
		if ($rs->EOF) return false;
		
		if ($this->getId() == ''){
			$rs = $db->Execute("INSERT INTO opcion(idReactivo, texto, posicion) VALUES (".$reactivo.", '', 0);");
			if (!$rs) return false;
			
			$this->idOpcion = $db->Insert_ID();
		}
		
		$rs = $db->Execute("UPDATE opcion
			SET
				texto = '".$this->texto."',
				posicion = ".($this->posicion == ''?0:$this->posicion)."
			WHERE idOpcion = ".$this->getId());
			
		return $rs?true:false;
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
		$rs = $db->Execute("delete from opcion where idOpcion = ".$this->getId());
		
		return $rs?true:false;
	}
	
	/**
	* Agrega el reactivo a la lista del examen
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
		
		array_push($this->opciones, $obj);
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
	public function delOpcion($obj = ''){
		if ($this->getId() == '') return false;
		if ($obj == '') return false;
		
		if(!$obj->eliminar()) return false;
		
		$this->getOpciones();
		return true;
	}
	
	/**
	* Carga la lista de opciones al objeto que representa la pregunta
	*
	* @autor Hugo
	* @access public
	* @return array Lista de opciones
	*/
	
	public function getOpciones(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select idOpcion from opcion where idReactivo = ".$this->getId()." order by posicion");
		$this->opciones = array();
		while(!$rs->EOF){
			array_push($this->opciones, new TOpcion($rs->fields['idOpcion']));
			
			$rs->moveNext();
		}
		
		return $this->opciones;
	}
}
?>