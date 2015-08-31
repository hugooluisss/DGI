<div class="col-lg-12">
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
			{foreach from=$lista item="row"}
				<tr>
					<td>{$row->getId()}</td>
					<td>{$row->getNombre()}</td>
					<td>{$row->getCURP()}</td>
					<td>{$row->getPass()}</td>
					<td style="text-align: right">
						<button type="button" class="btn btn-warning btn-circle" action="modificar" producto="{$row->getId()}" title="Modificar"><i class="fa fa-pencil"></i></button>
						<button type="button" class="btn btn-danger btn-circle" action="eliminar" title="Eliminar" producto="{$row->getId()}"><i class="fa fa-times"></i></button>
					</td>
				</tr>
			{/foreach}
		</tbody>
	</table>
</div>