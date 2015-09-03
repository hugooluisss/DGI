<?php
class TUsuario extends TTrabajador{
	private $navegador;
	private $versionNavegador;
	private $sistemaOperativo;
	private $tipo;
	
	public function TUsuario($id = ''){
		parent::TTrabajador($id);
		
		$browser=array("IE","OPERA","MOZILLA","NETSCAPE","FIREFOX","SAFARI","CHROME");
		$os=array("WIN","MAC","LINUX");
		
		# definimos unos valores por defecto para el navegador y el sistema operativo
		$this->navegador = "Otro";
		$this->versionNavegador = "0.0";
		$this->sistemaOperativo = "";
		# buscamos el navegador con su sistema operativo
		foreach($browser as $parent){
			$s = strpos(strtoupper($_SERVER['HTTP_USER_AGENT']), $parent);
			$f = $s + strlen($parent);
			$version = substr($_SERVER['HTTP_USER_AGENT'], $f, 15);
			$version = preg_replace('/[^0-9,.]/','',$version);
			if ($s){
				$this->navegador = $parent;
				$this->versionNavegador = $version;
			}
		}
		
		foreach($os as $val){
			if (strpos(strtoupper($_SERVER['HTTP_USER_AGENT']),$val) !== false)
				$this->sistemaOperativo = $val;
		}
		
		return true;
	}
	
	public function getSistemaOperativo(){
		if ($this->getId() == '') return '';
		return $this->sistemaOperativo;
	}
	
	public function getVersionNavegador(){
		if ($this->getId() == '') return '';
		return $this->versionNavegador;
	}
	
	public function getNavegador(){
		if ($this->getId() == '') return '';
		return $this->navegador;
	}
	
	public function add(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("INSERT INTO usuario(num_personal, idTipo, alta, ultAcceso) VALUES(".$this->getId().", 2, now(), null);");
		
		return $rs?true:false;
	}
	
	public function del(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("delete from usuario where num_personal = ".$this->getId()."");
		
		return $rs?true:false;
	}
	
	public function getTipo(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select idTipo from usuario where num_personal = ".$this->getId()."");
		
		return $rs->fields['idTipo'];
	}
	
	public function setTipo($id = ''){
		if ($id == '' or $this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("update usuario set idTipo = ".$id." where num_personal = ".$this->getId()."");
		return true;
	}
}
?>