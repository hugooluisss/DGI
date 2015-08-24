<?php
global $objModulo;

switch($objModulo->getId()){
	case 'productos':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select idItem from item where idTipoItem = 1 and estado = 'A'");
		$datos = array();
		while(!$rs->EOF){
			$obj = new TProducto($rs->fields['idItem']);
			$el = array();
			$el['codigo'] = $obj->getCodigo();
			$el['nombre'] = $obj->getNombre();
			$el['precio'] = $obj->getPrecio();
			$el['existencias'] = $obj->getExistencias();
			$el['encriptado']['id'] = dechex($obj->getId());
			
			array_push($datos, $el);
			
			$rs->moveNext();
		}
		$smarty->assign("productos", $datos);
	break;
	case 'productoAdd':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from tipoCosteo");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("tipoCosteo", $datos);
		
		$rs = $db->Execute("select * from departamento");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("departamentos", $datos);
		
		$obj = new TProducto(hexdec($_GET['id']));
		$smarty->assign("producto", $obj);
	break;
	case 'cproductos':
		switch($objModulo->getAction()){
			case 'guardar':
				$obj = new TProducto($_POST['id']);
				
				$obj->setCodigo($_POST['codigo']);
				$obj->setNombre($_POST['nombre']);
				$obj->setDescripcion($_POST['descripcion']);
				
				$obj->setCosto($_POST['costo']);
				$obj->setTipoCosteo($_POST['metodoCosteo']);
				$obj->setDepartamento($_POST['departamento']);
				$obj->setPrecio($_POST['precioUnitario']);
				$obj->setImpInc($_POST['impuestoIncluido']);
				$obj->setImpuesto($_POST['impuesto']);
				$obj->setMarca($_POST['marca']);
				$obj->setMinimo($_POST['minimo']);
				$obj->setExistencias($_POST['existencias']);
				
				if ($obj->guardar())
					echo json_encode(array("band" => "true", "id" => $obj->getId()));
				else
					echo json_encode(array("band" => "false"));
			break;
			case 'autocomplete':
				$db = TBase::conectaDB();
				$rs = $db->Execute("select idItem from producto a join item b using(idItem) where idTipoItem = 1 and (nombre like '%".$_GET['term']."%' or descripcion like '%".$_GET['term']."%')");
				
				$obj = new TProducto;
				$datos = array();
				while(!$rs->EOF){
					$el = array();
					
					$obj->setId($rs->fields['idItem']);
					$el['id'] = $obj->getId();
					$el['label'] = $obj->getNombre();
					$el['identificador'] = $obj->getId();
					
					array_push($datos, $el);
					$rs->moveNext();
				}
				
				echo json_encode($datos);
			break;
			case 'findCodigo':
				$db = TBase::conectaDB();
				$rs = $db->Execute("select idItem, nombre from item where idTipoItem = 1 and codigo = '".$_POST['codigo']."'");
				
				if ($rs->EOF)
					echo json_encode(array());
				else
					echo json_encode(array("id" => $rs->fields['idItem'], "nombre" => $rs->fields['nombre']));
			break;
		}
	break;
}
?>