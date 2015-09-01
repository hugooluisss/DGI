<div class="box">
	<div class="box-header">
		<h3 class="box-title">Lista de trabajadores</h3>
	</div><!-- /.box-header -->
	<div class="box-body">
		<table id="tblUsuarios" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>CURP</th>
					<th>NIP</th>
					<th>Tipo</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr>
						<td>{$row->getId()}</td>
						<td>{$row->getNombreCompleto()}</td>
						<td>{$row->getCURP()}</td>
						<td>{$row->getPass()}</td>
						<td>
							<select>
								{foreach from=$tipoUsuario item="tipo"}
								<option value="{$tipo.idTipo}">{$tipo.descripcion}
								{/foreach}
							</select>
						</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" trabajador="{$row->getId()}"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>