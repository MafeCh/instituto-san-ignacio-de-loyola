    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../iamges/avatar.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Administrador</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-users" aria-hidden="true"></i>
                <span class="app-menu__label">Usuarios</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="gestionp.php"><i class="icon fa fa-circle-o"></i>Profesores</a></li>
            <li><a class="treeview-item" href="gestionestu.php"><i class="icon fa fa-circle-o"></i>Estudiantes</a></li>
          </ul>
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Gestionar</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="observador.php"><i class="icon fa fa-circle-o"></i>Observador</a></li>
            <li><a class="treeview-item" href="calificaciones.php"><i class="icon fa fa-circle-o"></i>Calificaciones</a></li>
            <li><a class="treeview-item" href="inasistencia.php"><i class="icon fa fa-circle-o"></i>Inasistencia</a></li>
          </ul> 
        <ul class="app-menu">
        <li><a class="app-menu__item" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Contactos</span></a></li>
        <li>
            <a class="app-menu__item" href="../index.html">
            <i class="app-menu__icon fa fa-sign-out" aria-hidden="true"></i>
            <span class="app-menu__label">Salir</span></a></li>
    </aside>