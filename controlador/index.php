<?php
global $objModulo;

switch($objModulo->getId()){
	case 'panel':
		global $sesion;
		$obj = new TUsuario($sesion['usuario']);
		$smarty->assign("nombre", $obj->getNombre());
		$smarty->assign("foto", file_exists('repositorio/usuarios/user_'.$obj->getId().'.jpg')?('repositorio/usuarios/user_'.$obj->getId().'.jpg'):('templates/imagenes/usuario.png'));
		$smarty->assign("ultimoAcceso", $obj->getUltimoAcceso());
	break;
}
?>