<?php /* Smarty version Smarty-3.1.11, created on 2015-07-04 14:52:31
         compiled from "templates/plantillas/modulos/catalogos/proveedores/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42317609555969313b55221-54096033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5d1c545a7693ba1990fc8c74d6924cac91960ef' => 
    array (
      0 => 'templates/plantillas/modulos/catalogos/proveedores/panel.tpl',
      1 => 1436039057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42317609555969313b55221-54096033',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55969313b9da02_70217437',
  'variables' => 
  array (
    'proveedores' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55969313b9da02_70217437')) {function content_55969313b9da02_70217437($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Proveedores</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<button type="button" class="btn btn-success btn-circle btn-xl" id="btnAdd"><i class="fa fa-plus"></i>
	</div>
</div>
<br />
<div class="col-lg-12">
	<table id="tblProveedores" class="table table-hover">
		<thead>
			<tr>
				<th>Empresa</th>
				<th>Contacto</th>
				<th>Teléfono</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['proveedores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['empresa'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['contacto'];?>
</td>
					<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['row']->value['telefono'])===null||$tmp==='' ? "No se indicó" : $tmp);?>
</td>
					<td style="text-align: right">
						<button type="button" class="btn btn-warning btn-circle" action="modificar" proveedor="<?php echo $_smarty_tpl->tpl_vars['row']->value['encriptado']['id'];?>
" title="Modificar"><i class="fa fa-pencil"></i></button>
						<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" proveedor="<?php echo $_smarty_tpl->tpl_vars['row']->value['encriptado']['id'];?>
"><i class="fa fa-times"></i></button>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div><?php }} ?>