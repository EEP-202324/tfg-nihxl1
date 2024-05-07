<div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="<?php echo base_url('Welcome/index');?>">INICIO</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item ">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="bi bi-droplet-half"></i>
                        <span>Porqué donar sangre</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('NoLogin/Info/WhyGiveBlood');?>" class="sidebar-link">Porque donar</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('NoLogin/Info/BloodUsage');?>" class="sidebar-link">Empleo de la sangre</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo base_url('NoLogin/Info/BloodTypes');?>" class="sidebar-link">
                    <i class="bi bi-droplet-half"></i>
                        <span>Tipos de sangre</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#donor" aria-expanded="false" aria-controls="auth">
                        <i class="bi bi-droplet-half"></i>
                        <span>Quien puede donar sangre</span>
                    </a>
                    <ul id="donor" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('NoLogin/Info/BloodDonation');?>" class="sidebar-link">¿Puedo donar?</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('NoLogin/Info/BloodTypes');?>" class="sidebar-link">Salud y aptitud</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('NoLogin/Info/BloodTypes');?>" class="sidebar-link">Consideraciones</a>
                        </li>
                        
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#cita" aria-expanded="false" aria-controls="auth">
                        <i class="bi bi-droplet-half"></i>
                        <span>Citas</span>
                    </a>
                    <ul id="cita" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/Appointments');?>" class="sidebar-link">Ver Todas</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/Appointments/addAppointment');?>" class="sidebar-link">Agendar cita</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#blood" aria-expanded="false" aria-controls="auth">
                        <i class="bi bi-droplet-half"></i>
                        <span>Gestión sangre</span>
                    </a>
                    <ul id="blood" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/BloodManagement');?>" class="sidebar-link">Estadísticas</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/BloodManagement/Donations');?>" class="sidebar-link">Donaciones</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/BloodManagement/Transfusions');?>" class="sidebar-link">Transfusiones</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo base_url('Admin/Requests');?>" class="sidebar-link">
                    <i class="bi bi-droplet-half"></i>
                        <span>Solicitudes</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#news" aria-expanded="false" aria-controls="auth">
                        <i class="bi bi-droplet-half"></i>
                        <span>Noticias</span>
                    </a>
                    </a>
                    <ul id="news" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/News');?>" class="sidebar-link">Ver noticias</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/News/addNew');?>" class="sidebar-link">Añadir noticia</a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </aside>

<script>
const hamBurger = document.querySelector(".toggle-btn");
    hamBurger.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("expand");
});
</script>
