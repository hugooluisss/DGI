<?php
/**
* TReactivo
* Son las preguntas de cada examen
* @package aplicacion
* @autor Hugo Santiago hugo.santiago@iebo.edu.mx
**/


class TReactivo{
	private $idReactivo;
	private $idExamen;
	private $valor;
	private $instrucciones;
	private $posicion;
	public $opciones;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	
	public function TReactivo($id = ''){
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
		$rs = $db->Execute("select * from reactivo where idReactivo = ".$id);
		
		foreach($rs->fields as $field => $val)
			$this->$field = $val;
			
		$this->getOpciones();
		
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
		return $this->idReactivo;
	}
	
	/**
	* Establece el valor de las instrucciones
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setInstrucciones($val = ''){
		$this->instrucciones = $val;
		return true;
	}
	
	/**
	* Retorna las instrucciones
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getInstrucciones(){
		return $this->instrucciones;
	}
	
	/**
	* Establece el valor que tiene el reactivo
	*
	* @autor Hugo
	* @access public
	* @param integer $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setValor($val = 0){
		$this->valor = $val;
		return true;
	}
	
	/**
	* Retorna el valor del texto
	*
	* @autor Hugo
	* @access public
	* @return integer valor
	*/
	
	public function getValor(){
		return $this->valor;
	}
	
	/**
	* Establece el texto
	*
	* @autor Hugo
	* @access public
	* @param integer $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setPosicion($val = ''){
		$this->posicion = $val;
		return true;
	}
	
	/**
	* Retorna la posicion del reactivo dentro del examen
	*
	* @autor Hugo
	* @access public
	* @return string Texto
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
	
	public function guardar($examen = ''){
		$db = TBase::conectaDB();
		if ($examen <> ''){
			$rs = $db->Execute("select * from examen where idExamen = ".$examen);
			if ($rs->EOF) return false;
			
			if ($this->getId() == ''){
				$rs = $db->Execute("INSERT INTO reactivo(idExamen, instrucciones) VALUES (".$examen.", '');");
				if (!$rs) return false;
				
				$this->idReactivo = $db->Insert_ID();
			}
		}
		
		
		if ($this->getId() == '')
			return false;
			
		$rs = $db->Execute("UPDATE reactivo
			SET
				instrucciones = '".$this->instrucciones."',
				valor = ".($this->valor == ''?1:$this->valor).",
				posicion = ".($this->posicion == ''?0:$this->posicion)."
			WHERE idReactivo = ".$this->getId());
			
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
		$rs = $db->Execute("delete from reactivo where idReactivo = ".$this->getId());
		
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
	public function addOpcion($obj = ''){
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
		$this->reactivos = array();
		while(!$rs->EOF){
			array_push($this->opciones, new TOpcion($rs->fields['idOpcion']));
			
			$rs->moveNext();
		}
		
		return $this->opciones;
	}
}