<?php
global $objModulo;

switch($objModulo->getId()){
	case 'listaExamenes':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select idExamen from examen");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, new TExamen($rs->fields['idExamen']));
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cexamenes':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TExamen($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setPeriodo($_POST['periodo']);
				$obj->setDescripcion($_POST['descripcion']);
				$obj->setTiempo($_POST['tiempo']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TExamen($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
			case 'setPerfil':
				$obj = new TUsuario($_POST['usuario']);
				echo json_encode(array("band" => $obj->setTipo($_POST["tipo"])));
			break;
		}
	break;
}
?>