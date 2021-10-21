<?php 


$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=animalerie", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

if(isset($_POST["valider"] ) && isset($_POST["nom"] )){

    
 
$nom = $_POST['nom']; 
$prenom = $_POST['prenom'];
$passe = $_POST['passe'];
$conf_passe = $_POST['conf_passe'];
$valider = $_POST["valider"];

try {
     $sql = "INSERT INTO utilisateurs (nom, prenom, passe) 
            VALUES ('$nom', '$prenom', '$passe')";
    $conn->exec($sql);
}
catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

header('location:formCon.php');


}

if(isset($_POST["valider"] ) && isset($_POST["libelle"] )){

    
 
$libelle = $_POST['libelle']; 
$quantite = $_POST['quantite'];
// $mini = $_POST['mini'];
$valider = $_POST["valider"];

 

try {
     $sql = "INSERT INTO produits (libelle, quantite) 
            VALUES ('$libelle', '$quantite')";
    $conn->exec($sql);
}
catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}



}

if(isset($_POST["validerA"] ) && isset($_POST["race"] )){

    
 
$nom = $_POST['nom']; 
$race = $_POST['race'];
$categorie = $_POST['categorie'];
$poids = $_POST['poids'];
$age = $_POST['age'];
$cout = $_POST['cout'];
$taille = $_POST['taille'];
$fourrure = $_POST['fourrure'];

 $valider = $_POST["validerA"];

 

try {
     $sql = "INSERT INTO animaux (nom, race,categorie,poids,age,cout,taille,fourrure) 
            VALUES ('$nom', '$race','$categorie','$poids','$age','$cout','$taille','$fourrure')";
    $conn->exec($sql);
}
catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

header('location:formProd.php');


}

if(isset($_POST["validerC"] ) && isset($_POST["adresse"] )){

    
 
$nom = $_POST['nom']; 
$telephone = $_POST['telephone'];
$adresse = $_POST['adresse'];
$animal = $_POST['animal'];

 $valider = $_POST["validerC"];

 

try {
     $sql = "INSERT INTO clients (nom, telephone,adresse,animal) 
            VALUES ('$nom', '$telephone','$adresse','$animal')";
    $conn->exec($sql);
}
catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

header('location:formClient.php');


}


// try{

    
    
    //  $sql = "INSERT INTO utilisateurs (nom,prenom,passe)
    //          VALUES ($nom,$prenom,$passe)";
    // $dbco->exec($sql);

           
// }

// catch(PDOException $e){
// echo $sql."<p> Erreur : requete non executée </p>" . $e->getMessage()."<br>";

// }





?>