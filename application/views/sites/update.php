
<?php echo form_open('admin/sites/update/' . $site['idSite'], 'class="form-horizontal"');?>
	<div class="modal-header">
		<h3>Actualizar Sitio</h3>
	</div>

	<div class="modal-body"> 
		<div class="form-group">
			<label for="siteName">Nombre del Sitio:</label>
			<?=form_input('siteName', $site['siteName'], 'id="siteName" placeholder="Deseo Nocturno" class="form-control"')?>
		</div>
		
		<div class="form-group">
			<label for="address">Dirección:</label>
			<?=form_input('address', $site['address'], 'id="address" placeholder="Calientes #123" class="form-control"')?>
		</div>

		<div class="form-group">
			<label for="phone">Télefono:</label>
			<?=form_input('phone', $site['phone'], 'id="phone" placeholder="3331454785" class="form-control"')?>
		</div>
	</div>
	

	<div class="modal-footer"> 
		<a href="<?= base_url(). 'admin/sites' ?>" class="btn btn-default"> Atras </a>
		<button type="submit" class="btn btn-primary">Guardar</button> 
	</div>
<?php echo form_close(); ?>