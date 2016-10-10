<div class="col-md-3"></div>
<div class="col-md-6">
    <label for=""><?php echo $message; ?></label>
    <form action="<?php echo URL::base(); ?>admin/clients/add" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Apellido</label>
            <input type="text" class="form-control" name="last_name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="text" class="form-control" name="phone">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Correo electronico</label>
            <input type="email" class="form-control" required name="email">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
<div class="col-md-3"></div>