<div class="col-md-12">
	<h3>Lista de usuarios</h3>
	
		<a class="btn btn-success text-md-right" href="<?php echo URL::base(); ?>admin/users/add" role="button">Nuevo usuario</a>
	
	<hr>
	<table class="table">
		<thead>
			<tr>
				<th>Nombre completo</th>
				<th>Correo electronico</th>
				<th colspan="2" >Opciones</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($users as $user): ?>
				<tr>
					<td><?php echo $user->name.' '.$user->last_name; ?></td>
					<td><?php echo $user->email; ?></td>
					<td>
					<a href="<?php echo URL::base(); ?>admin/users/edit/<?php echo $user->id_user; ?>">
						<span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span>
					</a>
					</td>
					<td>
					<a href="<?php echo URL::base(); ?>admin/users/delete/<?php echo $user->id_user; ?>" onclick="return confirm('¿Desea elimimnar a este usuario?');">
						<span class="glyphicon glyphicon glyphicon-trash" aria-hidden="true"></span>
					</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>