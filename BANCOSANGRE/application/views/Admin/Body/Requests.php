<div class="main p-3">
    <div>
        <h2 style="margin: 20px;">SOLICITUDES</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <span><i class="bi bi-table me-2"></i></span> Todas las citas
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped data-table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Fecha de solicitud</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($requests as $request) { ?>
                                        <tr>
                                            <td><?php echo $request['name']; ?></td>
                                            <td><?php echo $request['request_date']; ?></td>
                                            <td><?php echo $request['status']; ?></td>
                                            
                                            <td><button class="btn btn-success" onclick="acceptRequest(<?php echo $request['request_id']; ?>)">Aceptar</button></td>
                                            <td><button class="btn btn-danger" onclick="denyRequest(<?php echo $request['request_id']; ?>)">Denegar</button></td>

                                            <td><button class="btn btn-warning" onclick="putOnHold(<?php echo $request['request_id']; ?>)">En Espera</button></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Fecha de solicitud</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  
  function acceptRequest(requestId) {
    $.ajax({
        url: '<?php echo base_url('Admin/Requests/accept_request/'); ?>' + requestId,
        type: 'GET',
        success: function(response) {              
            var result = JSON.parse(response);
            if (result.success) {
                alert(result.message);
                location.reload();
            } else {
                alert(result.message);
            }
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
}

function denyRequest(requestId) {
    $.ajax({
        url: '<?php echo base_url('Admin/Requests/deny_request/'); ?>' + requestId,
        type: 'GET',
        success: function(response) {              
            var result = JSON.parse(response);
            if (result.success) {
                alert(result.message);
                location.reload();
            } else {
                alert(result.message);
            }
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
}

function putOnHold(requestId) {
    $.ajax({
        url: '<?php echo base_url('Admin/Requests/put_on_hold/'); ?>' + requestId,
        type: 'GET',
        success: function(response) {              
            var result = JSON.parse(response);
            if (result.success) {
                alert(result.message);
                location.reload();
            } else {
                alert(result.message);
            }
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
}






</script>
