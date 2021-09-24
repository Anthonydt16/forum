<?php
$uneConnex = new DBConnex(Param::$dsn, Param::$user, Param::$pass);

$tabTexte = $uneConnex->recupText($uneConnex);

require_once 'lib/formulaire.php';
$formulaireEnvoie = new Formulaire('post', 'index.php', 'fEnvoie', 'fEnvoie');
 
$formulaireEnvoie->ajouterComposantLigne($formulaireEnvoie->creerTextarea('chat', 'chat', '', 1, 'Entrez votre identifiant', 'ici tu ecris mec ',"form-control"));
$formulaireEnvoie->ajouterComposantTab();

$formulaireEnvoie->ajouterComposantLigne($formulaireEnvoie-> creerInputSubmit('submitConnex', 'submitConnex', 'Envoyer',"btn btn-light btn-lg btn-block"));
$formulaireEnvoie->ajouterComposantTab();

//$formulaireEnvoie->ajouterComposantLigne($formulaireEnvoie->creerMessage($messageErreurConnexion));
$formulaireEnvoie->ajouterComposantTab();

$formulaireEnvoie->creerFormulaire();
if(!empty($_POST['chat'])){
    if($_POST['chat'] != null){

        $id = count($tabTexte)+1;
        date_default_timezone_set('Europe/Paris');
        $uneConnex->envoieText($uneConnex,$id,$_POST['chat'] , $_SESSION['login'],date("F j, Y, g:i a"));
        header('location: index.php');

    }
    
}

require_once 'vue/vueForum.php'; 


