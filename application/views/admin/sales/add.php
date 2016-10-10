<div class="col-md-3"></div>
<div class="col-md-6">
    <label for=""><?php echo $message; ?></label>
    <form action="<?php echo URL::base(); ?>admin/sales/add" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Cliente</label>
            <select name="fk_client" id="">
                <option value="">Seleccione una opción</option>
                <?php foreach($clients as $client): ?>
                <option value="<?php echo $client->id_client; ?>">
                    <?php echo $client->name.' '.$client->last_name; ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>


        <div class="form-group" id="addform">
            <label>Producto y cantidad</label>
            <br/>
            <select name="product[]" id="">
                <option value="">Seleccione una opción</option>
                <?php foreach($products as $product): ?>
                <option value="<?php echo $product->id_product; ?>">
                    <?php echo $product->name; ?>
                </option>
                <?php endforeach; ?>
            </select>
            <input type="text" name="num[]">
            
        </div>

        <div class="form-group">
            <input type="button" value="agregar" onclick="addProduct();">
        </div>
        
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
<div class="col-md-3"></div>
