<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 menu_lateral">

    <!-- Brand Logo -->
    <a href="inicio1.php" class="brand-link">
        <img src="vistas/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PANEL DE INICIO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="vistas/assets/dist/img/IUS.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2 ">

            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Catálogo de Inventario
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/inventario1.php')" class="nav-link" style="cursor: pointer;">
                            <i class="fa-solid fa-sheet-plastic nav-icon"></i>
                            <p>Inventario</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/mantenimiento1.php')" class="nav-link" style="cursor: pointer;">
                                <i class="fa-solid fa-calendar-check nav-icon"></i>
                                <p>Mantenimientos</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/estado1.php')" class="nav-link" style="cursor: pointer;">
                                <i class="fa-solid fa-calendar-check nav-icon"></i>
                                <p>Estado</p>
                            </a>
                        </li> -->
                    </ul>

                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-users"></i>
                        <p>
                            Catálogos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/usuario1.php')" class="nav-link" style="cursor: pointer;">
                                <i class="fa-solid fa-user nav-icon"></i>
                                <p>Tilulares</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/areas1.php')" class="nav-link" style="cursor: pointer;">
                                <i class="fa-solid fa-user-plus nav-icon"></i>
                                <p>Areas</p>
                            </a>
                        </li>
                    </ul>

                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Catálogo de Equipos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/equipo1.php')" class="nav-link" style="cursor: pointer;">
                                <i class="fa-solid fa-computer nav-icon"></i>
                                <p>Computadoras</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/monitor1.php')" class="nav-link" style="cursor: pointer;">
                                <i class="fa-solid fa-tv nav-icon"></i>
                                <p>Monitores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/teclado1.php')" class="nav-link" style="cursor: pointer;">
                                <i class="fa-solid fa-keyboard nav-icon"></i>
                                <p>Teclados</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/telefono1.php')" class="nav-link" style="cursor: pointer;">
                                <i class="fa-solid fa-phone nav-icon"></i>
                                <p>Telefonos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/mouse1.php')" class="nav-link" style="cursor: pointer;">
                                <i class="fa-solid fa-computer-mouse nav-icon"></i>
                                <p>Mouse</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/impresora1.php')" class="nav-link" style="cursor: pointer;">
                                <i class="fa-solid fa-print nav-icon"></i>
                                <p>Impresoras</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/marca1.php')" class="nav-link" style="cursor: pointer;">
                                <i class="fa-solid fa-copyright nav-icon"></i>
                                <p>Marcas</p>
                            </a>
                        </li>

                    </ul>

                </li>



            </ul>

            <ul class="nav nav-pills nav-sidebar nav_profile">
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Cerrar Sesion
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
</aside>