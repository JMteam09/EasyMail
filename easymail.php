<?php
function email($to,$sub,$txt,$html){
$json = array();
$json["who"] = $to;
$json["sub"] = $sub;
$json["txt"] = $txt;
$json["html"] = $html;
file_put_contents("C:\\easymail.txt",json_encode($json));
exec('start "'.realpath(dirname(__FILE__)).'\\EasyMail.exe" -fb -path:C:\\easymail.txt');
return "operation started";
}
?>