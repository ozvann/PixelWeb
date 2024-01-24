<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    
    

    $contenu_message = "Nom : $nom\n";
    $contenu_message = "Prénom : $prenom\n";
    $contenu_message .= "E-mail : $email";
    

    
    $destinataire = "info@pixelweb.com";
    $sujet = "Nouveau message depuis le formulaire";
    $entetes = "De : $email";

    mail($destinataire, $sujet, $contenu_message, $entetes);

    
    header("Location: Index");
    exit;
}
?>
