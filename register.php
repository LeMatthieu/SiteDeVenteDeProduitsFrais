<?php

include("config.php");
// initialisation des variables 
$firstname = "";
$lastname  = "";
$lastname  = "";
$email="";
$passwordreg="";
$birthdate="";
$adress="";
$city="";
$postalcode=0;
$phonenumber=0;

$shopadress="";
$shopname="";
$shopcity="";
$shopCP=0;
$shoptype="";
$errors = array(); 

//var_dump($phonenumber);
// REGISTER USER
if (isset($_POST['register'])) {
    //echo "je rentre dans le if";
    // receive all input values from the form
    $firstname= mysqli_real_escape_string($db,$_POST['firstname']);
    $lastname = mysqli_real_escape_string($db,$_POST['lastname']);
    $password = mysqli_real_escape_string($db,$_POST['passwordRegister']);
    $email = mysqli_real_escape_string($db,$_POST['mailRegister']);
    $birthdate = mysqli_real_escape_string($db,$_POST['birthDate']);
    $adress = mysqli_real_escape_string($db,$_POST['adress']);
    $city = mysqli_real_escape_string($db,$_POST['city']);
    $postalcode = mysqli_real_escape_string($db,$_POST['postalcode']);
    $phonenumber = mysqli_real_escape_string($db,$_POST['PhoneNumber']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($firstname)) { array_push($errors, "Le prenom est requis"); }
    if (empty($lastname)) { array_push($errors, "Le nom est requis"); }
    if (empty($email)) { array_push($errors, "L'email est requis"); }
    if (empty($password)) { array_push($errors, "le mot de passe est requis"); }
    if (empty($adress)) { array_push($errors, "L'adresse est requise"); }
    if (empty($city)) { array_push($errors, "La ville est requise"); }
    if (empty($postalcode)) { array_push($errors, "le code postal est requis"); }
    if (empty($phonenumber)) { array_push($errors, "Le numéro de téléphobe est requis"); }
    if (empty($birthdate)) { array_push($errors, "La date de naissance est requise"); }


    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM user WHERE email='$email' OR phonenumber='$phonenumber' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
      if ($user['email'] === $email) {
        array_push($errors, "L'adresse email existe déjà");
      }
      if ($user['phonenumber'] === $phonenumber) {
        array_push($errors, "Le numéro de téléphone existe déjà");
      }
    }
    
    //var_dump($errors);
    // Finally, register user if there are no errors in the form
    

    if (count($errors) == 0) {
        $query = "INSERT INTO user (firstname, lastname, password, email, adress, city, postalcode, phonenumber, birthdate) 
                  VALUES('$firstname', '$lastname','$password', '$email', '$adress', '$city', '$postalcode', '$phonenumber', '$birthdate');";
        //var_dump( $query);
        $result=mysqli_query($db, $query);
      // Perform a query, check for error
      if (!$result) {
      echo("Error description: " . mysqli_error($db));
      }

        
    }
  }


  if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($db, $_POST['inputEmail']);
    $password = mysqli_real_escape_string($db, $_POST['inputMDP']);
  
    if (empty($email)) {
       array_push($errors, "Le nom d'utilisateur est requis pour se connecter ");
    }
    if (empty($password)) {
       array_push($errors, "Le mot de passe est requis pour se connecter");
    }
  
    if (count($errors) == 0) {
       
       $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
       $results = mysqli_query($db, $query);
       if (!$results) {
          echo("Error description: " . mysqli_error($db));
          }
    
       if (mysqli_num_rows($results) == 1) {
         $_SESSION['username'] = $email;
         $emailogged=$_SESSION['username'];
         $_SESSION['loggedin'] = true;      
         include('getuserdata.php');
         $_SESSION['myfname']=$resultatall[0]['firstname'];
         $_SESSION['mylname']=$resultatall[0]['lastname'];
         $_SESSION['mypassword']=$resultatall[0]['password'];
         $_SESSION['myadress']=$resultatall[0]['adress'];
         $_SESSION['mycity']=$resultatall[0]['city'];
         $_SESSION['mypostalcode']=$resultatall[0]['postalcode'];
         $_SESSION['myphonenumber']=$resultatall[0]['phonenumber'];
         $_SESSION['mybirthdate']=$resultatall[0]['birthdate'];

         // on verifie si l'user a un commerce associé a la connexion 
          include('getshopdata.php');
         header('location:index.php');
       }else {
          array_push($errors, "Le mot de passe ou l'email que vous avez entré est incorrect");
       }
    }
  }

  if (isset($_POST['logout'])){
    session_destroy();
    header('location:index.php');
    exit;
  }

// var_dump($_POST['validshopname']);


//créer son échoppe
if (isset($_POST['validshopname'])) {
  
  include('getuserdata.php');
  $shopname=mysqli_real_escape_string($db,$_POST['shopname']);
  $shoptype=mysqli_real_escape_string($db,$_POST['shoptype']);
  $shopadress=mysqli_real_escape_string($db,$_POST['shopadress']);
  $shopcity=mysqli_real_escape_string($db,$_POST['shopcity']);
  $shopcp=mysqli_real_escape_string($db,$_POST['shopcp']);
 if (empty($shoptype)) {
    array_push($errors, "le type est requis");
 }
 if (empty($shopadress)) {
  array_push($errors, "l'adress est requise");
}
if (empty($shopcity)) {
  array_push($errors, "la ville est requise");
}
if (empty($shopcp)) {
  array_push($errors, "le CP est requis");
}

 
 if (count($errors) == 0) {
  //echo "je rentre dans le if";
  $query= "INSERT INTO shop (name, type, id_User, shopadress, shopcity, shopcp)
          VALUES('$shopname', '$shoptype', '$iduser', '$shopadress', '$shopcity', '$shopcp')";

  $result=mysqli_query($db, $query);


  // apres avoir creer son commerce, on recupere les data de celui ci pour les mettre dans la session en cours (sinon obligé de se reconnecter pour mettre a jour les data si 
  //on fait ca que dans le login)
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

  header('location:index.php');

  if (!$result) {
    //var_dump($_SESSION['myshopname']);
    echo("Error description: " . mysqli_error($db));
  }

 }

}


//supprimer son echoppe
if (isset($_POST['deleteshop'])) {

  include('getuserdata.php');
  
  $sqlQuery = "DELETE FROM shop WHERE id_User=$iduser"; // supprime le magasin associé a l'utilisateur connecté
  $donne = $mysqlConnection->prepare($sqlQuery);
  if($donne->execute()){
    

    include('getshopdata.php');
    
    }
  else
  {
    print_r($donne->errorInfo()); 
  }
  header('location:index.php');

}


//mis a jour de son profil si on a pas de boutique 
if (isset($_POST['updateprofilenoshop'])) {
  include('getuserdata.php');
  $firstname= mysqli_real_escape_string($db,$_POST['editfname']);
  $lastname = mysqli_real_escape_string($db,$_POST['editlname']);
  $password = mysqli_real_escape_string($db,$_POST['editpassword']);
  $email = mysqli_real_escape_string($db,$_POST['editmail']);
  $birthdate = mysqli_real_escape_string($db,$_POST['editbirth']);
  $adress = mysqli_real_escape_string($db,$_POST['editadress']);
  $city = mysqli_real_escape_string($db,$_POST['editcity']);
  $postalcode = mysqli_real_escape_string($db,$_POST['editcp']);
  $phonenumber = mysqli_real_escape_string($db,$_POST['editphone']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "Le prenom est requis"); }
  if (empty($lastname)) { array_push($errors, "Le nom est requis"); }
  if (empty($email)) { array_push($errors, "L'email est requis"); }
  if (empty($password)) { array_push($errors, "le mot de passe est requis"); }
  if (empty($adress)) { array_push($errors, "L'adresse est requise"); }
  if (empty($city)) { array_push($errors, "La ville est requise"); }
  if (empty($postalcode)) { array_push($errors, "le code postal est requis"); }
  if (empty($phonenumber)) { array_push($errors, "Le numéro de téléphobe est requis"); }
  if (empty($birthdate)) { array_push($errors, "La date de naissance est requise"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE email='$email' OR phonenumber='$phonenumber' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if($email != $_SESSION['username'] ){
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "L'adresse email existe déjà");
    }
  }
}

if($phonenumber != $_SESSION['myphonenumber']){
  if ($user) {
    if ($user['phonenumber'] === $phonenumber) {
      array_push($errors, "Le numéro de téléphone est deja associé à un compte");
    }
  }

}
  //var_dump($errors);
  // Finally, register user if there are no errors in the form
  

  if (count($errors) == 0) {
      $query = "UPDATE user SET firstname='$firstname', lastname='$lastname',  password='$password', email='$email', adress='$adress',
       city='$city',postalcode='$postalcode', phonenumber='$phonenumber', birthdate='$birthdate' WHERE idUser=$iduser;";
      //var_dump( $query);
      $result=mysqli_query($db, $query);
      include('getuserdata.php');
      $_SESSION['myfname']=$resultatall[0]['firstname'];
      $_SESSION['mylname']=$resultatall[0]['lastname'];
      $_SESSION['mypassword']=$resultatall[0]['password'];
      $_SESSION['myadress']=$resultatall[0]['adress'];
      $_SESSION['mycity']=$resultatall[0]['city'];
      $_SESSION['mypostalcode']=$resultatall[0]['postalcode'];
      $_SESSION['myphonenumber']=$resultatall[0]['phonenumber'];
      $_SESSION['mybirthdate']=$resultatall[0]['birthdate'];
    // Perform a query, check for error
    if (!$result) {
    echo("Error description: " . mysqli_error($db));
    }
  }
}












//mis a jour de son profil si on a une boutique
if (isset($_POST['updateprofil'])) {
  include('getuserdata.php');
  $firstname= mysqli_real_escape_string($db,$_POST['editfname']);
  $lastname = mysqli_real_escape_string($db,$_POST['editlname']);
  $password = mysqli_real_escape_string($db,$_POST['editpassword']);
  $email = mysqli_real_escape_string($db,$_POST['editmail']);
  $birthdate = mysqli_real_escape_string($db,$_POST['editbirth']);
  $adress = mysqli_real_escape_string($db,$_POST['editadress']);
  $city = mysqli_real_escape_string($db,$_POST['editcity']);
  $postalcode = mysqli_real_escape_string($db,$_POST['editcp']);
  $phonenumber = mysqli_real_escape_string($db,$_POST['editphone']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "Le prenom est requis"); }
  if (empty($lastname)) { array_push($errors, "Le nom est requis"); }
  if (empty($email)) { array_push($errors, "L'email est requis"); }
  if (empty($password)) { array_push($errors, "le mot de passe est requis"); }
  if (empty($adress)) { array_push($errors, "L'adresse est requise"); }
  if (empty($city)) { array_push($errors, "La ville est requise"); }
  if (empty($postalcode)) { array_push($errors, "le code postal est requis"); }
  if (empty($phonenumber)) { array_push($errors, "Le numéro de téléphobe est requis"); }
  if (empty($birthdate)) { array_push($errors, "La date de naissance est requise"); }

  $shopname=mysqli_real_escape_string($db,$_POST['editshopname']);
  $shoptype=mysqli_real_escape_string($db,$_POST['editshoptype']);
  $shopadress=mysqli_real_escape_string($db,$_POST['editshopadress']);
  $shopcity=mysqli_real_escape_string($db,$_POST['editshopcity']);
  $shopcp=mysqli_real_escape_string($db,$_POST['editshopcp']);
 if (empty($shoptype)) {
    array_push($errors, "le type est requis");
 }
 if (empty($shopadress)) {
  array_push($errors, "l'adress est requise");
}
if (empty($shopcity)) {
  array_push($errors, "la ville est requise");
}
if (empty($shopcp)) {
  array_push($errors, "le CP est requis");
}

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE email='$email' OR phonenumber='$phonenumber' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if($email != $_SESSION['username'] ){
    if ($user) { // if user exists
      if ($user['email'] === $email) {
        array_push($errors, "L'adresse email existe déjà");
      }
    }
  }
  
  if($phonenumber != $_SESSION['myphonenumber']){
    if ($user) {
      if ($user['phonenumber'] === $phonenumber) {
        array_push($errors, "Le numéro de téléphone est deja associé à un compte");
      }
    }
  
  }
  //var_dump($errors);
  // Finally, register user if there are no errors in the form
  

  if (count($errors) == 0) {

      $query = "UPDATE shop SET name='$shopname', type='$shoptype',  shopadress='$shopadress', shopcity='$shopcity', shopcp='$shopcp'
       WHERE id_User=$iduser;";
      $result=mysqli_query($db, $query);
      if (!$result) {
        echo("Error description: " . mysqli_error($db));
      }
      
      include('getshopdata.php'); //recupere les info du shop concernant l'user en cours et les met à jour dans le cache

      $query = "UPDATE user SET firstname='$firstname', lastname='$lastname',  password='$password', email='$email', adress='$adress',
       city='$city',postalcode='$postalcode', phonenumber='$phonenumber', birthdate='$birthdate' WHERE idUser=$iduser;";
      //var_dump( $query);
      $result=mysqli_query($db, $query);
      include('getuserdata.php'); //recupere les info de la db.
      $_SESSION['myfname']=$resultatall[0]['firstname'];
      $_SESSION['mylname']=$resultatall[0]['lastname'];
      $_SESSION['mypassword']=$resultatall[0]['password'];
      $_SESSION['myadress']=$resultatall[0]['adress'];
      $_SESSION['mycity']=$resultatall[0]['city'];
      $_SESSION['mypostalcode']=$resultatall[0]['postalcode'];
      $_SESSION['myphonenumber']=$resultatall[0]['phonenumber'];
      $_SESSION['mybirthdate']=$resultatall[0]['birthdate'];
    // Perform a query, check for error
    if (!$result) {
    echo("Error description: " . mysqli_error($db));
    }
  }
}
// $_SESSION['myshop']=$resultat;

