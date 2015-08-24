<?php /* Smarty version Smarty-3.1.11, created on 2015-08-06 13:16:46
         compiled from "templates/plantillas/modulos/inventario/servicios/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1981633464559c51b7321c50-14330455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cd90dfb28bec0614ce076a31fe1ca423287cea6' => 
    array (
      0 => 'templates/plantillas/modulos/inventario/servicios/panel.tpl',
      1 => 1436361092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1981633464559c51b7321c50-14330455',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_559c51b7391628_25248004',
  'variables' => 
  array (
    'servicios' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559c51b7391628_25248004')) {function content_559c51b7391628_25248004($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Library/WebServer/Documents/pdv/librerias/smarty/plugins/modifier.truncate.php';
?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Servicios</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<button type="button" class="btn btn-success btn-circle btn-xl" id="btnAdd"><i class="fa fa-plus"></i>
	</div>
</div>
<br />
<div class="col-lg-12">
	<table id="tblServicios" class="table table-hover">
		<thead>
			<tr>
				<th>Código</th>
				<th>Nombre</th>
				<th>Precio</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['servicios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['codigo'];?>
</td>
					<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['nombre'],50);?>
</td>
					<td><?php echo sprintf("%0.2f",(($tmp = @$_smarty_tpl->tpl_vars['row']->value['precio'])===null||$tmp==='' ? "0" : $tmp));?>
</td>
					<td style="text-align: right">
						<button type="button" class="btn btn-warning btn-circle" action="modificar" servicio="<?php echo $_smarty_tpl->tpl_vars['row']->value['encriptado']['id'];?>
" title="Modificar"><i class="fa fa-pencil"></i></button>
						<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" servicio="<?php echo $_smarty_tpl->tpl_vars['row']->value['encriptado']['id'];?>
"><i class="fa fa-times"></i></button>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div><?php }} ?>