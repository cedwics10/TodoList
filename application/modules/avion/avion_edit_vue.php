<h1>CRUD de la table AVION : edit</h1>
<form method="post">
    <input type="hidden" name="av_id" id="av_id" value="<?= $av_id ?>">
    <p>
        <label>av_id : </label><?= $av_id ?>
    </p>
    <p>
        <label for="av_const">av_const</label>
        <input type="text" name="av_const" id="av_const" value="<?= $av_const ?>">
    </p>
    <p>
        <label for="av_modele">av_modele</label>
        <input type="text" name="av_modele" id="av_modele" value="<?= $av_modele ?>">
    </p>
    <p>
        <label for="av_capacite">av_capacite</label>
        <input type="number" name="av_capacite" id="av_capacite" value="<?= $av_capacite ?>">
    </p>
    <p>
        <label for="av_site">av_site</label>
        <select name="av_site" id="av_site">
            <?php OPTION_ville($av_site); ?>
        </select>
    </p>
    <input type="submit" name="btsubmit">
</form>