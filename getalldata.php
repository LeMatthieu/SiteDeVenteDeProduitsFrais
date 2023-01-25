<?php 

$sqlQuery = "SELECT * FROM user;"; // recupere l'id de l'user connecté en cours dans un tableau associatif
$donne = $mysqlConnection->prepare($sqlQuery);
$donne->execute();
$resultat = $donne->fetchAll();

//var_dump($resultat);

$i=count($resultat)-1; // on associe la longueur du tableau -1(car quand on le parcours  l'index commence a 0 et non pas a 1);
while ($i>=0){
$iduser=$resultat[$i]['idUser'];
$sqlQuery = "SELECT * FROM shop WHERE id_User=$iduser"; // recupere les données du magasin associé a l'id de l'utilisateur en cours 
$donne = $mysqlConnection->prepare($sqlQuery);
$donne->execute();
$resultatshop = $donne->fetchAll();

if(count($resultatshop)>0){ //on vérifie que l'user en question possede bien une échoppe avant de l'afficher (count renvoi une array de size 0 si il n'en a pas)
echo("commerce de : " );
echo($resultat[$i]['lastname'] ." ". $resultat[$i]['firstname'] . "<br>");
echo("numéro de téléphone : " );
echo($resultat[$i]['phonenumber'] . "<br>");
echo("adresse email : " );
echo($resultat[$i]['email'] . "<br>");
echo("nom de l'échoppe : " );
echo($resultatshop[0]['name'] . "<br>");
echo("type : " );
echo($resultatshop[0]['type'] . "<br>");
echo("adresse de l'échoppe : " );
echo($resultatshop[0]['shopadress'] . ", " . $resultatshop[0]['shopcity'] . ", " . $resultatshop[0]['shopcp'] . "<br> <br> <br>");

}
$i=$i-1;
}
