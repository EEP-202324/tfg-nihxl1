
<div class="main p-3">
    <div class="container">
        <div>
            <h2 style="margin: 20px;">PACIENTE</h2>
        </div>
        <div class="container">
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <span><i class="bi bi-card-list style="border: 5px; font-size: 20px;" ></i></span> Añadir paciente
                    </div>
                    <div class="card-body">
                        <form id="formRegistro" action="#" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nombreInput" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="nombreInput" name="nombre">
                                    </div>
                                    <div class="mb-3">
                                        <label for="apellidoInput" class="form-label">Apellido</label>
                                        <input type="text" class="form-control" id="apellidoInput" name="apellido">
                                    </div>
                                    <div class="mb-3">
                                        <label for="direccionInput" class="form-label">Direccion</label>
                                        <input type="text" class="form-control" id="direccionInput" name="direccion">
                                    </div>
                                    <div class="mb-3">
                                        <label for="fechaNacimientoInput" class="form-label">Fecha nacimiento</label>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker2'>
                                                <input type='text' class="form-control" id="fechaNacimientoInput" name="fecha_nacimiento" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="telefonoInput" class="form-label">Telefono</label>
                                        <input type="text" class="form-control" id="telefonoInput" name="telefono">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailInput" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="emailInput" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="hospitalInput" class="form-label">Hospital</label>
                                        <select class="form-select" id="hospitalInput" name="hospital">
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="doctorInput" class="form-label">Doctor</label>
                                        <select class="form-select" id="doctorInput" name="doctor">
                                            
                                        </select>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="passwordInput" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="passwordInput" name="password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="sexoInput" class="form-label">Sexo</label>
                                        <select class="form-select" id="sexoInput" name="sexo">
                                            <option value="Hombre">Hombre</option>
                                            <option value="Mujer">Mujer</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tipoSangreInput" class="form-label">Tipo Sangre</label>
                                        <select class="form-select" id="tipoSangreInput" name="tipo_sangre">
                                            <option value="#"></option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="enfermedadInput" class="form-label">Enfermedad</label>
                                        <input type="text" class="form-control" id="enfermedadInput" name="enfermedad">
                                    </div>
                                    <div class="mb-3">
                                        <label for="alergiasInput" class="form-label">Alergias</label>
                                        <input type="text" class="form-control" id="alergiasInput" name="alergias">
                                    </div>
                                    <div class="mb-3">
                                        <label for="fechaIngresoInput" class="form-label">Fecha Ingreso</label>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker2'>
                                                <input type='text' class="form-control" id="fechaIngresoInput" name="fecha_ingreso" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary btn-custom" id="btnRegistro" style="margin-left: auto; margin-right: auto; display: block;"><i class="bi bi-person-fill-add"></i>    AÑADIR    </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .btn-custom {
        background-color: #71091E;
        border-color: #71091E;
        padding: 10px 50px; 
        font-size: 16px; 
    }
</style>




<script>


// <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
// <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet"/>

// <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script> <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

 <script type="text/javascript">
//     $(function () {
//         $('#datetimepicker2').datetimepicker({ format: 'YYYY-MM-DD' });
//     });
// </script>

