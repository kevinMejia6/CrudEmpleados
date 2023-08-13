<div class="container-fluid">
    <?php include APPPATH . "views/Components/header.php"; ?>

    <h1 class="mt-4 mb-3">Listado de Empleados</h1>

    <?php
$message = $this->input->get("message");

if ($message && strpos($_SERVER["REQUEST_URI"], "eliminar") !== false) {
    echo '<div class="alert alert-success">' .
        htmlspecialchars($message) .
        "</div>";
}
?>

    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">
                    <a href="<?php base_url(); ?>nuevo-empleado" class="btn btn-success">Nuevo Empleado</a>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Empleado</th>
                                    <th>Teléfono empleado</th>
                                    <th>Sucursal</th>
                                    <th>Cargo</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($empleados as $empleado): ?>
                                <tr>
                                    <td><?php echo $empleado->nombre .
                                            " " .
                                            $empleado->apellido; ?></td>
                                    <td><?php echo $empleado->telefono; ?></td>
                                    <td><?php echo $this->Empleado_model->get_nombre_sucursal(
                                            $empleado->id_sucursal
                                        ); ?></td>
                                    <td><?php echo $this->Empleado_model->get_nombre_cargo(
                                            $empleado->id_cargo
                                        ); ?></td>
                                    <td><?php echo $empleado->estado; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(
                                                "empleado/eliminar/" .
                                                    $empleado->id
                                            ); ?>" class="btn btn-warning">Eliminar</a>
                                        <a href="<?php base_url(); ?>empleado/<?php echo $empleado->id; ?>"
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

        <div class="col-lg-2">
            <div class="card">
                <div class="card-body">
                    <label for="estado_filter">Filtrar por Estado:</label>
                    <select id="estado_filter" name="estado_filter" class="form-control">
                        <option value="">Todos</option>
                        <option value="activo">Activo</option>
                        <option value="inactivo">Inactivo</option>
                    </select>
                    <button id="filter_button" class="btn btn-primary mt-2 btn-block">Filtrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include APPPATH . "views/Components/footer.php"; ?>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const filterButton = document.getElementById("filter_button");
    const estadoFilter = document.getElementById("estado_filter");

    filterButton.addEventListener("click", function() {
        const selectedEstado = estadoFilter.value;
        const url = "<?php echo base_url(
                "empleados"
            ); ?>?estado=" + selectedEstado;
        window.location.href = url;
    });

});
</script>