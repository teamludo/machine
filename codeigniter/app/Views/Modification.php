<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>FORMULAIRE</h1>
<?php foreach($pc as $m):?>
<form action="/index.php/modifier/<?php echo $m['id']?>" method="post">
    <input type="text" name="mac"  value = <?php echo $m['mac'] ?> placeholder="ADRESSE MAC">
    <input type="text"  name="ip"  value = <?php echo $m['ip'] ?> placeholder="ADRESSE IP">
    <input type="text"  name="serie"  value = <?php echo $m['serie'] ?> placeholder="NUMERO DE SERIE">
    <input type="text" name="pan"  value = <?php echo $m['pan'] ?> placeholder="PAN">
    <input type="text" name="etat"  value = <?php echo $m['etat'] ?> placeholder="ETAT">
    <input type="text" name="host"  value = <?php echo $m['hostname'] ?> placeholder="HOSTNAME">
    <?php endforeach;?>
    <input type="submit" value="AJOUTER">
</form>
</body>
</html>