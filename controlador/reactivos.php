<?php
global $objModulo;
global $ini;

$repositorio = "repositorio/imagenes/";
$url_repo = $ini['sistema']['url'].$repositorio.$_GET['examen'].'/';

switch($objModulo->getId()){
	case 'reactivos':
		$smarty->assign("examen", $_GET['examen']);
	break;
	case 'listaMediosReactivo':
		$directorio = scandir($repositorio.$_GET['examen'].'/');
		$imgs = array();
		foreach($directorio as $archivo){
			if (! ($archivo == '.' or $archivo == '..' or $archivo == 'thumbnail')){
				$img = array();
				$img['nombre'] = $archivo;
				$img['miniatura'] = $url_repo."thumbnail/".$archivo;
				$img['real'] = $url_repo.$archivo;
				
				array_push($imgs, $img);
			}
		}
		
		$smarty->assign("lista", $imgs);
	break;
	case 'creactivos':
		switch($objModulo->getAction()){
			case 'upload':
				$upload_handler = new UploadHandler(array(
					"upload_dir" => $repositorio.$_GET['examen'].'/',
					"upload_url" => 'http://localhost/repositorio/imagenes/'.$_GET['examen'].'/'
				));
			break;
		}
	break;
}
?>