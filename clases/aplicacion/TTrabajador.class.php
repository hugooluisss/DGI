<?php
class TTrabajador{
	private $num_personal;
	private $nombres;
	private $apellido_p;
	private $apellido_m;
	private $nip;
	private $estatus_laboral;
	private $correo_pers;
	private $nombre_plaza;
	public $plantel;
	private $tel_celular;
	private $tel_casa;
	private $tel_recados;
	private $foto;
	private $curp;
	private $rfc;
	
	public function TTrabajador($id = ""){
		if($id <> '')
			$this->setId($id);
	}
	
	public function setId($id = ''){
		if($id == '')
			return false;
		
		$db = TBase::conectaDB("sip");
		
		$rs = $db->Execute("select nombres, apellido_p, apellido_m, num_personal, nip, estatus_laboral, id_plantel, correo_pers, nombre_plaza, foto, tel_casa, tel_celular, tel_recados, rfc, curp from ficha_personal where num_personal = ".$id);
		
		foreach($rs->fields as $key => $val){
			switch($key){
				case 'id_plantel':
					$this->plantel = new TPlantel($val);
				break;
				default:
					$this->$key = $val;
			}
		}

		return !$rs->EOF;
	}
	
	public function getId(){
		return $this->num_personal;
	}
	
	public function getNum_personal(){
		return $this->getId();
	}
	
	public function setByCURP($curp = ''){
		$db = TBase::conectaDB("sip");
		
		$rs = $db->Execute("select num_personal from ficha_personal where curp = '".strtoupper($curp)."'");
		
		return $this->setId($rs->fields['num_personal']);
	}
	
	public function getPass(){
		if($this->num_personal == '') return false;
		return $this->nip;
	}
	
	public function isActivo(){
		if($this->num_personal == '') return false;
		return $this->estatus_laboral == 1;
	}
	
	public function getFoto(){
		return $this->foto;
	}
	
	public function getNombreCompleto(){
		return $this->nombres.' '.$this->apellido_p.' '.$this->apellido_m;
	}
	
	public function getNombre(){
		return $this->nombres;
	}
	
	public function getApellidoPaterno(){
		return $this->apellido_p;
	}
	
	public function getApellidoMaterno(){
		return $this->apellido_m;
	}
	
	public function getNombrePlaza(){
		return $this->nombre_plaza;
	}
	
	public function getCURP(){
		return $this->curp;
	}
	
	public function getCorreo(){
		return str_replace("*", "", $this->correo_pers);
	}
	
	public function getNombreRegion(){
		return $this->plantel->getNombreRegion();
	}
	
	public function getNombrePlantel(){
		return $this->plantel->getNombre();
	}
	
	public function getIdPlantel(){		
		return $this->plantel->getId();
	}
	
	public function getTelCasa(){
		return $this->tel_casa;
	}
	
	public function getTelCelular(){
		return $this->tel_celular;
	}
	
	public function getTelrecados(){
		return $this->tel_recados;
	}
	
	public function isSindicalizado(){
		if ($this->num_personal == '') return '';
		
		$db = TBase::conectaDB("sip");
		$rs = $db->Execute("select tipo_personal from ficha_personal where num_personal = ".$this->num_personal);
		
		return $rs->fields['tipo_personal'] == 1;
	}
	
	public function getRFC(){
		return $this->rfc;
	}
}
?>