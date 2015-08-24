<?php
global $objModulo;

switch($objModulo->getId()){
	case 'departamentos':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select idDepartamento from departamento");
		$datos = array();
		while(!$rs->EOF){
			$obj = new TDepartamento($rs->fields['idDepartamento']);
			$el = array();
			$el['nombre'] = $obj->getNombre();
			$el['idDepartamento'] = $obj->getId();
			$el['encriptado']['id'] = dechex($obj->getId());
			
			array_push($datos, $el);
			
			$rs->moveNext();
		}

		$smarty->assign("departamentos", $datos);
	break;
	case 'departamentoAdd':
		$obj = new TDepartamento(hexdec($_GET['id']));
		$smarty->assign("depto", $obj);
	break;
	case 'cdepartamentos':
		switch($objModulo->getAction()){
			case 'guardar':
				$obj = new TDepartamento(hexdec($_POST['id']));
				
				$obj->setNombre($_POST['nombre']);
				$obj->setDescripcion($_POST['descripcion']);
				
				if ($obj->guardar())
					echo json_encode(array("band" => "true"));
				else
					echo json_encode(array("band" => "false"));
			break;
			case 'del':
				$obj = new TDepartamento(hexdec($_POST['id']));
				
				if ($obj->eliminar())
					echo json_encode(array("band" => "true"));
				else
					echo json_encode(array("band" => "false"));
			break;
		}
	break;
}
?>