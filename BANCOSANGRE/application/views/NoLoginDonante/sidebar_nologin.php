<div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="<?php echo base_url('Admin/DashboardController'); ?>">DASHBOARD</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="<?php echo base_url('Admin/ProfileController'); ?>" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Perfil</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="bi bi-file-earmark-person"></i>
                        <span>Patients</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/Patients'); ?>" class="sidebar-link">Ver todos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/Patients/addPatient'); ?>" class="sidebar-link">Añadir</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#donor" aria-expanded="false" aria-controls="auth">
                        <i class="bi bi-file-earmark-person-fill"></i>
                        <span>Donante</span>
                    </a>
                    <ul id="donor" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/Donors'); ?>" class="sidebar-link">Ver todos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/Donors/addDonor'); ?>" class="sidebar-link">Añadir</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#cita" aria-expanded="false" aria-controls="auth">
                        <i class="bi bi-calendar-plus"></i>
                        <span>Citas</span>
                    </a>
                    <ul id="cita" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/Appointments'); ?>" class="sidebar-link">Ver Todas</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/Appointments/addAppointment'); ?>" class="sidebar-link">Agendar cita</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Gestion Sangre</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Solicitudes</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Setting</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="<?php echo base_url('LoginController/logout'); ?>" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>



<script>const hamBurger = document.querySelector(".toggle-btn");
    hamBurger.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("expand");
});</script>

       




