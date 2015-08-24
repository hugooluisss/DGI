<?php /* Smarty version Smarty-3.1.11, created on 2015-07-03 13:57:13
         compiled from "templates/plantillas/modulos/catalogos/departamentos/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1331051175596daef6bd895-04448643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83c38bcc354ee8eff196802bbd3a6bcf2439ef6f' => 
    array (
      0 => 'templates/plantillas/modulos/catalogos/departamentos/add.tpl',
      1 => 1435949829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1331051175596daef6bd895-04448643',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5596daef6ea203_65662165',
  'variables' => 
  array (
    'depto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5596daef6ea203_65662165')) {function content_5596daef6ea203_65662165($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Agregar o modificar departamento</h1>
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
					<input class="form-control" id="txtNombre" type="text" name="txtNombre" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['depto']->value->getNombre();?>
"/>
				</div>
			</div>
			<div class="form-group">
				<label for="txtDescripcion" class="col-lg-2 control-label">Descripción</label>
				<div class="col-lg-6">
					<textarea rows="3" class="form-control" id="txtDescripcion" name="txtDescripcion"><?php echo $_smarty_tpl->tpl_vars['depto']->value->getDescripcion();?>
</textarea>
				</div>
			</div>
			<button type="submit" class="btn btn-default">Guardar</button>
			<input type="reset" class="btn btn-default" id="btnReset" value="Cancelar"/>
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['depto']->value->getId();?>
" id="id"/>
		</form>
	</div>
</div><?php }} ?>