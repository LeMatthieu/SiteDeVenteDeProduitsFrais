<?php
/* Db settings */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'dbmangerlocal');
 
/* Connexion a la db avec mysqli connect*/
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

 
// verifie la connection
if($db=== false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// connexion avec pdo
$mysqlConnection = new PDO(
    'mysql:host=localhost;dbname=dbmangerlocal;charset=utf8',
    'root',
    ''
);
