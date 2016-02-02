<?php
function email($to,$sub,$txt,$html, $async = true){
$json = array();
$json["who"] = $to;
$json["sub"] = $sub;
$json["txt"] = $txt;
$json["html"] = $html;
file_put_contents("C:\\easymail.txt",json_encode($json));
if ($async){
	return exec('"'.realpath(dirname(__FILE__)).'\\EasyMail.exe" -fb -path:C:\\easymail.txt');
} else {
	exec ('"'.realpath(dirname(__FILE__)).'\\EasyMail.exe" -fb -path:C:\\easymail.txt' . "> /dev/null 2>/dev/null &")
	return true;
}
}
?>