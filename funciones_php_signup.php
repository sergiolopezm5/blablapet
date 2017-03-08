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
                        <header class="panel-heading">
                            <h2 class="panel-title">Inicia Sesión</h2>
                        </header>
                        <div class="panel-body">
                            <form id="login-form" class="form-horizontal mb-lg" novalidate="novalidate">
                                <div class="form-group mb-lg col-md-12">
                                    <label>E-mail</label>
                                    <input name="email-login" type="email" class="form-control input-lg" />
                                </div>
                                <div class="form-group mb-lg col-md-12">
                                    <label>Contraseña</label>
                                    <input name="pass-login" type="password" class="form-control input-lg" />
                                </div>
                            </form>
                        </div>
                        <footer class="panel-footer">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button type="submit" form="login-form" class="btn btn-primary modal-confirm">Entrar</button>
                                    <button type="reset" form="login-form" class="btn btn-default modal-dismiss">Cancelar</button>
                                </div>
                            </div>
                        </footer>
                    </section>
                </div>';
    return $devolver;
}

?>