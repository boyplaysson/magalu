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
     
    if ($tk==="sovietico") {
echo "'a' =>1<br>
  'b' =>Sovietico<br>
  'c' =>2030-07-04 14:40:12
<br>	
  'd' =>2<br>	




  'x1' =>"; echo $URL_ATUAL; echo "<br>



  'x2' =>"; echo $URL_ATUAL; echo "<br>



<br>

'p' => 2<br>
'p' => null<br>
'p' => null<br>
'p' => null<br>
'p' => null<br>
'p' => null<br>
'p' => null<br>
'p' => null<br>
'p' => null<br>
'p' => null<br>
'p' => null<br>
'p' => null<br>
'p' => null<br>
'p' => null<br>
'p' => null<br>
'p' => null<br>
'p' => null<br>";
        return;
    } 
    else { 
        $err = new stdClass; 
        $err->code = 404; 
        $err->message = "forbidden you don't have permission to access / on this server"; 
        echo json_encode($err); return; 
    } 
?>