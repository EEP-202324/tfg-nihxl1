<div class="main p-3">

    <div class="container">
<title>Inicio Donante</title>
<header class="bg text-white text-center p-4">
    <button type="button" class="btn btn-primary border border-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" width="75" height="75"  style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; ">
        <i class="bi bi-person-circle"></i>     
    </button>
</header>

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


<style>
        header {
            color: white;
            padding: 0rem;
        }
</style>    