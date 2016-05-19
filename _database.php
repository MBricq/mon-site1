<?php 
	/* call to database */
	try{
		//acces a la base de donnee
		
		//avec my hostinger
		//$db = new PDO('mysql:host=127.0.0.1;dbname=u665233453_base;charset=utf8', 'u665233453_admin', 'Gahoole01');
		
		//avec easyPhp
		 $db = new PDO('mysql:host=127.0.0.1;dbname=mon.site69;charset=utf8', 'root', '');
		
	}catch(\Exception $e){
		//si la connection echoue
		die('connection Database failed');
	}
?>