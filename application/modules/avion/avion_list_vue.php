<h1>CRUD de la table AVION</h1>
<p><a href="<?=hlien("avion","edit","&id=0")?>">Nouvel enregistrement</a></p>
<table>
    <tr>
        <?php
        if (count($data) > 0)
            foreach ($data[0] as $cle => $valeur) {
                echo "<th>$cle</th>";
            }
        ?>
    </tr>
    <?php
    foreach ($data as $num => $ligne) {
        echo "<tr>";
        foreach ($ligne as $cle => $valeur) {
            //protection contre l'injection de javascript/HTML
            $valeur = htmlentities($valeur, ENT_QUOTES, "UTF-8");
            echo "<td>$valeur</td>";
        }
        extract($ligne);
        ?>
        <td><a href="<?=hlien("avion","edit","&id=$av_id")?>">Edit</a></td>
        <td><a href="<?=hlien("avion","delete","&id=$av_id")?>">Delete</a></td>
        </tr>
    <?php
    }
    ?>
</table>