<?php include(APPPATH . 'views/Components/header.php'); ?>

<h1 class="mt-4 mb-3">Listado de Cargos</h1>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="<?php echo base_url('nuevo-cargo'); ?>" class="btn btn-success">Nuevo Cargo</a>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cargos as $cargo): ?>
                            <tr>
                                <td><?php echo $cargo->id; ?></td>
                                <td><?php echo $cargo->nombre; ?></td>
                                <td><?php echo $cargo->descripcion; ?></td>
                                <td>
                                    <a href="<?php echo base_url("cargo/eliminar/" . $cargo->id); ?>"
                                        class="btn btn-warning delete-button">Eliminar</a>

                                    <a href="<?php base_url(); ?>cargo/<?php echo $cargo->id; ?>"
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

<?php include(APPPATH . 'views/Components/footer.php'); ?>

<script>
function confirmDelete(cargoId) {
    if (confirm("¿Estás seguro de eliminar este cargo?")) {
        window.location.href = "<?php echo base_url('cargo/eliminar/'); ?>" + cargoId;
    }
}
</script>