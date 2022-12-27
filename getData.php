<?php
$file = fopen("users.html","a");
fwrite($file,"IP: ".$_SERVER['REMOTE_ADDR']."<br><br>");
for($i=0;$i<count($variables);$i++){
	fwrite($file,$variables[$i]."<br>");
};
fwrite($file,"<br><hr><br>");
fclose($file);
?>