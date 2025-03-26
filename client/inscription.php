<?php
require_once("./client.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <form action="./control/registration.php" method="post">
        <div>
            <div>
                <label for="name">Name: </label>
                <input type="text" name="nomClient">
            </div>
            <div>
                <label for="email">E-mail: </label>
                <input type="email" name="emailClient">
            </div>
            <div>
                <label for="password">Password: </label>
                <input type="password" name="mdpClient">
            </div>
            <div>
                <label for="phone">Telephone: </label>
                <input type="phone" name="telephoneClient">
            </div>
            <div>
                <label for="adresse">Adress: </label>
                <input type="adresse" name="adresseClient">
            </div>

            <button type="submit" name="bouton">Inscrire</button>
        </div>
    </form>

    salama zareo a 
</body>

</html>
