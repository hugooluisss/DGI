<?php /* Smarty version Smarty-3.1.11, created on 2015-07-02 21:56:19
         compiled from "templates/plantillas/modulos/administracion/usuarios/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1682769020559369d1bacdd2-43448850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7040e866b3fddac8a61740703c4891c6a056595e' => 
    array (
      0 => 'templates/plantillas/modulos/administracion/usuarios/add.tpl',
      1 => 1435891642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1682769020559369d1bacdd2-43448850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_559369d1bf4919_44260051',
  'variables' => 
  array (
    'tipos' => 0,
    'el' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559369d1bf4919_44260051')) {function content_559369d1bf4919_44260051($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Agregar o modificar usuario</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12 errores">
		<ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-5">
		<form role="form" id="frmAdd" onsubmit="javascript: return false;">
			<div class="form-group">
				<label for="selTipo">Usuario</label>
				<select id="selTipo" name="selTipo" class="form-control" autofocus="true">
					<?php  $_smarty_tpl->tpl_vars['el'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['el']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['el']->key => $_smarty_tpl->tpl_vars['el']->value){
$_smarty_tpl->tpl_vars['el']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['el']->value['idTipoUsuario'];?>
" <?php if ($_smarty_tpl->tpl_vars['user']->value->getIdTipo()==$_smarty_tpl->tpl_vars['el']->value['idTipoUsuario']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['el']->value['nombre'];?>

					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="txtUsuario">Usuario</label>
				<input class="form-control" id="txtUsuario" name="txtUsuario" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getNick();?>
">
				<p class="help-block hide" id="valUsuario">Validando usuario</p>
			</div>
			
			<div class="form-group">
				<label for="txtEmail">Correo electrónico</label>
				<input class="form-control" id="txtEmail" name="txtEmail" autocomplete="off" type="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
">
				<p class="help-block hide" id="valUsuario">Validando dirección de correo electrónico</p>
			</div>
			
			<div class="form-group">
				<label for="txtPass">Contraseña</label>
				<input class="form-control" type="password" id="txtPass" name="txtPass">
			</div>
			<div class="form-group">
				<label for="txtConfirmar">Confirmar</label>
				<input class="form-control" type="password" id="txtConfirmar" name="txtConfirmar">
			</div>
			<div class="form-group">
				<label for="txtNombre">Propietario</label>
				<input class="form-control" id="txtNombre" name="txtNombre" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getNombre();?>
">
			</div>
			
			<button type="submit" class="btn btn-default">Guardar</button>
			<input type="reset" class="btn btn-default" id="btnReset" value="Cancelar"/>
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
" id="id"/>
		</form>
	</div>
</div><?php }} ?>