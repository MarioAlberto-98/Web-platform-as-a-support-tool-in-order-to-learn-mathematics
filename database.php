<?php
$server='localhost';
$username='root';
$password='';
$database='php_login_database';

try{
    $conn=new PDO("mysql:host=$server;dbname=$database;",$username,$password);
}catch (PDOException $e){
    die('Pusiste algo mal bro: '.$e->getMessage());
}


?>


<?php   

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD','');
define('DB_NAME', 'php_login_database');


$link=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($link===false){
    die("ERROR DE CONEXION". mysqli_connect_error());

}else{
    
}

?>
