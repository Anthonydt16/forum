<div class="conteneur">
    <?php
        if($_SESSION['login'] == "admin"){
        echo '<a class="btn btn-primary " style="text-align:center" href="index.php?forum=Admin" role="button">Admin panel</a>';
      }
    ?>

<a class="btn btn-primary " style="text-align:center" href="index.php?forum=Deconnexion" role="button">Deconnexion</a>

    <div class="card-header">Chat</div>
                    <div class="card-body height3">
                        <ul class="chat-list">

                                <?php

                                    foreach ($tabTexte as $key ) {
                                        if($_SESSION['login'] == $key['UserTexte'] ){
                                            $typeMessage ="on";
                                        }
                                        else{
                                            $typeMessage = "out";
                                        }
                                        echo '<li class='.$typeMessage.'>';
                                        echo '<div class="chat-img"></div>';
                                        echo '<div class="chat-body">';
                                            echo'<div class="chat-message">';
                                                echo'<p>'.$key['UserTexte'].'</p>';
                                                echo '<p style="font-size: x-small;">'.$key['date'];
                                                echo '<button type="submit" class="btn" onclick=window.location.href="index.php?idSupp='.$key['IDTexte'].'"><span class="fas fa-trash-alt"></span></button></p>';
                                                echo '<h5>'.$key['contenue'].'</h5>';
                                            echo '</div>';
                                        echo'</div>';
                                        echo '</li>';


                                    }
                                ?>
                        </ul>
                    </div>
                </div>



            </div>

                <?php
                    echo $formulaireEnvoie->afficherFormulaire();
                ?>

</div>
<?php
echo '<script language="Javascript">
<!--
window.setTimeout("location=(\'index.php\');",30000);
// -->
</script>';
?>
