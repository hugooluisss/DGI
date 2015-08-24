<?php /* Smarty version Smarty-3.1.11, created on 2015-07-03 12:56:43
         compiled from "templates/plantillas/modulos/catalogos/clientes/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16536797445596cbaf076731-95945123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ec0e5e859b2f723339dcaeab018df23483ce6e6' => 
    array (
      0 => 'templates/plantillas/modulos/catalogos/clientes/add.tpl',
      1 => 1435946202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16536797445596cbaf076731-95945123',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5596cbaf132671_60351508',
  'variables' => 
  array (
    'cliente' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5596cbaf132671_60351508')) {function content_5596cbaf132671_60351508($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Agregar o modificar cliente</h1>
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
				<label for="txtNombre" class="col-lg-2 control-label">Nombre</label>
				<div class="col-lg-7">
					<input class="form-control" id="txtNombre" type="text" name="txtNombre" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getNombre();?>
"/>
				</div>
			</div>
			<div class="form-group">
				<label for="txtDireccion" class="col-lg-2 control-label">Sexo</label>
				<div class="col-lg-10">
					<select id="selSexo" name="selSexo">
						<option value="M" <?php if ($_smarty_tpl->tpl_vars['cliente']->value->getSexo()=='M'){?>selected<?php }?>>Masculino
						<option value="F" <?php if ($_smarty_tpl->tpl_vars['cliente']->value->getSexo()=='F'){?>selected<?php }?>>Femenino
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="txtTelefono" class="col-lg-2 control-label">Teléfono</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtTelefono" type="text" name="txtTelefono" autocomplete="off" placeholder="Teléfono" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getTelefono();?>
"/>
				</div>
			</div>
			<div class="form-group">
				<label for="txtEmail" class="col-lg-2 control-label">Email</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtEmail" type="text" name="txtEmail" autocomplete="off" placeholder="Email" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getEmail();?>
"/>
				</div>
			</div>
			<div class="form-group">
				<label for="txtDireccion" class="col-lg-2 control-label">Dirección</label>
				<div class="col-lg-6">
					<textarea rows="3" class="form-control" id="txtDireccion" name="txtDireccion"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->getDireccion();?>
</textarea>
				</div>
			</div>
			
			<hr />
			<div class="form-group">
				<label for="txtComentarios" class="col-lg-2 control-label">Comentarios</label>
				<div class="col-lg-6">
					<textarea rows="3" class="form-control" id="txtComentarios" name="txtComentarios"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->getComentarios();?>
</textarea>
				</div>
			</div>
			<button type="submit" class="btn btn-default">Guardar</button>
			<input type="reset" class="btn btn-default" id="btnReset" value="Cancelar"/>
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getId();?>
" id="id"/>
		</form>
	</div>
</div><?php }} ?>