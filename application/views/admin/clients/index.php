<div class="col-md-12">
	<h3>Lista de clientes</h3>
	
		<a class="btn btn-success text-md-right" href="<?php echo URL::base(); ?>admin/clients/add" role="button">Nuevo cliente</a>
	
	<hr>
	<table class="table">
		<thead>
			<tr>
				<th>Nombre completo</th>
				<th>Telefono</th>
				<th>Correo electronico</th>
				<th colspan="2" >Opciones</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($clients as $client): ?>
				<tr>
					<td><?php echo $client->name.' '.$client->last_name; ?></td>
					<td><?php echo $client->phone; ?></td>
					<td><?php echo $client->email; ?></td>
					<td>
					<a href="<?php echo URL::base(); ?>admin/clients/edit/<?php echo $client->id_client; ?>">
						<span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span>
					</a>
					</td>
					<td>
					<a href="<?php echo URL::base(); ?>admin/clients/delete/<?php echo $client->id_client; ?>" onclick="return confirm('¿Desea elimimnar a este cliente?');">
						<span class="glyphicon glyphicon glyphicon-trash" aria-hidden="true"></span>
					</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>