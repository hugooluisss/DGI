<?php
global $objModulo;

switch($objModulo->getId()){
	case 'servicios':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select idItem from item where idTipoItem = 2 and estado = 'A'");
		$datos = array();
		while(!$rs->EOF){
			$obj = new TServicio($rs->fields['idItem']);
			$el = array();
			$el['codigo'] = $obj->getCodigo();
			$el['nombre'] = $obj->getNombre();
			$el['precio'] = $obj->getPrecio();
			$el['encriptado']['id'] = dechex($obj->getId());
			
			array_push($datos, $el);
			
			$rs->moveNext();
		}
		$smarty->assign("servicios", $datos);
	break;
	case 'servicioAdd':
		$obj = new TServicio(hexdec($_GET['id']));
		$smarty->assign("servicio", $obj);
	break;
	case 'cservicios':
		switch($objModulo->getAction()){
			case 'guardar':
				$obj = new TServicio($_POST['id']);
				
				$obj->setCodigo($_POST['codigo']);
				$obj->setNombre($_POST['nombre']);
				$obj->setDescripcion($_POST['descripcion']);
				
				$obj->setPrecio($_POST['precioUnitario']);
				$obj->setImpInc($_POST['impuestoIncluido']);
				$obj->setImpuesto($_POST['impuesto']);
				
				if ($obj->guardar())
					echo json_encode(array("band" => "true"));
				else
					echo json_encode(array("band" => "false"));
			break;
		}
	break;
}
?>