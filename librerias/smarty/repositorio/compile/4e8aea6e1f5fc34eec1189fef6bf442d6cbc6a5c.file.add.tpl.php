<?php /* Smarty version Smarty-3.1.11, created on 2015-08-06 11:37:26
         compiled from "templates/plantillas/modulos/catalogos/proveedores/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2265511065596959ede9526-90452975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e8aea6e1f5fc34eec1189fef6bf442d6cbc6a5c' => 
    array (
      0 => 'templates/plantillas/modulos/catalogos/proveedores/add.tpl',
      1 => 1438695973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2265511065596959ede9526-90452975',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5596959ee17ca6_64655431',
  'variables' => 
  array (
    'proveedor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5596959ee17ca6_64655431')) {function content_5596959ee17ca6_64655431($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Agregar o modificar proveedor</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12 errores">
		<ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="form-group">
				<label for="txtEmpresa" class="col-lg-2 control-label">Nombre de la empresa</label>
				<div class="col-lg-10">
					<input class="form-control" id="txtEmpresa" type="text" name="txtEmpresa" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['proveedor']->value->getEmpresa();?>
"/>
				</div>
			</div>
			<div class="form-group">
				<label for="txtDireccion" class="col-lg-2 control-label">Dirección</label>
				<div class="col-lg-10">
					<input class="form-control" id="txtDireccion" type="text" name="txtDireccion" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['proveedor']->value->getDireccion();?>
"/>
				</div>
			</div>
			<div class="form-group">
				<label for="txtCiudad" class="col-lg-2 control-label">Ciudad</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtCiudad" type="text" name="txtCiudad" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['proveedor']->value->getCiudad();?>
"/>
				</div>
			</div>
			<div class="form-group">
				<label for="txtEstado" class="col-lg-2 control-label">Estado</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtEstado" type="text" name="txtEstado" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['proveedor']->value->getEstado();?>
"/>
				</div>
			</div>
			<div class="form-group">
				<label for="txtTelefono" class="col-lg-2 control-label">Teléfono</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtTelefono" type="text" name="txtTelefono" autocomplete="off" placeholder="Teléfono" value="<?php echo $_smarty_tpl->tpl_vars['proveedor']->value->getTelefono();?>
"/>
				</div>
			</div>
			<div class="form-group">
				<label for="txtCuenta" class="col-lg-2 control-label">Cuenta bancaria</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtCuenta" type="text" name="txtCuenta" autocomplete="off" placeholder="Cuenta bancaria" value="<?php echo $_smarty_tpl->tpl_vars['proveedor']->value->getCuenta();?>
"/>
				</div>
			</div>
			<hr />
			<h2>Contacto</h2>
			<div class="form-group">
				<label for="txtNombre" class="col-lg-2 control-label">Nombre</label>
				<div class="col-lg-6">
					<input class="form-control" id="txtNombre" type="text" name="txtNombre" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['proveedor']->value->getNombre();?>
"/>
				</div>
			</div>
			<div class="form-group">
				<label for="txtPuesto" class="col-lg-2 control-label">Puesto</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtNombre" type="text" name="txtPuesto" autocomplete="on" value="<?php echo $_smarty_tpl->tpl_vars['proveedor']->value->getPuesto();?>
"/>
				</div>
			</div>
			<hr />
			<div class="form-group">
				<label for="txtComentarios" class="col-lg-2 control-label">Comentarios</label>
				<div class="col-lg-6">
					<textarea rows="3" class="form-control" id="txtComentarios" name="txtComentarios"><?php echo $_smarty_tpl->tpl_vars['proveedor']->value->getComentarios();?>
</textarea>
				</div>
			</div>
			<button type="submit" class="btn btn-default">Guardar</button>
			<input type="reset" class="btn btn-default" id="btnReset" value="Cancelar"/>
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['proveedor']->value->getId();?>
" id="id"/>
		</form>
	</div>
</div><?php }} ?>