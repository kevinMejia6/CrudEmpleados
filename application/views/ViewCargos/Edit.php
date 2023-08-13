<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Editar Cargo</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h1 class="mt-5 bg-dark text-light">Editar registro: <?php echo $cargo->nombre; ?></h1>
                <form id="formularioEditCargo" method="POST" action="<?php echo base_url('nuevo-cargo/guardar'); ?>">
                    <div class="form-group">
                        <input type="hidden" id="id_cargo" name="id_cargo" value="<?php echo $cargo->id; ?>">

                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required
                            value="<?php echo $cargo->nombre; ?>">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" required
                            value="<?php echo $cargo->descripcion; ?>">
                    </div>

                    <button type="submit" class="btn btn-success" id="guardarButton">Guardar</button>
                    <a href="<?php echo base_url(); ?>cargos" class="btn btn-danger" id="cancelButton">Cancelar</a>
                </form>
            </div>
        </div>

    </div>

    <?php include APPPATH . "views/Components/footer.php"; ?>
    <script>
    $(document).ready(function() {
        $("#formularioEditCargo").submit(function(event) {
            let isValid = true;

            $("input").each(function() {
                if ($(this).prop("required") && $.trim($(this).val()) === "") {
                    isValid = false;
                    return false; // Exit the loop early
                }
            });

            if (!isValid) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Por favor complete todos los campos!',
                });
                event.preventDefault(); // Prevent form submission
            } else {
                // Form is valid, submit the form
                $(this).unbind('submit').submit();
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: 'Todos los campos están llenos.',
                }).then(function(result) {
                    if (result.isConfirmed) {
                        // Redirige a la página de cargos
                        window.location.href = "<?php echo base_url(); ?>cargos";
                    }
                });

            }
        });
    });
    </script>