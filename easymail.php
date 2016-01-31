<?php
function email($to,$sub,$txt,$html){
$json = array();
$json["who"] = $to
$json["sub"] = sub
$json["txt"] = $txt
$json["html"] = $html
file_put_contents("C:\easymail.txt",json_encode($json));
return exec('"C:\Users\Jordi\Desktop\VisualBasicProjects\ConsoleApplication2\ConsoleApplication2\bin\Debug\ConsoleApplication2.exe" -fb -path:C:\easymail.txt"');
}
?>