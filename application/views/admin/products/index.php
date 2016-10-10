<div class="col-md-12">
	<h3>Lista de productos</h3>
	
		<a class="btn btn-success text-md-right" href="<?php echo URL::base(); ?>admin/products/add" role="button">Nuevo producto</a>
	
	<hr>
	<table class="table">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Sku</th>
				<th>Precio</th>
				<th colspan="2" >Opciones</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($products as $product): ?>
				<tr>
					<td><?php echo $product->name; ?></td>
					<td><?php echo $product->sku; ?></td>
					<td><?php echo $product->price; ?></td>
					<td>
					<a href="<?php echo URL::base(); ?>admin/products/edit/<?php echo $product->id_product; ?>">
						<span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span>
					</a>
					</td>
					<td>
					<a href="<?php echo URL::base(); ?>admin/products/delete/<?php echo $product->id_product; ?>" onclick="return confirm('¿Desea elimimnar a este producto?');">
						<span class="glyphicon glyphicon glyphicon-trash" aria-hidden="true"></span>
					</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>