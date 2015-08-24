<?php /* Smarty version Smarty-3.1.11, created on 2015-06-10 09:47:17
         compiled from "templates/plantillas/modulos/acercaDe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116818831255784df507b341-12710613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d9e31b08af196e3c45907953ffc274b5a8b2ed9' => 
    array (
      0 => 'templates/plantillas/modulos/acercaDe.tpl',
      1 => 1421770709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116818831255784df507b341-12710613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55784df5080819_12832574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55784df5080819_12832574')) {function content_55784df5080819_12832574($_smarty_tpl) {?><div class="modal fade" id="winAcercaDe">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" data-dismiss="modal">×</button>
				<h3>Departamento de sistemas <br/><small>Acerca de</small></h3>
			</div>
			<div class="modal-body" id="msg-texto">
				<div class="row">
					<div class="col-sm-4">
						<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
iconos/logo.jpg" class="img-circle img-responsive" />
					</div>
					<div class="col-sm-8">
						<h1>Sistema de inscripciones</h1>
						<p>
						Permite la administración de inscripciones a diferentes actividades realizadas por las áreas del instituto.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>