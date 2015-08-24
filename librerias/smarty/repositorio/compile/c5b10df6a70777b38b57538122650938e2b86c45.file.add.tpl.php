<?php /* Smarty version Smarty-3.1.11, created on 2015-07-07 16:58:11
         compiled from "templates/plantillas/modulos/inventario/productos/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1599643558559b2ef43efae8-50417298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5b10df6a70777b38b57538122650938e2b86c45' => 
    array (
      0 => 'templates/plantillas/modulos/inventario/productos/add.tpl',
      1 => 1436306285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1599643558559b2ef43efae8-50417298',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_559b2ef44743f1_64208683',
  'variables' => 
  array (
    'producto' => 0,
    'departamentos' => 0,
    'row' => 0,
    'imp' => 0,
    'tipoCosteo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559b2ef44743f1_64208683')) {function content_559b2ef44743f1_64208683($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Agregar o modificar producto</h1>
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
					<input class="form-control" id="txtCodigo" type="text" name="txtCodigo" autocomplete="off" autofocus="true" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->getCodigo();?>
"/>
				</div>
			</div>
			<div class="form-group">
				<label for="txtNombre" class="col-lg-2 control-label">Nombre</label>
				<div class="col-lg-7">
					<input class="form-control" id="txtNombre" type="text" name="txtNombre" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->getNombre();?>
"/>
				</div>
			</div>
			<div class="form-group">
				<label for="txtDescripcion" class="col-lg-2 control-label">Descripción</label>
				<div class="col-lg-6">
					<textarea rows="3" class="form-control" id="txtDescripcion" name="txtDescripcion"><?php echo $_smarty_tpl->tpl_vars['producto']->value->getDescripcion();?>
</textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="selDepartamento" class="col-lg-2 control-label">Departamento</label>
				<div class="col-lg-10">
					<select id="selDepartamento" name="selDepartamento">
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['departamentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idDepartamento'];?>
" <?php if ($_smarty_tpl->tpl_vars['producto']->value->getIdDepartamento()==$_smarty_tpl->tpl_vars['row']->value['idDepartamento']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>

						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="txtMarca" class="col-lg-2 control-label">Marca</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtMarca" type="text" name="txtMarca" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->getMarca();?>
"/>
				</div>
			</div>
			<div class="form-group">
				<label for="txtPU" class="col-lg-2 control-label">Precio unitario</label>
				<div class="col-lg-2">
					<input class="form-control" id="txtPU" type="text" name="txtPU" autocomplete="off" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['producto']->value->getPrecio())===null||$tmp==='' ? "0.00" : $tmp);?>
" style="text-align: right"/>
				</div>
			</div>
			<div class="form-group">
				<label for="txtExistencias" class="col-lg-2 control-label">Existencias</label>
				<div class="col-lg-2">
					<input class="form-control" id="txtExistencias" type="text" name="txtExistencias" autocomplete="off" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['producto']->value->getExistencias())===null||$tmp==='' ? "0" : $tmp);?>
" style="text-align: right"/>
				</div>
			</div>
			<div class="form-group">
				<label for="txtMinimo" class="col-lg-2 control-label">Inventario mínimo</label>
				<div class="col-lg-2">
					<input class="form-control" id="txtMinimo" type="text" name="txtMinimo" autocomplete="off" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['producto']->value->getMinimo())===null||$tmp==='' ? "0" : $tmp);?>
" style="text-align: right"/>
				</div>
			</div>
			<hr />
			<h2>Impuesto</h2>
			<div class="form-group">
				<label for="selImpInc" class="col-lg-2 control-label">¿Impuesto incluido?</label>
				<div class="col-lg-10">
					<select id="selImpInc" name="selImpInc">
						<option value="S" <?php if ($_smarty_tpl->tpl_vars['producto']->value->isImpInc()){?>selected<?php }?>>Si
						<option value="N" <?php if (!$_smarty_tpl->tpl_vars['producto']->value->isImpInc()){?>selected<?php }?>>No
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
" <?php if ($_smarty_tpl->tpl_vars['imp']->value/100==$_smarty_tpl->tpl_vars['producto']->value->getImpuesto()){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['imp']->value;?>

					<?php }} ?>
					</select>
				</div>
			</div>
			<hr />
			<h2>Costeo</h2>
			<div class="form-group">
				<label for="selCosteo" class="col-lg-2 control-label">Costeo</label>
				<div class="col-lg-10">
					<select id="selCosteo" name="selCosteo">
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipoCosteo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idTipoCosteo'];?>
" <?php if ($_smarty_tpl->tpl_vars['producto']->value->getIdTipoCosteo()==$_smarty_tpl->tpl_vars['row']->value['idTipoCosteo']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>

						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="txtCosto" class="col-lg-2 control-label">Costo</label>
				<div class="col-lg-2">
					<input class="form-control" id="txtCosto" type="text" name="txtCosto" autocomplete="off" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['producto']->value->getCosto())===null||$tmp==='' ? "0.00" : $tmp);?>
" style="text-align: right"/>
				</div>
			</div>
			<br />
			<button type="submit" class="btn btn-default">Guardar</button>
			<input type="reset" class="btn btn-default" id="btnReset" value="Cancelar"/>
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->getId();?>
" id="id"/>
		</form>
	</div>
</div><?php }} ?>