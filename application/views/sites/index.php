<a href="<?php echo base_url('admin/sites/create'); ?>" class="btn btn-primary"> Crear </a> <br><br>

<table cellpadding="0" cellspacing="0" border="0" class="table table-striped dataTable" id="sitesTable">
	<thead>
		<tr role="row">
			<th>Id</th>
			<th>Nombre del Sitio</th>
			<th>Direcci&oacute;n</th>
			<th>Telefono</th>
			<th>Opcion</th>
		</tr>
	</thead>

	<?php
		foreach ($sites->result() as $site) {
			echo "
				<tr>
					<td>".$site->idSite."</td>
					<td>".$site->siteName."</td>
					<td>".$site->address."</td>
					<td>".$site->phone."</td>
					<td>
						" . anchor( "admin/sites/update/".$site->idSite , "Editar" , "class='btn btn-primary' ") . "
						" . anchor( "admin/sites/delete/".$site->idSite , "Eliminar" , "class='btn btn-danger' ") . "
					</td>
				</tr>
			";
		}
	?>
</table>


<script type="text/javascript">
	$(document).ready(function() {
		$('#sitesTable').dataTable( {
			"pagingType": "full_numbers"
		} );
	} );
</script>
