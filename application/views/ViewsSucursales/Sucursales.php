
    <?php
    include(APPPATH . 'views/Components/header.php'); // Ruta a la vista parcial
    $currentUrl = $_SERVER['REQUEST_URI'];

    ?>
    <h1>Lista Sucursales</h1>
        <div class="card">
            <div class="card-body">
                <table class="table table-light">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Teléfono</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sucursal 1</td>
                            <td>22234322</td>
                            <td>San Salvador</td>
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
    include(APPPATH . 'views/Components/footer.php'); // Ruta a la vista parcial
    ?>