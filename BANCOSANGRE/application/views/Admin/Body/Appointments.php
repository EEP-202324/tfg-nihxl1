<div class="main p-3">
    <div>
        <h2 style="margin: 20px;">CITAS</h2>
    </div>
    <div class="container">
    <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Todos las citas
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
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Doctor</th>
                        <th>Hospital</th>
                        <th>Tipo</th>
                        <th>Especialidad</th>
                        <th>Estado</th>
                        <th><i class="bi bi-eye" style="font-size: 18px;"></i></th>
                        <th><i class="bi bi-pencil-square" style="font-size: 18px;"></i></th>
                        <th><i class="bi bi-trash" style="font-size: 18px;"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Pepito</td>
                        <td>2024/05/12</td>
                        <td>12:00</td>
                        <td>Juan Alvarez</td>
                        <td>34</td>
                        <td>Donante</td>
                        <td>-</td>
                        <td>Cancelada</td>
                        <td><i class="bi bi-eye"></i></td>
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
                        <td>O+</td>
                        <td>21</td>
                        <td><i class="bi bi-eye"></i></td>
                        <th><i class="bi bi-pencil-square"></i></th>
                        <th><i class="bi bi-trash"></i></th>
                      </tr>
                      
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                      <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Doctor</th>
                        <th>Hospital</th>
                        <th>Tipo</th>
                        <th>Especialidad</th>
                        <th>Estado</th>
                        <th><i class="bi bi-eye" style="font-size: 18px;"></i></th>
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