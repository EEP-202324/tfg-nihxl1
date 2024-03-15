<div class="main p-3">
    <div>
        <h2 style="margin: 20px;">DONANTES</h2>
    </div>
    <div class="container">
    <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Todos los donantes
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%"
                  >
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Tipo Sangre</th>
                        <th>Donaciones</th>
                        <th><i class="bi bi-person-bounding-box" style="border: 5px; font-size: 18px;"></i></th>
                        <th><i class="bi bi-pencil-square" style="font-size: 18px;"></i></th>
                        <th><i class="bi bi-trash" style="font-size: 18px;"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Pepito</td>
                        <td>Perez</td>
                        <td>612354789</td>
                        <td>pepito@gmail.com</td>
                        <td>O-</td>
                        <td>5</td>
                        <td><i class="bi bi-person-bounding-box"></i></td>
                        <td><i class="bi bi-pencil-square"></i></td>
                        <td><i class="bi bi-trash"></i></td>
                      </tr>
                      <tr>
                        <td>Jorge</td>
                        <td>Alvarez</td>
                        <td>612389789</td>
                        <td>alvarez@gmail.com</td>
                        <td>O+</td>
                        <td>21</td>
                        <th><i class="bi bi-person-bounding-box"></i></th>
                        <th><i class="bi bi-pencil-square"></i></th>
                        <th><i class="bi bi-trash"></i></th>
                      </tr>
                      
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                      <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Tipo Sangre</th>
                        <th>Donaciones</th>
                        <th><i class="bi bi-person-bounding-box" style="border: 5px; font-size: 18px;"></i></th>
                        <th><i class="bi bi-pencil-square" style="font-size: 18px;"></i></th>
                        <th><i class="bi bi-trash" style="font-size: 18px;"></i></th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>


    
<script>
$(document).ready(function () {
  $(".data-table").each(function (_, table) {
    $(table).DataTable();
  });
});</script> 


</div>