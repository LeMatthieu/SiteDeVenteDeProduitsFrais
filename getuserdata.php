<?php 

//recupere UNIQUEMENT l'id de l'utilisateur en cours
$emailogged=$_SESSION['username']; //associe la variable a l'username de $_session (qui correspond à email)
$sqlQuery = "SELECT idUser FROM user WHERE email='$emailogged'"; // recupere l'id de l'user connecté en cours dans un tableau associatif
$donne = $mysqlConnection->prepare($sqlQuery);
$donne->execute();
$resultat = $donne->fetchAll();
$iduser=$resultat[0]['idUser'];


//recupere toute les données de l'utilisateur en cours
$sqlQuery = "SELECT * FROM user WHERE email='$emailogged'";
$donne = $mysqlConnection->prepare($sqlQuery);
$donne->execute();
$resultatall = $donne->fetchAll();



?>