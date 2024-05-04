
<div class="main p-3">
<div class="container">
<title>Inicio Donante</title>

<style>
        header {
            color: white;
            padding: 0rem;
        }
</style>    

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url('logincontroller/login'); ?>">
                    <h1 class="h3 mb-3 fw-normal">LOG IN</h1>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="modalFloatingInput" name="email"
                            placeholder="name@example.com" value="">
                  
                        <label for="modalFloatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="modalFloatingPassword" name="password"
                            placeholder="Password">
                        <label for="modalFloatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div> 


<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form method="post" action="<?php echo base_url('RegistroController/guardar_registro'); ?>">
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nameInput" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="lastnameInput" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="lastnameInput" name="apellido">
                    </div>
                    <div class="mb-3">
                        <label for="addressInput" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="addressInput" name="direccion">
                    </div>
                    <div class="mb-3">
                        <label for="birthdayInput" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="birthdayInput" name="fecha_nacimiento">
                    </div>
                    <div class="mb-3">
                        <label for="phoneInput" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="phoneInput" name="telefono">
                    </div>
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailInput" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="passwordInput" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="passwordInput" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="genderInput" class="form-label">Género</label>
                        <select class="form-select" id="genderInput" name="genero">
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="ageInput" class="form-label">Edad</label>
                        <input type="age" class="form-control" id="ageInput" name="age">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
</div>




<div class="container ">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
            <?php foreach ($news as $item) { ?>
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <?php if (!empty($item['multimedia'])) { ?>
                                    <div class="col-md-8">
                                        <h5 class="card-title"><?php echo $item['name']; ?></h5>
                                        <p class="card-text"><?php echo $item['description']; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="<?php echo $item['multimedia']; ?>" alt="Image" class="news-image">
                                    </div>
                                <?php } else { ?>
                                    <div class="col-md-12">
                                        <h5 class="card-title"><?php echo $item['name']; ?></h5>
                                        <p class="card-text"><?php echo $item['description']; ?></p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">¿Quieres Donar Sangre?</h5>
                    <ul class="list-group">
                        <li class="list-group-item">REGISTRATE AQUI!</li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">URGENTE SANGRE TIPO O-</h5>
                    <ul class="list-group">
                        <li class="list-group-item">AYUDA AQUÍ!</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row separation">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">¿Quieres Donar Sangre?</h5>
                    <ul class="list-group">
                        <li class="list-group-item">REGISTRATE AQUI!</li>
                    </ul>
                   
                    <img class="card-img-top max-height-4px news-image" src="FOTITUUUUUUU" alt="Imagen de la noticia">
                </div>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({ format: 'YYYY-MM-DD' });
    
    });
</script>