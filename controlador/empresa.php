<?php
global $objModulo;

switch($objModulo->getId()){
	case 'empresa':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select *from empresa");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			
			$rs->moveNext();
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'cempresa':
		switch($objModulo->getAction()){
			case 'set':
				$db = TBase::conectaDB();
				$rs = $db->Execute("update empresa set valor = '".$_POST['val']."' where tag = '".$_POST['key']."'");
				
				if ($rs)
					echo json_encode(array("band" => "true"));
				else
					echo json_encode(array("band" => "false"));
			break;
		}
	break;
}
?>