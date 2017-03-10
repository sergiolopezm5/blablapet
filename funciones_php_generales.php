<?php

function pMensajeEvento($codigo_mensaje) {
    
    if(isset($codigo_mensaje)) {
        
        $detalles =  sGetDatosNotificacion($codigo_mensaje);
        
        $tipo_not = $detalles['TIPO_NOTIFICACION'];
        $detalle = $detalles['DESCRIPCION'];   


        switch ($tipo_not) {
            case 'DANGER':
                $clase='danger';
            break;  
            case 'WARNING':
                $clase='warning';
            break;  
            case 'SUCCESS':
                $clase='success';
            break;   

        }

        $devolver = '<div class="alert alert-'.$clase.'">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>'.$codigo_mensaje.'</strong> '.$detalle.'.
                    </div>';

        return   $devolver;
    }else {
		return '';
	}
}

function pMostrarSidebar() {
    
    $devolver = '<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navegación
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano has-scrollbar">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li>
										<a href="dashboard.php">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Inicio</span>
										</a>
									</li>
                                    <li>
										<a href="user_profile.php">
											<i class="fa fa-user" aria-hidden="true"></i>
											<span>Perfil</span>
										</a>
									</li>
									<li>
										<a href="mailbox-inbox.php">
											<span class="pull-right label label-primary">182</span>
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>Mensajes</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</aside>';
    
    return $devolver;
}

function pMostrarInfoUsuario() {
    
    $devolver = '<div id="userbox" class="userbox">
                    <a href="#" data-toggle="dropdown">
                        <figure class="profile-picture">
                            <img src="images/users/'.$_SESSION['USER'].'.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
                        </figure>
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="'.$_SESSION['MAIL'].'">
                            <span class="name">'.$_SESSION['NAME'].'</span>
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="user_profile.php"><i class="fa fa-user"></i> Mi Perfil</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="logout.php"><i class="fa fa-power-off"></i> Cerrar Sesión</a>
                            </li>
                        </ul>
                    </div>
                </div>';
    
    return $devolver;
}

function pMostrarNotificacionesMensajes() {
    
    $devolver = '<li>
                    <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                        <i class="fa fa-envelope"></i>
                        <span class="badge">4</span>
                    </a>

                    <div class="dropdown-menu notification-menu">
                        <div class="notification-title">
                            <span class="pull-right label label-default">230</span>
                            Messages
                        </div>

                        <div class="content">
                            <ul>
                                <li>
                                    <a href="#" class="clearfix">
                                        <figure class="image">
                                            <img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle" />
                                        </figure>
                                        <span class="title">Joseph Doe</span>
                                        <span class="message">Lorem ipsum dolor sit.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <figure class="image">
                                            <img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
                                        </figure>
                                        <span class="title">Joseph Junior</span>
                                        <span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <figure class="image">
                                            <img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle" />
                                        </figure>
                                        <span class="title">Joe Junior</span>
                                        <span class="message">Lorem ipsum dolor sit.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <figure class="image">
                                            <img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
                                        </figure>
                                        <span class="title">Joseph Junior</span>
                                        <span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
                                    </a>
                                </li>
                            </ul>

                            <hr />

                            <div class="text-right">
                                <a href="#" class="view-more">View All</a>
                            </div>
                        </div>
                    </div>
                </li>';
    
    return $devolver;
    
}

function pMostrarNotificacionesAlerta() {
    
    $devolver = '<li>
                    <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        <span class="badge">3</span>
                    </a>

                    <div class="dropdown-menu notification-menu">
                        <div class="notification-title">
                            <span class="pull-right label label-default">3</span>
                            Alerts
                        </div>

                        <div class="content">
                            <ul>
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="image">
                                            <i class="fa fa-thumbs-down bg-danger"></i>
                                        </div>
                                        <span class="title">Server is Down!</span>
                                        <span class="message">Just now</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="image">
                                            <i class="fa fa-lock bg-warning"></i>
                                        </div>
                                        <span class="title">User Locked</span>
                                        <span class="message">15 minutes ago</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="image">
                                            <i class="fa fa-signal bg-success"></i>
                                        </div>
                                        <span class="title">Connection Restaured</span>
                                        <span class="message">10/10/2016</span>
                                    </a>
                                </li>
                            </ul>

                            <hr />

                            <div class="text-right">
                                <a href="#" class="view-more">View All</a>
                            </div>
                        </div>
                    </div>
                </li>';
    
    return $devolver;
    
}

?>