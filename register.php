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

    // $shopadress = mysqli_real_escape_string($db,$_POST['shopadress']);
    // $shopcity = mysqli_real_escape_string($db,$_POST['shopcity']);
    // $shopname = mysqli_real_escape_string($db,$_POST['shopname']);
    // $shopCP = mysqli_real_escape_string($db,$_POST['CPshop']);
    // $shoptype = mysqli_real_escape_string($db,$_POST['shoptype']);

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

    // if (empty($shopadress)) { array_push($errors, "L'adresse de votre commerce est requise"); }
    // if (empty($shopCP)) { array_push($errors, "Le code postal de votre commerce est requis"); }
    // if (empty($shopcity)) { array_push($errors, "La ville de votre commerce est requis"); }
    // if (empty($shoptype)) { array_push($errors, "Le type de votre comemrcre est requis"); }

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
       array_push($errors, "Username is required");
    }
    if (empty($password)) {
       array_push($errors, "Password is required");
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
         header('location:index.php');
       }else {
          array_push($errors, "Wrong username/password combination");
       }
    }
  }

  if (isset($_POST['logout'])){
    session_destroy();
    header('location:index.php');
    exit;
  }

// var_dump($_POST['validshopname']);

if (isset($_POST['validshopname'])) {
  
  $emailogged=$_SESSION['username']; //associe la variable a l'username de $_session (qui correspond à email)
  $sqlQuery = "SELECT idUser FROM user WHERE email='$emailogged'"; // recupere l'id de l'user connecté en cours dans un tableau associatif
  $donne = $mysqlConnection->prepare($sqlQuery);
  $donne->execute();
  $resultat = $donne->fetchAll();
  
  $iduser=$resultat[0]['idUser'] ;// recupere l'id de l'user en

  $shopname=mysqli_real_escape_string($db,$_POST['shopname']);
  $shopetype=mysqli_real_escape_string($db,$_POST['shoptype']);

  
  
 if (empty($shopetype)) {
    array_push($errors, "le type est requis");
 }

 
 if (count($errors) == 0) {
  echo "je rentre dans le if";
  $query= "INSERT INTO shop (name, type, id_User)
          VALUES('$shopname', '$shoptype', $iduser)";

  $result=mysqli_query($db, $query);

  if (!$result) {
    echo("Error description: " . mysqli_error($db));
  }

 }

}