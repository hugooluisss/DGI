<?php /* Smarty version Smarty-3.1.11, created on 2015-09-07 13:36:06
         compiled from "templates/plantillas/modulos/reactivos/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143757764955e9b9718cb9b3-96217904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27c5ed422f046744e271b3f0fc7e3656a23bbbca' => 
    array (
      0 => 'templates/plantillas/modulos/reactivos/panel.tpl',
      1 => 1441650960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143757764955e9b9718cb9b3-96217904',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55e9b971919b81_73965814',
  'variables' => 
  array (
    'examen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e9b971919b81_73965814')) {function content_55e9b971919b81_73965814($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de reactivos</h1>
	</div>
</div>

<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Reactivos agregados</a></li>
  <li><a data-toggle="tab" href="#add">Agregar o Modificar</a></li>
  <li><a data-toggle="tab" href="#multimedia">Multimedia</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div id="dvLista">
			
		</div>
	</div>
	
	<div id="add" class="tab-pane fade">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">			
					<div class="form-group">
						<label for="txtInstrucciones" class="col-lg-2">Instrucciones</label>
						<div class="col-lg-10">
							<textarea id="txtInstrucciones" name="txtInstrucciones" class="form-control" rows="15"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="txtHoras" class="col-lg-2">Valor (puntos)</label>
						<div class="col-lg-1">
							<select id="selHoras" name="selHoras" class="form-control">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['cont'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['loop'] = is_array($_loop=11) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['name'] = 'cont';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cont']['total']);
?>
									<option value=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['cont']['index'];?>
><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['cont']['index'];?>

								<?php endfor; endif; ?>
							</select>
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="button" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
				</div>
			</div>
		</form>
	</div>
	
	<div id="multimedia" class="tab-pane fade">
		<div class="box">
			<div class="box-body">
				<p>
					<span class="btn btn-success fileinput-button">
						<i class="glyphicon glyphicon-plus"></i>
						<span>Seleccionar archivos...</span>
						<!-- The file input field used as target for the file upload widget -->
						<input id="fileupload" type="file" name="files[]" multiple>
					</span>
				</p>
				<div id="progress" class="progress">
					<div class="progress-bar progress-bar-success"></div>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="box-body" id="dvListaMedios">
			</div>
		</div>
	</div>
</div>

<input type="hidden" id="examen" value="<?php echo $_smarty_tpl->tpl_vars['examen']->value;?>
"/><?php }} ?>