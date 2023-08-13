
    <?php
    include(APPPATH . 'views/Components/header.php'); // Ruta a la vista parcial
    ?>
    <h1>Lista Cargos</h1>
        <div class="card">
            <div class="card-body">
                <table class="table table-light">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <td>Programador Junior</td>
                            <td>Sistemas</td>
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