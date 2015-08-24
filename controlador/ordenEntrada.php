<?php
global $objModulo;

switch($objModulo->getId()){
	case 'entradaAdd':
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
		
		$smarty->assign("orden", new TEntrada($_GET['id']));
	break;
	case 'listaMovimientosEntrada':
		$db = TBase::conectaDB();
		$datos = array();
		
		if ($_GET['id']){
			$rs = $db->Execute("select idMovimiento from movimiento where idOrden = ".$_GET['id']);
			
			while (!$rs->EOF){
				array_push($datos, new TMovimiento($rs->fields['idMovimiento']));
				$rs->moveNext();
			}
		}
		
		$smarty->assign("datos", $datos);
	break;
	case 'entradas':
		$db = TBase::conectaDB();
		$datos = array();
		
		$rs = $db->Execute("select idOrden from entrada");
		
		while (!$rs->EOF){
			array_push($datos, new TEntrada($rs->fields['idOrden']));
			$rs->moveNext();
		}
		
		$smarty->assign("datos", $datos);
	break;
	case 'cordenentrada':
		switch($objModulo->getAction()){
			case 'crear':
				$orden = new TEntrada;
				$orden->setProveedor($_POST['proveedor']);
				$orden->setClave($_POST['clave']);
				
				if($orden->guardar())
					echo json_encode(array("band" => "true", "id" => $orden->getId()));
				else
					echo json_encode(array("band" => "false"));
			break;
			case 'aplicar':
				$orden = new TEntrada($_POST['id']);
				if($orden->aplicar())
					echo json_encode(array("band" => "true", "id" => $orden->getId()));
				else
					echo json_encode(array("band" => "false"));
			break;
		}
	break;
}
?>