<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage</title>
</head>
<body>
    <h1>LISTE DES PC</h1>

    <table>
        <tr>
            <td>MAC</td>
            <td>IP</td>
            <td>SERIE</td>
            <td>PAN</td>
            <td>ETAT</td>
            <td>HOSTNAME</td>
            <td>ACTION</td>
        </tr>
        <?php foreach($machine as $m):?>
            <tr>
            <td><?=$m['mac']?></td>
            <td><?=$m['ip']?></td>
            <td><?=$m['serie']?></td>
            <td><?=$m['pan']?></td>
            <td><?=$m['etat']?></td>
            <td><?=$m['hostname']?></td>
            <td><a href="/index.php/suppression/<?=$m['id']?>">supprimer</a> <a href="/index.php/modification/<?=$m['id']?>">modifier</a></td>
        </tr>
        <?php endforeach;?>
    </table>

    <?php echo $pager->links();?>
</body>
</html>