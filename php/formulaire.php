<?php 
$serveur = "localhost";
$dbname = "cours";
$user = "root";
$pass = "root";

try{
    //On se connecte à la BDD
    $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //On crée une table form
    $form = "CREATE TABLE form(
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        prenom TEXT,
        mail TEXT,
        age INT,
        sexe TEXT,
        pays TEXT)";
    $dbco->exec($form);
}
catch(PDOException $e){
    echo 'Erreur : '.$e->getMessage();
}



 // si formulaire soumis
if(isset($_POST['envoi'])){
    
        $nom =  $_POST['name'];
     //   $email = $_POST['email'];
        $message = $_POST['message'];
        
 
}

if (empty ($nom) || empty ($email)){
    echo 'erreur';
}else {
    $message  = "Nom : ".$nom.;
    //envoi mail
    $mailheaders = "From: $email\n";
	$mailheaders .= "MIME-version: 1.0\n";
	$mailheaders .= "Content-type: text/html; charset= utf-8\n"

    if(mail('email du destinataire', 'Objet du mail', $msg, $mailheaders)){
        echo 'Email envoyé.';
        // page redirigé apres le formulaire header ("Location : ")
    }else{
        echo 'Erreur, email non envoyé.';

    }

    }
}


?>