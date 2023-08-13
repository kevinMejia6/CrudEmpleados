
    <?php
    include(APPPATH . 'views/Components/header.php'); // Ruta a la vista parcial
    ?>
    <h1 class="mt-4 mb-3">Listado de Empleados</h1>
    <div class="row">
        <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
            <a  href="<?php base_url()?>nuevo-empleado" type="button" class="btn btn-success">Nuevo Empleado</a>
            <div class="table-responsive"> <!-- Agregamos una clase para hacer la tabla responsive -->
                <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Cargo</th>
                    <th>Sucursal</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                     <?php foreach ($empleados as $empleado): ?>
                            <tr>
                                <td><?php echo $empleado->id; ?></td>
                                <td><?php echo $empleado->nombre; ?></td>
                                <td><?php echo $empleado->apellido; ?></td>
                                <td><?php echo $empleado->direccion; ?></td>
                                <td><?php echo $empleado->telefono; ?></td>
                                <td><?php echo $this->Empleado_model->get_nombre_cargo($empleado->id_cargo); ?></td>
                                <td><?php echo $this->Empleado_model->get_nombre_sucursal($empleado->id_sucursal); ?></td>
                                <td><?php echo $empleado->estado; ?></td>
                                <td>
                                    <a href="<?php base_url()?>empleado" class="btn btn-warning">Eliminar</a>
                                    <a href="<?php base_url()?>empleado/<?php echo $empleado->id; ?>" class="btn btn-danger">Editar</a>
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
    include(APPPATH . 'views/Components/footer.php');
    ?>
