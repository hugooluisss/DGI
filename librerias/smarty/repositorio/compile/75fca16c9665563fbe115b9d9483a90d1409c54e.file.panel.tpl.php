<?php /* Smarty version Smarty-3.1.11, created on 2015-07-02 09:14:45
         compiled from "templates/plantillas/modulos/usuarios/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8869979785578591ab43f75-82357392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75fca16c9665563fbe115b9d9483a90d1409c54e' => 
    array (
      0 => 'templates/plantillas/modulos/usuarios/panel.tpl',
      1 => 1435844068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8869979785578591ab43f75-82357392',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5578591ab626e5_08915543',
  'variables' => 
  array (
    'foto' => 0,
    'nombre' => 0,
    'ultimoAcceso' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5578591ab626e5_08915543')) {function content_5578591ab626e5_08915543($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Bienvenido</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-4 text-center">
		<img src="<?php echo $_smarty_tpl->tpl_vars['foto']->value;?>
" class="img-circle" style="width: 200px; height: 200px"/>
	</div>
	<div class="col-lg-8">
		<h2><?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</h2>
		<br />
		Último acceso el <?php echo $_smarty_tpl->tpl_vars['ultimoAcceso']->value;?>

	</div>
</div><?php }} ?>