<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Editar Empleado</title>
</head>
<body>
    <div class="container">
    <h1 class="mt-5 bg-dark text-light">Editar registro: <?php echo $empleado->nombre; ?></h1>
    <form id="formularioNuevoEmpleado" method="POST" action="<?php echo base_url();?>nuevo-empleado/guardar">
        <div class="form-group">
            <input type="hidden" id="id_empleado" name="id_empleado" value="<?php echo $empleado->id; ?>">

            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required value="<?php echo $empleado->nombre; ?>">
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required value="<?php echo $empleado->apellido; ?>">
        </div>
        <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required value="<?php echo $empleado->direccion; ?>">
        </div>
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required value="<?php echo $empleado->telefono; ?>">
        </div>
        <div class="form-group">
            <label for="id_cargo">Cargo</label>
            <select class="form-control" id="id_cargo" name="id_cargo" required>
                <option value="">Seleccionar cargo</option>
                <?php foreach ($cargos as $cargo) : ?>
                    <option value="<?php echo $cargo->id; ?>" <?php echo ($cargo->id == $empleado->id_cargo) ? 'selected' : ''; ?>>
                        <?php echo $cargo->nombre; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <input type="hidden" id="id_sucursal_original" value="<?php echo $empleado->id_sucursal; ?>">
        <div class="form-group">
            <label for="id_sucursal">Sucursal</label>
            <select class="form-control" id="id_sucursal" name="id_sucursal" required>
                <option value="">Seleccionar sucursal</option>
                <?php foreach ($sucursales as $sucursal) : ?>
                    <option value="<?php echo $sucursal->id; ?>" <?php echo ($sucursal->id == $empleado->id_sucursal) ? 'selected' : ''; ?>>
                        <?php echo $sucursal->nombre; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
        <label for="estado">Estado</label>
        <select class="form-control" id="estado" name="estado" required>
            <option value="">Seleccionar estado</option>
            <?php foreach ($estados as $estado) : ?>
                <option value="<?php echo $estado->estado; ?>" <?php echo ($estado->estado == $empleado->estado) ? 'selected' : ''; ?>>
                    <?php echo $estado->estado; ?>
                </option>
            <?php endforeach; ?>
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        

     <?php if($this->session->flashdata("success")): ?>
    Swal.fire({
        icon: 'success',
        title: 'Good...',
        text: '<?php echo $this->session->flashdata("success"); ?>',
    });
    <?php endif; ?>
   
    </script>




