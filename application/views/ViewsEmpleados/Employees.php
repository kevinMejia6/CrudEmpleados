
    <?php
    include(APPPATH . 'views/Components/header.php'); // Ruta a la vista parcial
    ?>
    <div class="container">
       
        <h1>Lista Empleados</h1>
        <div class="card">
            <div class="card-body">
                <table class="table table-light">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Teléfono</th>
                            <th>Sucursal</th>
                            <th>Cargo</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>KEVIN</td>
                            <td>Mejia</td>
                            <td>7809898</td>
                            <td>San Salvador</td>
                            <td>Programador Junior</td>
                            <td>Activo</td>
                            <td><a type="button" class="btn btn-warning">Eliminar</a> <a type="button"
                                    class="btn btn-danger">Editar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
    include(APPPATH . 'views/Components/footer.php');
    ?>
