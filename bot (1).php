<?php
@system("clear");
@system("figlet Hackerobenz");
date_default_timezone_set('Asia/Manila');
$b="\033[1;35m";
$red="\033[1;31m";
$green="\033[1;32m";
$puti="\033[1;37m";
$orange="\033[1;36m";
print "
[35m<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>[32m
$b|  HACKING - TOOLS : [31m GHANA$b        |
[35m<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>[32m
     CHANNEL        :[34m HACKER OBENZ
[32m
     YOUTUBE        :[34m SUBSCRIBE TO MY CHANNEL
[32m
     WARNING        :[31m NOT FOR SALE[32m
[32m
     CREATOR        :[31m HACKER OBENZ[32m
[32m<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>[32m
        [36m HACK SCRIPT STARTING......[326m
[34m*********************************************[32m

";




while (true){
    
$url="xxxx";

$req="xxxx";

$hacker=curl_init();
curl_setopt_array($hacker, array(
	CURLOPT_PORT =>"xxxx",
CURLOPT_URL => "$url",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_SSL_VERIFYPEER => false,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_CUSTOMREQUEST => "xxxx",
	CURLOPT_POSTFIELDS => $req,
));
	
	
$obenz = curl_exec($hacker);
curl_close($hacker);
$js = json_decode($obenz,true);
echo "xxxx : ".$js["xxxx"]."xxxx".$js["xxxx"]."\n";
sleep(5);
}
?>