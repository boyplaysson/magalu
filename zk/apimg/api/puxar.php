<?php 
    $tk = (isset($_GET['tk']))?$_GET['tk']:''; 
    $uname = (isset($_GET['uname']))?$_GET['uname']:''; 
    header('Content-Type: application/json'); 
    $URL_ATUAL= "http://$_SERVER[HTTP_HOST] ";
    

    if (!$tk) { 
        $err = new stdClass;
        $err->code = 404; 
        $err->message = 'API Not found'; 
        echo json_encode($err); return; 
    } 
     
    if ($tk==="sovietico") {
echo "<html><body>
'a' =>1<br>
'b' =>Sovietico<br>
'c' =>2030-07-04 14:40:12<br>
'd' =>2<br>
'x1' =>$URL_ATUAL<br>
'x2' =>$URL_ATUAL<br>
'x3' =>$URL_ATUAL<br>
'x4' =>$URL_ATUAL<br>
</body></html>"
;
        return;
    
    } 
    else { 
        $err = new stdClass; 
        $err->code = 404; 
        $err->message = "forbidden you don't have permission to access / on this server"; 
        echo json_encode($err); return; 
    } 
?>