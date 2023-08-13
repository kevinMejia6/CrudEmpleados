<?php
    include(APPPATH . 'views/Components/header.php'); // Ruta a la vista parcial
    $currentUrl = $_SERVER['REQUEST_URI'];

    ?>

<h1 class="mt-4 mb-3">Listado de Sucursales</h1>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-success">Nueva Sucursal</button>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($sucursales as $sucursal): ?>
                            <tr>
                                <td><?php echo $sucursal->id; ?></td>
                                <td><?php echo $sucursal->nombre; ?></td>
                                <td><?php echo $sucursal->direccion; ?></td>
                                <td><?php echo $sucursal->telefono; ?></td>
                                <td><?php echo $sucursal->estado; ?></td>

                                <td>
                                    <a href="<?php echo base_url("sucursal/eliminar/" . $sucursal->id); ?>"
                                        class="btn btn-warning delete-button">Eliminar</a>

                                    <a href="<?php base_url(); ?>sucursal/<?php echo $sucursal->id; ?>"
                                        class="btn btn-danger">Editar</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php
    include(APPPATH . 'views/Components/footer.php'); // Ruta a la vista parcial
    ?>