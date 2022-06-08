<?php 
    $tk = (isset($_GET['tk']))?$_GET['tk']:''; 
    $uname = (isset($_GET['uname']))?$_GET['uname']:''; 
    header('Content-Type: application/json'); 
    $URL_ATUAL= "$_SERVER[HTTP_HOST]";
    

    if (!$tk) { 
        $err = new stdClass;
        $err->code = 404; 
        $err->message = 'API Not found'; 
        echo json_encode($err); return; 
    } 
     
    if ($tk==="qwerYm6sl0x8TzKwfttYC29j.") {
echo "'l' = qwerYm6sl0x8TzKwfttYC29j.";
        return;
    } 
    else { 
        $err = new stdClass; 
        $err->code = 404; 
        $err->message = "forbidden you don't have permission to access / on this server"; 
        echo json_encode($err); return; 
    } 
?>