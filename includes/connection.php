<?php 
try{
	$pod = new PDO('mysql:host=localhost;dbname=Mobile','root','root');
}
catch(PDOException $e){
	exit('Database Error.')


 }
?>