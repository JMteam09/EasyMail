<?php
function email($to,$sub,$txt,$html){
$json = array();
$json["who"] = $to;
$json["sub"] = $sub;
$json["txt"] = $txt;
$json["html"] = $html;
$jso = json_encode($json);
$name = var_export(rand(0,99),true) . "_" . var_export(rand(0,99),true) . "_" . var_export(rand(0,99),true) . "_" . var_export(rand(0,99),true); 
file_put_contents(realpath(dirname(__FILE__)).'\\'.$name.".txt", $jso);
$handle = new COM('WScript.Shell');
$handle->Run('"'.realpath(dirname(__FILE__)).'\\EasyMail.exe" -fb "-path:'.realpath(dirname(__FILE__)).'\\'.$name.".txt", 0, false);
return '"'.realpath(dirname(__FILE__)).'\\EasyMail.exe" -fb "-path:'.realpath(dirname(__FILE__)).'\\'.$name.".txt";
}
?>