<?php
global $objModulo;

switch($objModulo->getId()){
	case 'corden':
		switch($objModulo->getAction()){
			case 'addMov':
				$obj = new TOrden($_POST['orden']);
				
				if($obj->addMovimiento($_POST['item'], $_POST['cantidad'], $_POST['precio']))
					echo json_encode(array("band" => "true", "id" => $obj->getId()));
				else
					echo json_encode(array("band" => "false"));
			break;
			case 'delMov':
				$obj = new TOrden($_POST['orden']);
				
				if($obj->delMovimiento($_POST['item']))
					echo json_encode(array("band" => "true"));
				else
					echo json_encode(array("band" => "false"));
			break;
			case 'eliminar':
				$orden = new TOrden($_POST['id']);
				if($orden->eliminar())
					echo json_encode(array("band" => "true", "id" => $orden->getId()));
				else
					echo json_encode(array("band" => "false"));
			break;
		}
	break;
}
?>