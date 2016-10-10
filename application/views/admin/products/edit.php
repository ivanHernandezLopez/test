<div class="col-md-3"></div>
<div class="col-md-6">
    <label for=""><?php echo $message; ?></label>
    <form action="<?php echo URL::base(); ?>admin/products/edit/<?php echo $product->id_product; ?>" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" name="name" required value="<?php echo $product->name; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">SKU</label>
            <input type="text" class="form-control" name="sku" value="<?php echo $product->sku; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Precio</label>
            <input type="text" class="form-control" name="price" value="<?php echo $product->price; ?>">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
<div class="col-md-3"></div>