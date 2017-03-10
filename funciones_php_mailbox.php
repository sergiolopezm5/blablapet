<?php

function pMostrarListaMensajes($ID, $ID_EMISOR, $MENSAJE, $FECHA, $ESTADO) {
    
    $devolver = '';
    if($ESTADO == "1"){
        $devolver ='<li>';
    } else if($ESTADO == "2"){ 
        $devolver = '<li class="unread">';
    }
           $devolver .='
                        <a href="mailbox-msg.php?id='.$ID.'">
                            <!--<i class="mail-label" style="border-color: #EA4C89"></i>-->

                            <div class="col-sender">
                                <div class="checkbox-custom checkbox-text-primary ib">
                                    <input type="checkbox" id="mail2">
                                    <label for="mail2"></label>
                                </div>
                                <p class="m-none ib">'.sGetNombreUsuario($ID_EMISOR).'</p>
                            </div>
                            <div class="col-mail">
                                <p class="m-none mail-content">
                                    <span class="subject">'.$MENSAJE.'</span>
                                   
                                </p>
                                <!--<i class="mail-attachment fa fa-paperclip"></i>-->
                                <p class="m-none mail-date">'.$FECHA.'</p>
                            </div>
                        </a>
                    </li>';
        
    
    
    return $devolver;
}

function pMostrarMensaje(){

    $mensaje = sObtenerMensaje($_GET['id']);

    $contenido = '  <div class="mailbox-email-container">
                        <div class="mailbox-email-screen">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="fa fa-mail-reply"></a>
                                        <a href="#" class="fa fa-mail-reply-all"></a>
                                        <a href="#" class="fa fa-star-o"></a>
                                    </div>
                                <p class="panel-title">'. sGetNombreUsuario($mensaje["ID_EMISOR"]) .'<i class="fa fa-angle-right fa-fw"></i> You</p>
                            </div>
                            <div class="panel-body">'. $mensaje["MENSAJE"].'</div>
                            <div class="panel-footer">
                                <p class="m-none"><small>'.  $mensaje["FECHA"].' </small></p>
                            </div>
                        </div>
                        </div>';
                
        return $contenido;

}

function pFormEnviarMensaje(){

    $form = '<div class="compose" style="margin-left:20px; margin-right:20px;">
										<form class="form-horizontal form-bordered" method="get">
											<div class="form-group">
												<textarea class="form-control" rows="3"  data-plugin-textarea-autosize> </textarea>
												<button class="mb-xs mt-xs mr-xs btn btn-primary" type="submit">
													Enviar
												</button>
											</div>
										</form>
									</div>';

    return $form;
}

?>