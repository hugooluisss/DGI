<?php /* Smarty version Smarty-3.1.11, created on 2015-08-06 11:21:00
         compiled from "templates/plantillas/modulos/inventario/entradas/movimientos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82718942255c373353b7951-78901119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03d1fc1bac7687cdc7153e02757cb56e83d7a8a5' => 
    array (
      0 => 'templates/plantillas/modulos/inventario/entradas/movimientos.tpl',
      1 => 1438877786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82718942255c373353b7951-78901119',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55c373354649b7_96243451',
  'variables' => 
  array (
    'datos' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c373354649b7_96243451')) {function content_55c373354649b7_96243451($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Library/WebServer/Documents/pdv/librerias/smarty/plugins/modifier.truncate.php';
?><table id="tblMovimientos" class="table table-hover">
	<thead>
		<tr>
			<th>Código</th>
			<th>Producto</th>
			<th>Cantidad</th>
			<th>P. U.</th>
			<th>Total</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value->item->getCodigo();?>
</td>
				<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value->item->getNombre(),50);?>
</td>
				<td style="text-align: right;"><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['row']->value->getCantidad());?>
</td>
				<td style="text-align: right;"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['row']->value->getPrecio());?>
</td>
				<td style="text-align: right;"><?php echo sprintf("%.2f",($_smarty_tpl->tpl_vars['row']->value->getCantidad()*$_smarty_tpl->tpl_vars['row']->value->getPrecio()));?>
</td>
				<td style="text-align: right">
					<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" movimiento="<?php echo $_smarty_tpl->tpl_vars['row']->value->getId();?>
"><i class="fa fa-times"></i></button>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>