<div class="col-md-3"></div>
<div class="col-md-6">
    <label for=""><?php echo $message; ?></label>
    <form action="<?php echo URL::base(); ?>admin/users/edit/<?php echo $user->id_user; ?>" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" name="name" required value="<?php echo $user->name; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Apellido</label>
            <input type="text" class="form-control" name="last_name" value="<?php echo $user->last_name; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Correo electronico</label>
            <input type="email" class="form-control" required name="email" value="<?php echo $user->email; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contraseña (Dejar vacio si no desea cambiar la contraseña)</label>
            <input type="password" class="form-control" name="password" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Repetir Contraseña </label>
            <input type="password" class="form-control" name="r_password" >
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
<div class="col-md-3"></div>