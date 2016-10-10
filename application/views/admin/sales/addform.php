
<br><br>
<select name="product[]" id="">
    <option value="">Seleccione una opción</option>
    <?php foreach($products as $product): ?>
    <option value="<?php echo $product->id_product; ?>">
        <?php echo $product->name; ?>
    </option>
    <?php endforeach; ?>
</select>
<input type="text" name="num[]">