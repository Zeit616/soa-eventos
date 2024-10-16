<aside class="main-sidebar sidebar-dark-primary elevation-4 correccionSidebar">
    <!-- Brand Logo -->
        <a href="vistaGenerica.php" class="brand-link">
            <img src="../../img/LogoSCM.png" alt="Leche Gloria Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Administrador</span>
        </a>
    <!-- Fin Brand Logo -->

    <!-- Sidebar -->
        <div class="sidebar">        
            <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">                    
                        
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-gears"></i>
                                <p>
                                    Opciones avanzadas
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link" onclick="CargarPlantilla('Usuarios.php', 'content-wrapper')">
                                        <i class="fa-regular fa-circle"></i>
                                        <p>Usuarios</p>
                                    </a>
                                </li>
                            </ul>
                        </li>                        
                        <li class="nav-item">
                            <a href="../../model/cerrarSesion.php" class="nav-link bg-danger">
                                <i class="fa-solid fa-person-through-window"></i>
                                <p>
                                    Cerrar sesión
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            <!-- Fin Sidebar Menu -->
        </div>
    <!-- Fin sidebar -->
  </aside>