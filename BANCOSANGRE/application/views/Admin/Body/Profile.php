<div class="main p-3">
    <div>
        <h2 style="margin: 20px;">PERFIL</h2>
    </div>
    <div class="container">
        <div class="row">
    <div class="col-md-4">
      <div class="card h-100">
        <div class="card-body text-center">
          <img src="https://fakeimg.pl/350x300" alt="Foto perfil" class="profile-img mb-3">
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card h-100">
        <div class="card-body">
          <h3 class="card-title">Información</h3>
          <table class="table">
            <tbody>
              <tr>
                <th scope="row">Nombre</th>
                <td>peptp</td>
              </tr>
              <tr>
                <th scope="row">Apellido</th>
                <td>jpepe@gmail.com</td>
              </tr>
              <tr>
                <th scope="row">Fecha nacimiento</th>
                <td>peptp</td>
              </tr>
              <tr>
                <th scope="row">Direccion</th>
                <td>jpepe@gmail.com</td>
              </tr>
              <tr>
                <th scope="row">Telefono</th>
                <td>peptp</td>
              </tr>
              <tr>
                <th scope="row">Email</th>
                <td>jpepe@gmail.com</td>
              </tr>
            </tbody>
          </table>
          <div class="text-end">
            <button type="button" class="btn btn-primary me-2">Edit</button>
            <button type="button" class="btn btn-danger">Remove</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
<?php if (isset($userData)) : ?>
    <div class="card h-100">
        <div class="card-body">
            <h3 class="card-title">Información</h3>
            <table class="table">
                <tbody>
                    <?php foreach ($userData as $key => $value) : ?>
                        <tr>
                            <th scope="row"><?php echo ucfirst(str_replace('_', ' ', $key)); ?></th>
                            <td><?php echo $value; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="text-end">
                <button type="button" class="btn btn-primary me-2">Edit</button>
                <button type="button" class="btn btn-danger">Remove</button>
            </div>
        </div>
    </div>
<?php endif; ?>

