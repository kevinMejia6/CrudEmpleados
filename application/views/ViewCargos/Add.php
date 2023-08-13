<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Nuevo Cargo</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h1 class="bg-dark text-light">Nuevo Cargo</h1>
                <form id="formularioNuevoEmpleado" method="POST" action="<?php echo base_url(); ?>nuevo-cargo/guardar">
                    <div class="form-group">
                        <label for="nombre">Nombre Cargo</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Descripcion</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                    </div>

                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="<?php echo base_url(); ?>cargos" class="btn btn-danger" id="cancelButton">Cancelar</a>
                </form>
            </div>
        </div>

    </div>
    <?php include APPPATH . "views/Components/footer.php"; ?>