<?php

function pMostrarListaMensajes($ID, $ID_EMISOR, $MENSAJE, $FECHA, $ESTADO) {
    
    $devolver = '';
    if($ESTADO == "0"){
        $devolver ='<li>';
    } else if($ESTADO == "1"){ 
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

function pMensajesNuevos(){
    $mensajesnuevos = sNumMensajesNuevos();

    if($mensajesnuevos > 0){
        return '<span class="label label-primary text-weight-normal pull-right">'. $mensajesnuevos .'</span>';
    }
    else {
        return '';
    }
    
}

function pMostrarMensaje(){

    $mensaje = sObtenerMensaje($_GET['id']);
    sMensajeLeido($_GET['id']);
    $useractual = getUserId();

    if($useractual == $mensaje["ID_EMISOR"]){
        $header = '<p class="panel-title"> Tú <i class="fa fa-angle-right fa-fw"></i> '.sGetNombreUsuario($mensaje["ID_RECEPTOR"]).'</p>';                
    } else if($useractual == $mensaje["ID_RECEPTOR"]){
        $header = '<p class="panel-title">'. sGetNombreUsuario($mensaje["ID_EMISOR"]) .'<i class="fa fa-angle-right fa-fw"></i> Tú </p>';              
    }

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
                                    '.$header.'
                               </div>
                            <div class="panel-body">'. $mensaje["MENSAJE"].'</div>
                            <div class="panel-footer">
                                <p class="m-none"><small>'.  $mensaje["FECHA"].' </small></p>
                            </div>
                        </div>
                        </div>';
      
       

        return $contenido . pFormEnviarMensaje($mensaje["ID_EMISOR"]);

}

function pFormEnviarMensaje($destino){

    $form = '<div class="compose" style="margin-left:20px; margin-right:20px;">
										<form class="form-horizontal form-bordered" method = "post" action="nuevomensaje.php">
											<div class="form-group">
												<textarea class="form-control" rows="3" name="contenido"  data-plugin-textarea-autosize> </textarea>
											    <input type="hidden" name="idemisor" value="'.$_GET['id'].'">
                                                 <input type="hidden" name="idreceptor" value="'.$destino.'">
                                                <button class="mb-xs mt-xs mr-xs btn btn-primary" type="submit">
													Enviar
												</button>
											</div>
										</form>
									</div>';

    return $form;
}

?>