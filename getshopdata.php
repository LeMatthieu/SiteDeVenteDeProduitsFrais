<?php 

$sqlQuery = "SELECT * FROM shop WHERE id_User=$iduser"; // recupere les données du magasin associé a l'id de l'utilisateur en cours 
$donne = $mysqlConnection->prepare($sqlQuery);
$donne->execute();
$resultat = $donne->fetchAll();
//echo($resultatall);

if(count($resultat)==0){
$_SESSION['myshopexist'] = false;
}
else{
 $_SESSION['myshopexist'] = true;
 $_SESSION['myshopname'] = $resultat[0]['name'];
 $_SESSION['myshoptype'] = $resultat[0]['type'];
 $_SESSION['myshopadress'] = $resultat[0]['shopadress'];
 $_SESSION['myshopcity'] = $resultat[0]['shopcity'];
 $_SESSION['myshopcp'] = $resultat[0]['shopcp'];

}

?>