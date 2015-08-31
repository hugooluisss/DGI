<?php
global $objModulo;

switch($objModulo->getId()){
	case 'listaUsuarios':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select num_personal from usuario");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, new TUsuario($rs->fields['num_personal']));
			$rs->moveNext();
		}
		$smarty->register_object("lista", $datos);
		//$smarty->assign("lista", $datos);
	break;
	case 'cusuarios':
		switch($objModulo->getAction()){
			case 'autocomplete':
				$db = TBase::conectaDB("sip");
				$rs = $db->Execute("select num_personal from ficha_personal 
					where nombres like '%".$_GET['term']."%' 
						or apellido_p like '%".$_GET['term']."%' 
						or apellido_m like '%".$_GET['term']."%'
						or concat(nombres, ' ', apellido_p, ' ', apellido_m) like '%".$_GET['term']."%'
						or concat(apellido_p, ' ', apellido_m, ' ', nombres) like '%".$_GET['term']."%'
				");
				
				$obj = new TTrabajador;
				$datos = array();
				while(!$rs->EOF){
					$el = array();
					
					$obj->setId($rs->fields['num_personal']);
					$el['id'] = $obj->getId();
					$el['label'] = $obj->getNombreCompleto();
					$el['nip'] = $obj->getPass() <> '';
					$el['identificador'] = $obj->getId();
					
					array_push($datos, $el);
					$rs->moveNext();
				}
				
				echo json_encode($datos);
			break;
			case 'add':
				$obj = new TUsuario($_POST['num_personal']);
				
				echo json_encode(array("band" => $obj->add()));
			break;
		}
	break;
}
?>