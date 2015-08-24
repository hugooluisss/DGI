<?php /* Smarty version Smarty-3.1.11, created on 2015-07-04 14:52:25
         compiled from "templates/plantillas/modulos/catalogos/clientes/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3286094735596cad3893d14-50452049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaf617f9d3ce7c0ede9ca04fd39492300bff9bb8' => 
    array (
      0 => 'templates/plantillas/modulos/catalogos/clientes/panel.tpl',
      1 => 1436039057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3286094735596cad3893d14-50452049',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5596cad38db726_50535774',
  'variables' => 
  array (
    'clientes' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5596cad38db726_50535774')) {function content_5596cad38db726_50535774($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Clientes</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<button type="button" class="btn btn-success btn-circle btn-xl" id="btnAdd"><i class="fa fa-plus"></i>
	</div>
</div>
<br />
<div class="col-lg-12">
	<table id="tblClientes" class="table table-hover">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Teléfono</th>
				<th>email</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
					<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['row']->value['telefono'])===null||$tmp==='' ? "No se indicó" : $tmp);?>
</td>
					<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['row']->value['email'])===null||$tmp==='' ? "No se indicó" : $tmp);?>
</td>
					<td style="text-align: right">
						<button type="button" class="btn btn-warning btn-circle" action="modificar" cliente="<?php echo $_smarty_tpl->tpl_vars['row']->value['encriptado']['id'];?>
" title="Modificar"><i class="fa fa-pencil"></i></button>
						<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" cliente="<?php echo $_smarty_tpl->tpl_vars['row']->value['encriptado']['id'];?>
"><i class="fa fa-times"></i></button>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div><?php }} ?>