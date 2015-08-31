<?php
/**
* TEstudiante
* Plantilla de estudiantes
* @package aplicacion
* @autor Hugo Santiago hugo.santiago@iebo.edu.mx
**/


class TEstudiante{
	private $idEstudiante;
	private $matricula;
	private $plantel;
	private $nombre;
	private $app;
	private $apm;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	
	public function TEstudiante($id = ''){
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
		
		$db = TBase::conectaDB("sigei");
		$rs = $db->Execute("select idEstudiante, matricula, plantel, nombrem, app, apm from estudiante where idEstudiante = ".$id);
		
		foreach($rs->fields as $field => $val)
			switch($field){
				case 'idPlantel':
					$this->plantel = new TPlantel($val);
				break;
				default:
					$this->$field = $val;
			}
		
		return true;
	}
	
	/**
	* Retorna el identificador del objeto
	*
	* @autor Hugo
	* @access public
	* @return string identificador
	*/
	
	public function getId(){
		return $this->idEstudiante;
	}
	
	/**
	* Retorna el nombre
	*
	* @autor Hugo
	* @access public
	* @return string Nombre
	*/
	
	public function getNombre(){
		return $this->nombre;
	}
	
	/**
	* Retorna el apellido paterno
	*
	* @autor Hugo
	* @access public
	* @return string apellido materno
	*/
	
	public function getApp(){
		return $this->app;
	}
	
	/**
	* Retorna el apellido materno
	*
	* @autor Hugo
	* @access public
	* @return string apellido materno
	*/
	
	public function getApm(){
		return $this->apm;
	}
	
	/**
	* Retorna el nombre completo en el orden Nombre(s) app apm
	*
	* @autor Hugo
	* @access public
	* @return string nombre completo
	*/
	
	public function getNombreCompleto(){
		return $this->nombre.' '.$this->app.' '.$this->apm;
	}
	
	/**
	* Retorn ala matricula
	*
	* @autor Hugo
	* @access public
	* @return string matricula
	*/
	
	public function getMatricula(){
		return $this->matricula;
	}
}