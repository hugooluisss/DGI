<?php /* Smarty version Smarty-3.1.11, created on 2015-06-13 13:26:26
         compiled from "templates/plantillas/modulos/usuarios/bienvenido.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127413742155784df5077841-30563925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '685ea31503d38f811ed5cc994052784a0ea53c8e' => 
    array (
      0 => 'templates/plantillas/modulos/usuarios/bienvenido.tpl',
      1 => 1434000717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127413742155784df5077841-30563925',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55784df5079198_32467525',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55784df5079198_32467525')) {function content_55784df5079198_32467525($_smarty_tpl) {?><div class="container">
    <div class="row">
    	<div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
			<form role="form" id="frmLogin" action="javascript: return false;">
				<div class="form-login">
					<h4>Bienvenido</h4>
					<input type="text" id="txtUsuario" class="form-control input-sm chat-input" placeholder="Grupo" autocomplete="off" autofocus="yes" />
					</br>
					<input type="password" id="txtPass" class="form-control input-sm chat-input" placeholder="Contraseña" />
					</br>
					<div class="wrapper">
						<span class="group-btn">
							<input type="submit" class="btn btn-primary btn-md" value="Iniciar">
						</span>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Ventana modal -->
<div class="modal fade" id="winModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" data-dismiss="modal">x</button>
				<h3>Iniciar sesión</h3>
			</div>
			<div class="modal-body" id="msg-texto">
				asdf
			</div>
		</div>
	</div>
</div><?php }} ?>