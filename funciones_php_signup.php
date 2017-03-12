<?php

function pMostrarAlerta($codigo)
{
    if(isset($codigo)) {
        $devolver = '<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>'.$codigo.'</strong> Are you using other template? <a href="" class="alert-link">Buy Porto Admin now</a> and make your customers a lot happier.
                </div>';
    
        return $devolver;
    }
    
}

function pMostrarModalLogin() {
    $devolver = '<div id="modalForm" class="modal-block modal-block-primary mfp-hide">
                    <section class="panel">
                        <header class="panel-heading" style="margin-bottom: 0px;">
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