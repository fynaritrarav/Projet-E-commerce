<?php
require_once("./../client.php");

if (isset($_POST["bouton"])) {
    if (!empty($_POST["nomClient"]) && !empty($_POST["emailClient"]) && !empty($_POST["mdpClient"]) && !empty($_POST["telephoneClient"]) && !empty($_POST["adresseClient"])) {
        $nom = strip_tags($_POST["nomClient"]);
        $email = strip_tags($_POST["emailClient"]);
        $mdp = strip_tags($_POST["mdpClient"]);
        $phone = strip_tags($_POST["telephoneClient"]);
        $adresse = strip_tags($_POST["adresseClient"]);
        try {
            $sql = "INSERT INTO client (nomClient, emailClient, mdpClient, telephoneClient, adresseClient) values (:nom, :email, :mdp, :phone, :adresse)";
            $query = $connection->prepare($sql);
            $query->bindValue(':nom', $nom, PDO::PARAM_STR);
            $query->bindValue(':email', $email, PDO::PARAM_STR);
            $query->bindValue(':mdp', $mdp, PDO::PARAM_STR);
            $query->bindValue(':phone', $phone, PDO::PARAM_STR);
            $query->bindValue(':adresse', $adresse, PDO::PARAM_STR);

            $query->execute();

        } catch (PDOException $e) {
            echo "something wrong" . $e->getMessage();
        }
    }

}
?>