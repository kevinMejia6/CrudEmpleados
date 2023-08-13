  <?php
    include(APPPATH . 'views/Components/header.php'); // Ruta a la vista parcial
    ?>

<form id="formularioNuevoEmpleado" method="POST" action="<?php echo base_url();?>nuevo-empleado/guardar">
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="form-group">
        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido" required>
    </div>
    <div class="form-group">
        <label for="direccion">Direccion</label>
        <input type="text" class="form-control" id="direccion" name="direccion" required>
    </div>
    <div class="form-group">
        <label for="telefono">Telefono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" required>
    </div>
    <div class="form-group">
        <label for="id_cargo">Cargo</label>
        <input type="text" class="form-control" id="id_cargo" name="id_cargo" required>
    </div>
    <div class="form-group">
        <label for="id_sucursal">Sucursal</label>
        <input type="text" class="form-control" id="id_sucursal" name="id_sucursal" required>
    </div>
    <div class="form-group">
        <label for="estado">Estado</label>
        <input type="text" class="form-control" id="estado" name="estado" required>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <button type="button" class="btn btn-danger">Cancelar</button>
</form>


<?php
 include(APPPATH . 'views/Components/footer.php');
?>