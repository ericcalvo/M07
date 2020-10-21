<?php
function validacioEmail($comprovacioEmail){
    if(!filter_var($comprovacioEmail, FILTER_VALIDATE_EMAIL)){
        return FALSE;
    }else {
        return TRUE;
    }
}

function validacioContra($comprovacioContra){
    if(!preg_match("/^[a-zA-Z0-9]+$/", $comprovacioContra)){
        return FALSE;
    }else{
        return TRUE;
    }
}
?>