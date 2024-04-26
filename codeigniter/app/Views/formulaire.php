<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>

</head>
<body>
    <h1>FORMULAIRE</h1>

    <form action="/index.php/insertion" method="post">

    <input type="text" pattern="^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$" name="mac"  placeholder="ADRESSE MAC">
    <input type="text"  name="ip" placeholder="ADRESSE IP">
    <input type="text"  name="serie" placeholder="NUMERO DE SERIE">
    <input type="text" name="pan" placeholder="PAN">
    <input type="text" name="etat" placeholder="ETAT">
    <input type="text" name="host" placeholder="HOSTNAME">
    <input type="submit" value="AJOUTER">


    </form>
    <?php
        if (isset($message)){
            echo $message;
        }
    ?>

    <a href="/index.php/list">LISTE MACHINE</a>
</body>
</html>