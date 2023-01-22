<?php
//https://www.php.net/manual/fr/ref.mysqli.php
//connexion à la base de données
$link = mysqli_connect("localhost", "root", "", "baseavion");
//envoie d'une requête
$result = mysqli_query($link, "select * from avion where av_id=-42");
//récupération de tous les enregsitrements dans un tableau
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,
    td,
    th {
        border: 1px solid #123;
        border-collapse: collapse;
        padding: 10px;
    }
</style>

<body>
    <table>
        <tr>
            <?php
            if (count($data)>0)
                foreach ($data[0] as $cle => $valeur) {
                    echo "<th>$cle</th>";
                }
            ?>            
        </tr>
        <?php
        foreach($data as $num => $ligne) {
            echo "<tr>";
            foreach ($ligne as $cle => $valeur) {
                echo "<td>$valeur</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>