<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Nuevo Empleado</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-5 bg-dark text-light">Nuevo Empleado</h1>
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
    <select class="form-control" id="id_cargo" name="id_cargo" required>
        <option value="">Seleccionar cargo</option>
        <?php foreach ($cargo as $cargo) : ?>
            <option value="<?php echo $cargo->id; ?>"><?php echo $cargo->nombre; ?></option>
        <?php endforeach; ?>
    </select>
</div>

    <div class="form-group">
    <label for="id_sucursal">Sucursal</label>
    <select class="form-control" id="id_sucursal" name="id_sucursal" required>
        <option value="">Seleccionar sucursal</option>
        <?php foreach ($sucursal as $sucursal) : ?>
            <option value="<?php echo $sucursal->id; ?>"><?php echo $sucursal->nombre; ?></option>
        <?php endforeach; ?>
    </select>
</div>
<div class="form-group">
    <label for="estado">Estado</label>
    <select class="form-control" id="estado" name="estado" required>
        <option value="">Seleccionar estado</option>
        <option value="activo">Activo</option>
        <option value="inactivo">Inactivo</option>
    </select>
</div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <button type="button" class="btn btn-danger">Cancelar</button>
</form>
    </div>
 <?php
    include(APPPATH . 'views/Components/footer.php');
    ?>
 <script>
        
     <?php if($this->session->flashdata("success")): ?>
    Swal.fire({
        icon: 'success',
        title: 'Good...',
        text: '<?php echo $this->session->flashdata("success"); ?>',
    });
    <?php endif; ?>

    </script>




