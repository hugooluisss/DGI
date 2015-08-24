<?php
global $objModulo;

switch($objModulo->getAction()){
	case 'iniciar': case 'validarCredenciales':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select idUsuario, pass from usuario where upper(nick) = upper('".$_POST['usuario']."')");
		
		$result = array('band' => false, 'mensaje' => 'Error al consultar los datos');
		if($rs->EOF)
			$result = array('band' => false, 'mensaje' => 'El usuario no es válido'); 
		elseif($rs->fields['pass'] <> md5($_POST['pass']))
			$result = array('band' => false, 'mensaje' => 'La contraseña no es válida');
		else
			$result = array('band' => true);
		
		if($result['band']){
			$obj = new TUsuario($rs->fields['idUsuario']);
			$sesion['usuario'] = 		$rs->fields['idUsuario'];
			$sesion['navegador'] = 			$obj->getNavegador();
			$sesion['sistemaOperativo'] = 	$obj->getSistemaOperativo();
			$_SESSION[SISTEMA] = $sesion;
			
			$obj->setUltimoAcceso();
		}
		
		echo json_encode($result);
	break;
	case 'logout':
		$_SESSION[SISTEMA] = array();
		session_destroy();
		
		header ("Location: index.php");
	break;
}
?>