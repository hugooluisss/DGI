<?php /* Smarty version Smarty-3.1.11, created on 2015-07-07 17:37:30
         compiled from "templates/plantillas/modulos/inventario/servicios/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:326327337559c5214457fd8-56103339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c65c69d5d50d40079466d47ff37af439c2ef4a6' => 
    array (
      0 => 'templates/plantillas/modulos/inventario/servicios/add.tpl',
      1 => 1436308574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326327337559c5214457fd8-56103339',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_559c5214593aa3_86364132',
  'variables' => 
  array (
    'servicio' => 0,
    'imp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559c5214593aa3_86364132')) {function content_559c5214593aa3_86364132($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Agregar o modificar servicio</h1>
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
				<label for="txtCodigo" class="col-lg-2 control-label">Código</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtCodigo" type="text" name="txtCodigo" autocomplete="off" autofocus="true" value="<?php echo $_smarty_tpl->tpl_vars['servicio']->value->getCodigo();?>
"/>
				</div>
			</div>
			<div class="form-group">
				<label for="txtNombre" class="col-lg-2 control-label">Nombre</label>
				<div class="col-lg-7">
					<input class="form-control" id="txtNombre" type="text" name="txtNombre" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['servicio']->value->getNombre();?>
"/>
				</div>
			</div>
			<div class="form-group">
				<label for="txtDescripcion" class="col-lg-2 control-label">Descripción</label>
				<div class="col-lg-6">
					<textarea rows="3" class="form-control" id="txtDescripcion" name="txtDescripcion"><?php echo $_smarty_tpl->tpl_vars['servicio']->value->getDescripcion();?>
</textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="txtPU" class="col-lg-2 control-label">Precio unitario</label>
				<div class="col-lg-2">
					<input class="form-control" id="txtPU" type="text" name="txtPU" autocomplete="off" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['servicio']->value->getPrecio())===null||$tmp==='' ? "0.00" : $tmp);?>
" style="text-align: right"/>
				</div>
			</div>
			<hr />
			<h2>Impuesto</h2>
			<div class="form-group">
				<label for="selImpInc" class="col-lg-2 control-label">¿Impuesto incluido?</label>
				<div class="col-lg-10">
					<select id="selImpInc" name="selImpInc">
						<option value="S" <?php if ($_smarty_tpl->tpl_vars['servicio']->value->isImpInc()){?>selected<?php }?>>Si
						<option value="N" <?php if (!$_smarty_tpl->tpl_vars['servicio']->value->isImpInc()){?>selected<?php }?>>No
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="selImpuesto" class="col-lg-2 control-label">% impuesto</label>
				<div class="col-lg-2">
					<select id="selImpuesto" name="selImpuesto">
					<?php $_smarty_tpl->tpl_vars['imp'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['imp']->step = 1;$_smarty_tpl->tpl_vars['imp']->total = (int)ceil(($_smarty_tpl->tpl_vars['imp']->step > 0 ? 100+1 - (0) : 0-(100)+1)/abs($_smarty_tpl->tpl_vars['imp']->step));
if ($_smarty_tpl->tpl_vars['imp']->total > 0){
for ($_smarty_tpl->tpl_vars['imp']->value = 0, $_smarty_tpl->tpl_vars['imp']->iteration = 1;$_smarty_tpl->tpl_vars['imp']->iteration <= $_smarty_tpl->tpl_vars['imp']->total;$_smarty_tpl->tpl_vars['imp']->value += $_smarty_tpl->tpl_vars['imp']->step, $_smarty_tpl->tpl_vars['imp']->iteration++){
$_smarty_tpl->tpl_vars['imp']->first = $_smarty_tpl->tpl_vars['imp']->iteration == 1;$_smarty_tpl->tpl_vars['imp']->last = $_smarty_tpl->tpl_vars['imp']->iteration == $_smarty_tpl->tpl_vars['imp']->total;?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['imp']->value/100;?>
" <?php if ($_smarty_tpl->tpl_vars['imp']->value/100==$_smarty_tpl->tpl_vars['servicio']->value->getImpuesto()){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['imp']->value;?>

					<?php }} ?>
					</select>
				</div>
			</div>
			<br />
			<button type="submit" class="btn btn-default">Guardar</button>
			<input type="reset" class="btn btn-default" id="btnReset" value="Cancelar"/>
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['servicio']->value->getId();?>
" id="id"/>
		</form>
	</div>
</div><?php }} ?>