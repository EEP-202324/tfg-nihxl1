<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .profile-img {
      max-width: 100%;
      height: auto;
    }
  </style>
</head>
<body>

<div class="main p-3">
  <div>
    <h2 style="margin: 0px;">PERFIL</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card h-100">
          <div class="card-body text-center">
            <img src="https://fakeimg.pl/350x300" alt="Foto perfil" class="profile-img mb-3">
            <button type="button" class="btn btn-primary">Cambiar Foto</button>
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
                  <td id="name"><?php echo $userData['name']; ?></td>
                </tr>
                <tr>
                  <th scope="row">Apellido</th>
                  <td id="lastname"><?php echo $userData['lastname']; ?></td>
                </tr>
                <tr>
                  <th scope="row">Fecha de nacimiento</th>
                  <td id="birthday"><?php echo $userData['birthday']; ?></td>
                </tr>
                <tr>
                  <th scope="row">Dirección</th>
                  <td id="address"><?php echo $userData['address']; ?></td>
                </tr>
                <tr>
                  <th scope="row">Teléfono</th>
                  <td id="phone"><?php echo $userData['phone']; ?></td>
                </tr>
                <tr>
                  <th scope="row">Correo electrónico</th>
                  <td id="email"><?php echo $userData['email']; ?></td>
                </tr>
                <tr>
                  <th scope="row">Edad</th>
                  <td id="age"><?php echo $userData['age']; ?></td>
                </tr>
                <tr>
                  <th scope="row">Género</th>
                  <td id="gender"><?php echo $userData['gender']; ?></td>
                </tr>
              </tbody>
            </table>
            <div class="text-end">
              <button type="button" class="btn btn-danger me-2">Eliminar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
  $(".edit-btn").click(function() {
    var field = $(this).closest('tr').find('td').not(':last-child');
    field.prop('contenteditable', function(i, editable) {
      return !editable;
    });
    field.focus();
  });
});
</script>

</body>
</html>
