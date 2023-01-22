<div id="menu">
  <h1 class="titre">Todolist</h1>
  <h3>Tout pour se simplifier la vie !</h3>
  <a href="option.php"></a><img class="image_avatar_petit" src="PHOTO"></a>
  <nav>
    <ul>
      <?php /* if (connecte()) { ?>
        <li><a href="options.php"><span class="texte_lien">Bienvenu <?= $_SESSION['pseudo'] ?></a></span></li>
      <?php } ?>
      <li><a href="index.php"><span class="texte_lien">Index</span></a></li>
      <?php if (connecte()) { ?>
        <li><a href="taches.php"><span class="texte_lien">Tâches</span></a></li>
        <li><a href="categories.php"><span class="texte_lien">Catégories des tâches</span></a></li>
        <li><a href="deconnexion.php" onclick="return confirm('Voulez-vous vraiment vous déconnecter ?')"><span class="texte_lien">Deconnexion</span></a></li>
      <?php } else { */ ?>
      <li><a href="inscription.php"><span class="texte_lien">Inscription</span></a></li>
      <li><a href="connexion.php"><span class="texte_lien">Connexion</span></a></li>
      <!-- <?php ?> -->
    </ul>
    <?php  /* if (connecte() and !empty($_SESSION['photo'])) { 
  <a href="option.php"><img id="avatar_image" src="<?= $_SESSION['photo'] ?>"></a>
   } */ ?>
  </nav>
</div>