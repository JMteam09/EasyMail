<?php
function email($to,$sub,$txt,$html){
$json = array();
$json["who"] = $to;
$json["sub"] = $sub;
$json["txt"] = $txt;
$json["html"] = $html;
file_put_contents("C:\\easymail.txt",json_encode($json));
$em_script = 'start "EM" "'.realpath(dirname(__FILE__)).'\\EasyMail.exe" -fb -path:C:\\easymail.txt';
file_put_contents(dirname(__FILE__)+"/script.bat",json_encode($json));
exec(dirname(__FILE__)+"/script.bat");
return "operation started";
}
?>