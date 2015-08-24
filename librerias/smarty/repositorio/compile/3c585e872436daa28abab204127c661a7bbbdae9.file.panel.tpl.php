<?php /* Smarty version Smarty-3.1.11, created on 2015-08-04 08:34:29
         compiled from "templates/plantillas/modulos/inventario/productos/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1154184733559b2e425fe3e7-78074914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c585e872436daa28abab204127c661a7bbbdae9' => 
    array (
      0 => 'templates/plantillas/modulos/inventario/productos/panel.tpl',
      1 => 1436361092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1154184733559b2e425fe3e7-78074914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_559b2e426c5157_38471784',
  'variables' => 
  array (
    'productos' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559b2e426c5157_38471784')) {function content_559b2e426c5157_38471784($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Library/WebServer/Documents/pdv/librerias/smarty/plugins/modifier.truncate.php';
?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Productos</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<button type="button" class="btn btn-success btn-circle btn-xl" id="btnAdd"><i class="fa fa-plus"></i>
	</div>
</div>
<br />
<div class="col-lg-12">
	<table id="tblProductos" class="table table-hover">
		<thead>
			<tr>
				<th>Código</th>
				<th>Nombre</th>
				<th>Existencias</th>
				<th>Precio</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['codigo'];?>
</td>
					<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['nombre'],50);?>
</td>
					<td><?php echo sprintf("%d",(($tmp = @$_smarty_tpl->tpl_vars['row']->value['existencias'])===null||$tmp==='' ? "0" : $tmp));?>
</td>
					<td><?php echo sprintf("%0.2f",(($tmp = @$_smarty_tpl->tpl_vars['row']->value['precio'])===null||$tmp==='' ? "0" : $tmp));?>
</td>
					<td style="text-align: right">
						<button type="button" class="btn btn-warning btn-circle" action="modificar" producto="<?php echo $_smarty_tpl->tpl_vars['row']->value['encriptado']['id'];?>
" title="Modificar"><i class="fa fa-pencil"></i></button>
						<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" producto="<?php echo $_smarty_tpl->tpl_vars['row']->value['encriptado']['id'];?>
"><i class="fa fa-times"></i></button>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div><?php }} ?>