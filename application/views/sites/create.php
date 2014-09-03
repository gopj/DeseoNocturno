<?php echo form_open('admin/sites/create', 'class="form-horizontal"');?>

	<div class="modal" id="myModal">
		
		<div class="modal-header">
			<a class="close" data-dismiss="modal"> x </a>
			<h3>Nuevo cliente</h3>
		</div>

		<div class="modal-body">

			<label class="control-label" for="nombre">Nombre Cliente:</label>
			<div class="controls">
				<?=form_input('nombre', '', '  id="nombre" placeholder="Nombre del Cliente"')?> <br />
			</div>

			<label class="control-label" for="clave">Dirección:</label>
			<div class="controls">
				<?=form_input('direccion', '', ' id="direccion" placeholder="Dirección"')?> <br />
			</div>

			<label class="control-label" for="clave">Municipio:</label>
			<div class="controls">
				<?=form_dropdown('idMunicipio', $perfiles, @$perfil['nombre']);?>
			</div>


		</div>

		<div class="modal-footer">
			<input type="submit" name="save" value="Guardar" class="btn btn-success" />
			<?php echo anchor("admin/clientes", "Cancelar", 'class="btn"'); ?>
		</div>

	</div>

<?php echo form_close(); ?>