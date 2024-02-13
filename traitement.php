<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$port = "3308";

try{
    $bdd = new PDO("mysql:host=$servername;port=$port;dbname=utilisateurs", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connexion réussie !";
}
catch(PDOException $e) {
    echo "Erreur : ".$e->getMessage();
}


if (isset($_POST['ok'])) {
    extract($_POST);

    // Vérifier si l'email existe déjà dans la base de données
    $check_query = $bdd->prepare("SELECT * FROM users WHERE email = :email");
    $check_query->execute(array('email' => $email));
    $existing_user = $check_query->fetch();

    if ($existing_user) {
        echo "Vous avez déjà un compte avec cet email.";
    } else {
        // Insérer l'utilisateur dans la base de données
        $requete = $bdd->prepare("INSERT INTO users VALUES (0, :pseudo, :nom, :prenom, MD5(:mdp), :email)");
        $requete->execute(
            array(
                "pseudo" => $pseudo,
                "nom" => $nom,
                "prenom" => $prenom,
                "mdp" => $pass,
                "email" => $email
            )
        );
        header("Location: login.php");
    }
}

?> 