<?php
    include(APPPATH . 'views/Components/header.php'); // Ruta a la vista parcial
    $currentUrl = $_SERVER['REQUEST_URI'];

    // Convertir el estado del filtro a minúsculas
    $estadoFiltrado = strtolower($estadoFiltrado);

    ?>

<h1 class="mt-4 mb-3">Listado de Empleados</h1>
<div class="row">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <a href="<?php base_url(); ?>nuevo-sucursal" class="btn btn-success">Nueva Sucursal</a>
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
                            <!-- Modificar el bucle foreach para mostrar solo las sucursales con estado activo -->
                            <?php foreach ($sucursales as $sucursal): ?>
                            <tr>
                                <?php if ($sucursal->estado === 'activa'): ?>
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
                                <?php endif; ?>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-2">
        <div class="card">
            <div class="card-body">
                <label for="estado">Filtrar por estado:</label>
                <select name="estado" id="estado" class="form-control">
                    <option value="activa" <?php echo ($estadoFiltrado === 'activa') ? 'selected' : ''; ?>>Activa
                    </option>
                    <option value="inactiva" <?php echo ($estadoFiltrado === 'Inactiva') ? 'selected' : ''; ?>>
                        Inactiva</option>
                </select>
                <button id="submit" class="btn btn-primary mt-2 btn-block">Filtrar</button>
            </div>
        </div>
    </div>
</div>
</div>


<?php
    include(APPPATH . 'views/Components/footer.php'); // Ruta a la vista parcial
    ?>