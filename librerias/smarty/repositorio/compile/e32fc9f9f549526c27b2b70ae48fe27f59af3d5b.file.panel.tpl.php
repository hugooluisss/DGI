<?php /* Smarty version Smarty-3.1.11, created on 2015-07-04 14:52:29
         compiled from "templates/plantillas/modulos/catalogos/departamentos/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6724513645596d89b010831-66543801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e32fc9f9f549526c27b2b70ae48fe27f59af3d5b' => 
    array (
      0 => 'templates/plantillas/modulos/catalogos/departamentos/panel.tpl',
      1 => 1436039057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6724513645596d89b010831-66543801',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5596d89b04b570_25308420',
  'variables' => 
  array (
    'departamentos' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5596d89b04b570_25308420')) {function content_5596d89b04b570_25308420($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Departamentos</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<button type="button" class="btn btn-success btn-circle btn-xl" id="btnAdd"><i class="fa fa-plus"></i>
	</div>
</div>
<br />
<div class="col-lg-12">
	<table id="tblDepartamentos" class="table table-hover">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['departamentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idDepartamento'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
					<td style="text-align: right">
						<button type="button" class="btn btn-warning btn-circle" action="modificar" departamento="<?php echo $_smarty_tpl->tpl_vars['row']->value['encriptado']['id'];?>
" title="Modificar"><i class="fa fa-pencil"></i></button>
						<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" departamento="<?php echo $_smarty_tpl->tpl_vars['row']->value['encriptado']['id'];?>
"><i class="fa fa-times"></i></button>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div><?php }} ?>