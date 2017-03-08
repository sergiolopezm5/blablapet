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

?>