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
                            <img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
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

?>