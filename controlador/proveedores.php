<?php
global $objModulo;

switch($objModulo->getId()){
	case 'proveedores':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select idProveedor from proveedor");
		$datos = array();
		while(!$rs->EOF){
			$obj = new TProveedor($rs->fields['idProveedor']);
			$el = array();
			$el['empresa'] = $obj->getEmpresa();
			$el['contacto'] = $obj->getNombre();
			$el['telefono'] = $obj->getTelefono();
			$el['encriptado']['id'] = dechex($obj->getId());
			
			array_push($datos, $el);
			
			$rs->moveNext();
		}
		
		$smarty->assign("proveedores", $datos);
	break;
	case 'proveedorAdd':
		$obj = new TProveedor(hexdec($_GET['id']));
		$smarty->assign("proveedor", $obj);
	break;
	case 'cproveedor':
		switch($objModulo->getAction()){
			case 'guardar':
				$obj = new TProveedor(hexdec($_POST['id']));
				
				$obj->setEmpresa($_POST['empresa']);
				$obj->setDireccion($_POST['direccion']);
				$obj->setCiudad($_POST['ciudad']);
				$obj->setEstado($_POST['estado']);
				$obj->setTelefono($_POST['telefono']);
				$obj->setCuenta($_POST['cuenta']);
				$obj->setNombre($_POST['nombre']);
				$obj->setPuesto($_POST['puesto']);
				$obj->setComentarios($_POST['comentarios']);
				
				if ($obj->guardar())
					echo json_encode(array("band" => "true", "id" => $obj->getId()));
				else
					echo json_encode(array("band" => "false"));
			break;
			case 'del':
				$obj = new TProveedor(hexdec($_POST['id']));
				
				if ($obj->eliminar())
					echo json_encode(array("band" => "true"));
				else
					echo json_encode(array("band" => "false"));
			break;
			case 'autocomplete':
				$db = TBase::conectaDB();
				$rs = $db->Execute("select idProveedor from proveedor where empresa like '%".$_GET['term']."%' or nombre like '%".$_GET['term']."%'");
				
				$obj = new TProveedor;
				$datos = array();
				while(!$rs->EOF){
					$el = array();
					
					$obj->setId($rs->fields['idProveedor']);
					$el['id'] = $obj->getId();
					$el['label'] = $obj->getEmpresa();
					$el['identificador'] = $obj->getId();
					
					array_push($datos, $el);
					$rs->moveNext();
				}
				
				echo json_encode($datos);
			break;
		}
	break;
}
?>