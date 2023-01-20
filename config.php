<?php
/* Db settings */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'dbmangerlocal');
 
/* Connexion a la db */
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
//var_dump(DB_NAME);
 
// Check connection
if($db=== false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Souvent on identifie cet objet par la variable $conn ou $db
$mysqlConnection = new PDO(
    'mysql:host=localhost;dbname=dbmangerlocal;charset=utf8',
    'root',
    ''
);

?>