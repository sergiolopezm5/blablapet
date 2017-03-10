<?php

function pMostrarCuidadores() {
    $devolver = '';
	
	$row = sGetCuidadores();

	while($datos=$row->fetch(PDO::FETCH_ASSOC)){//sacar array en PDO

        $foto = 'images/users/'.$datos["ID_USUARIO"].'.jpg';
        $devolver .='<div class="col-lg-3 col-sm-6">
                        <div class="plan">
                            <h3 style="background-image: url('.$foto.'); height:100px; margin-bottom:0px;"></h3>
                            <h4>'.$datos['NOMBRE'].'</h4>
                            <a class="btn btn-lg btn-primary modal-basic" href="#modalEnviarMensaje">Contactar</a>
                            <ul>
                                <li><b>Provincia: </b>'.$datos['PROVINCIA'].'</li>
                                <li><b>Ciudad: </b>'.$datos['CIUDAD'].'</li>
                            </ul>
                        </div>
                    </div>';	
	}	
    
    return $devolver;
}

function pMostrarModalContactar() {
    $devolver = '<div id="modalEnviarMensaje" class="modal-block modal-block-primary mfp-hide">
                    <section class="panel">
                        <header class="panel-heading">
                            <h2 class="panel-title">Inicia Sesión</h2>
                        </header>
                        <div class="panel-body">
                            <form id="login-form" method="post" action="'.$_SERVER['PHP_SELF'].'" class="form-horizontal mb-lg" novalidate="novalidate">
                                <div class="form-group mb-lg col-md-12">
                                    <label>E-mail</label>
                                    <input name="email-login" type="email" class="form-control input-lg" />
                                </div>
                                <div class="form-group mb-lg col-md-12">
                                    <label>Contraseña</label>
                                    <input name="pass-login" type="password" class="form-control input-lg" />
                                </div>
                                <div class="col-md-12 text-right">
                                    <button name="submit-login" type="submit" class="btn btn-primary">Entrar</button>
                                    <button type="reset" class="btn btn-default modal-dismiss">Cancelar</button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>';
    return $devolver;
}

?>