<?php
global $objModulo;

switch($objModulo->getId()){
	case 'citems':
		switch($objModulo->getAction()){
			case 'buscarCodigo':
				$db = TBase::conectaDB();
				$datos = array();
				$rs = $db->Execute("select idItem, idTipoItem from item where codigo = '".$_POST['codigo']."'");
				
				if ($rs->EOF)
					$datos["band"] = false;
				else{
					$datos["band"] = true;
					$datos["tipo"] = $rs->fields['idTipoItem'] == $_POST['tipo'];
					
					switch($rs->fields['idTipoItem']){
						case 1:
							$obj = new TProducto($rs->fields['idItem']);
							
							$datos['datos']['nombre'] = $obj->getNombre();
							$datos['datos']['descripcion'] = $obj->getDescripcion();
							$datos['datos']['departamento'] = $obj->getIdDepartamento();
							$datos['datos']['precio'] = $obj->getPrecio();
							$datos['datos']['impInc'] = $obj->isImpInc()?'S':'N';
							$datos['datos']['impuesto'] = $obj->getImpuesto();
							$datos['datos']['idTipoCosteo'] = $obj->getIdTipoCosteo();
							$datos['datos']['costo'] = $obj->getCosto();
							$datos['datos']['id'] = $obj->getId();
							$datos['datos']['existencias'] = $obj->getExistencias();
							$datos['datos']['minimo'] = $obj->getMinimo();
							$datos['datos']['marca'] = $obj->getMarca();
							$datos['datos']['codigo'] = $obj->getCodigo();
						break;
						case 2: #servicios
							$obj = new TServicio($rs->fields['idItem']);
							
							$datos['datos']['nombre'] = $obj->getNombre();
							$datos['datos']['descripcion'] = $obj->getDescripcion();
							$datos['datos']['precio'] = $obj->getPrecio();
							$datos['datos']['impInc'] = $obj->isImpInc()?'S':'N';
							$datos['datos']['impuesto'] = $obj->getImpuesto();
							$datos['datos']['id'] = $obj->getId();
							$datos['datos']['codigo'] = $obj->getCodigo();
						break;
					}
				}
				
				echo json_encode($datos);
			break;
			case 'del':
				$obj = new TItem(hexdec($_POST['id']));

				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>