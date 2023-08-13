
    <?php
    include(APPPATH . 'views/Components/header.php'); // Ruta a la vista parcial
    ?>
   <h1 class="mt-4 mb-3">Listado de Cargos</h1>
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <button type="button" class="btn btn-success">Nuevo Cargo</button>
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
                <tr>
                  <td>1</td>
                  <td>Programador Junior</td>
                  <td>Sistemas</td>
                  <td>
                    <a type="button" class="btn btn-warning">Eliminar</a>
                    <a type="button" class="btn btn-danger">Editar</a>
                  </td>
                </tr>
                <!-- Agrega más filas según tus cargos -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <?php
    include(APPPATH . 'views/Components/footer.php'); // Ruta a la vista parcial
    ?>