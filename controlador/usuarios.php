<?php
global $objModulo;

switch($objModulo->getId()){
	case 'admonUsuarios':
	case 'listaUsuarios':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select idUsuario from usuario where estado = 'A'");
		$datos = array();
		while(!$rs->EOF){
			$obj = new TUsuario($rs->fields['idUsuario']);
			$el = array();
			$el['nick'] = $obj->getNick();
			$el['nombre'] = $obj->getNombre();
			$el['idUsuario'] = $obj->getId();
			$el['ultimoacceso'] = $obj->getUltimoAcceso();
			$el['alta'] = $obj->getAlta();
			$el['encriptado']['idUsuario'] = dechex($obj->getId());
			
			array_push($datos, $el);
			
			$rs->moveNext();
		}
		
		$smarty->assign("usuarios", $datos);
	break;
	case 'usuarioAdd':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from tipousuario");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			
			$rs->moveNext();
		}
		$smarty->assign("tipos", $datos);
		
		$obj = new TUsuario(hexdec($_GET['id']));
		$smarty->assign("user", $obj);
	break;
	case 'cusuario':
		switch($objModulo->getAction()){
			case 'verificarNombreUsuario': //Validar que el nombre de usuario no exista
				$id = $_POST['id'];
				$nombre = $_POST['nombre'];
				
				$db = TBase::conectaDB();
				$rs = $db->Execute("select idUsuario from usuario where upper(nick) = upper('".$nombre."')");
				
				if ($rs->EOF)
					echo json_encode(array("band" => "false"));
				elseif($rs->fields['idUsuario'] == $id)
					echo json_encode(array("band" => "false"));
				else
					echo json_encode(array("band" => "true"));
			break;
			case 'verificarEmail':
				$id = $_POST['id'];
				$email = $_POST['email'];
				
				$db = TBase::conectaDB();
				$rs = $db->Execute("select idUsuario from usuario where upper(email) = upper('".$email."')");
				
				if ($rs->EOF)
					echo json_encode(array("band" => "false"));
				elseif($rs->fields['idUsuario'] == $id)
					echo json_encode(array("band" => "false"));
				else
					echo json_encode(array("band" => "true"));
			break;
			case 'add':
				$obj = new TUsuario($_POST['id']);
				
				$obj->setNick($_POST['nick']);
				$obj->setNombre($_POST['nombre']);
				$obj->setEmail($_POST['email']);
				$obj->setTipo($_POST['tipo']);
				
				if ($obj->guardar())
					echo json_encode(array("band" => "true", "idUsuario" => $obj->getId()));
				else
					echo json_encode(array("band" => "false", "mensaje" => "Error al registrar la cuenta"));
			break;
			case 'setPass':
				$obj = new TUsuario($_POST['usuario']);
				
				if ($obj->setPass($_POST['pass']))
					echo json_encode(array("band" => "true"));
				else
					echo json_encode(array("band" => "false"));

			break;
			case 'del':
				$obj = new TUsuario(hexdec($_POST['usuario']));
				
				if ($obj->delete())
					echo json_encode(array("band" => "true"));
				else
					echo json_encode(array("band" => "false"));

			break;
		}
	break;
}
?>