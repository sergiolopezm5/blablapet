<?php

function pgMensajeEvento($codigo_mensaje) {
    
    if(isset($codigo_mensaje)) {
        
        $detalles =  sgGetDatosNotificacion($codigo_mensaje);
        
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
    }
}

function pMostrarSidebar() {
    
    $devolver = '<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
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
										<a href="index.html">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
                                    <li>
										<a href="index.html">
											<i class="fa fa-user" aria-hidden="true"></i>
											<span>Perfil</span>
										</a>
									</li>
									<li>
										<a href="mailbox-folder.html">
											<span class="pull-right label label-primary">182</span>
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>Mailbox</span>
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
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                            <span class="name">John Doe Junior</span>
                            <span class="role">administrator</span>
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