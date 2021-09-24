<div class="conteneur">
    <main>
      <?php
      $uneConnex = new DBConnex(Param::$dsn, Param::$user, Param::$pass);
      foreach ($uneConnex->comptenbMessage($uneConnex) as $key => $value) {
        echo $value;
        echo '<div class="card" style="width: 18rem;">';
  echo '<div class="card-body">';
  echo '<h5 class="card-title">nombre de message total</h5>';
  echo '<p class="card-text">'.$value.' message</p>';
  echo '</div>';
  echo '</div>';
      }

      echo '<a class="btn btn-primary " style="text-align:center" href="index.php?forum=Forum" role="button">retour au forum</a>'; ?>
    </main>
</div>
