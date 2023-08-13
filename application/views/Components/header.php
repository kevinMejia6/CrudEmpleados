<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>CRUD EMPLEADOS</title>
</head>

<body>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5 mt-5">
            <a class="navbar-brand" href="#">Crud Empleados</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php if ($this->uri->uri_string() == 'empleados') echo 'active'; ?>">
                        <a class="nav-link" href="<?= base_url('empleados'); ?>">Empleados</a>
                    </li>
                    <li class="nav-item <?php if ($this->uri->uri_string() == 'sucursales') echo 'active'; ?>">
                        <a class="nav-link" href="<?= base_url('sucursales'); ?>">Sucursales</a>
                    </li>
                    <li class="nav-item <?php if ($this->uri->uri_string() == 'cargos') echo 'active'; ?>">
                        <a class="nav-link" href="<?= base_url('cargos'); ?>">Cargos</a>
                    </li>
                </ul>
            </div>
        </nav>