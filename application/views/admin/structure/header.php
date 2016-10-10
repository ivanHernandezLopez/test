<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Prueba</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo URL::Base(); ?>admin/users">Lista de usuarios</a></li>
                        <li><a href="<?php echo URL::Base(); ?>admin/users/add">Nuevo usuario</a></li>
                    </ul>
                </li>
                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clientes <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo URL::Base(); ?>admin/clients">Lista de clientes</a></li>
                        <li><a href="<?php echo URL::Base(); ?>admin/clients/add">Nuevo cliente</a></li>
                    </ul>
                </li>
                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo URL::Base(); ?>admin/products">Lista de productos</a></li>
                        <li><a href="<?php echo URL::Base(); ?>admin/products/add">Nuevo producto</a></li>
                    </ul>
                </li>
                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ventas <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo URL::Base(); ?>admin/sales">Lista de ventas</a></li>
                        <li><a href="<?php echo URL::Base(); ?>admin/sales/add">Nueva venta</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>