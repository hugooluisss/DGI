<?php /* Smarty version Smarty-3.1.11, created on 2015-07-03 08:45:09
         compiled from "templates/plantillas/modulos/administracion/empresa/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14378497995596000553c3a7-10932629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3fc91baa8a84d20a5afcfca42dab87f26bd101c' => 
    array (
      0 => 'templates/plantillas/modulos/administracion/empresa/panel.tpl',
      1 => 1435929259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14378497995596000553c3a7-10932629',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_559600055d8c50_69402688',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559600055d8c50_69402688')) {function content_559600055d8c50_69402688($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Datos de la empresa</h1>
	</div>
</div>
<br />
<div class="col-lg-12">
	<table id="tblUsuarios" class="table table-hover">
		<thead>
			<tr>
				<th>Campo</th>
				<th>Valor</th>
				<th>Descripción</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
					<td><input class="form-control" action="campo" key="<?php echo $_smarty_tpl->tpl_vars['row']->value['tag'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['valor'];?>
" /></td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['descripcion'];?>
</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div><?php }} ?>