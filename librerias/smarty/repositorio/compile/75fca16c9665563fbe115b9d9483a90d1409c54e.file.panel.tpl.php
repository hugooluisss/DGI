<?php /* Smarty version Smarty-3.1.11, created on 2015-08-31 13:13:48
         compiled from "templates/plantillas/modulos/usuarios/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74554938055e4995c0237c7-71464976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75fca16c9665563fbe115b9d9483a90d1409c54e' => 
    array (
      0 => 'templates/plantillas/modulos/usuarios/panel.tpl',
      1 => 1441039298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74554938055e4995c0237c7-71464976',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55e4995c024e83_58256332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e4995c024e83_58256332')) {function content_55e4995c024e83_58256332($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de usuarios</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<button type="button" class="btn btn-success btn-circle btn-xl" id="btnAdd"><i class="fa fa-plus"></i>
	</div>
</div>
<br />
<div class="row">
	<div class="col-lg-2">
		<label for="txtTrabajador" class="control-label">Agregar trabajador</label>
	</div>
	<div class="col-lg-8">
		<input class="form-control" id="txtTrabajador" name="txtTrabajador" type="text" autocomplete="off" autofocus="true" value=""/>
	</div>
</div>
<br />
<div id="dvLista">
</div><?php }} ?>