<?php /* Smarty version Smarty-3.1.11, created on 2015-08-31 13:50:38
         compiled from "templates/plantillas/modulos/usuarios/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21782054955e4995dc08606-44099636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0792779071f81e2ec50c2a73a57f2de0982f47da' => 
    array (
      0 => 'templates/plantillas/modulos/usuarios/lista.tpl',
      1 => 1441047027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21782054955e4995dc08606-44099636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55e4995dc351b6_14612996',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e4995dc351b6_14612996')) {function content_55e4995dc351b6_14612996($_smarty_tpl) {?><div class="col-lg-12">
	<table id="tblUsuarios" class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>CURP</th>
				<th>NIP</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->getId();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->getNombre();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->getCURP();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->getPass();?>
</td>
					<td style="text-align: right">
						<button type="button" class="btn btn-warning btn-circle" action="modificar" producto="<?php echo $_smarty_tpl->tpl_vars['row']->value->getId();?>
" title="Modificar"><i class="fa fa-pencil"></i></button>
						<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" producto="<?php echo $_smarty_tpl->tpl_vars['row']->value->getId();?>
"><i class="fa fa-times"></i></button>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div><?php }} ?>