<?php

function pMostrarListaMensajes($ID_EMISOR, $MENSAJE, $FECHA, $ESTADO) {
    
    $devolver = '';
    if($ESTADO == "1"){
        $devolver ='<li>';
    } else if($ESTADO == "2"){ 
        $devolver = '<li class="unread">';
    }
           $devolver .='
                        <a href="mailbox-email.html">
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


?>