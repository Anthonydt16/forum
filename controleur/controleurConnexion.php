<?php



require_once 'lib/formulaire.php';
$formulaireConnexion = new Formulaire('post', 'index.php', 'fConnexion', 'fConnexion');
 
$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerLabel('login :',"label"));
$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerInputTexte('login', 'login', '', 1, 'Entrez votre login', '',"form-control"));
$formulaireConnexion->ajouterComposantTab();

$formulaireConnexion->ajouterComposantLigne($formulaireConnexion-> creerInputSubmit('submitConnex', 'submitConnex', 'Valider',"btn btn-light btn-lg btn-block"));
$formulaireConnexion->ajouterComposantTab();

//$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerMessage($messageErreurConnexion));
$formulaireConnexion->ajouterComposantTab();

$formulaireConnexion->creerFormulaire();


$formulaireInscription = new Formulaire('post', 'index.php', 'finscription', 'finscription');
 
$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerLabel('Identification :',"label"));
$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerInputTexte('loginInscription', 'loginInscription', '', 1, 'Entrez votre identifiant', '',"form-control"));
$formulaireInscription->ajouterComposantTab();

$formulaireInscription->ajouterComposantLigne($formulaireInscription-> creerInputSubmit('submitConnex', 'submitConnex', 'Valider',"btn btn-light btn-lg btn-block"));
$formulaireInscription->ajouterComposantTab();

//$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerMessage($messageErreurConnexion));
$formulaireInscription->ajouterComposantTab();

$formulaireInscription->creerFormulaire();

require_once 'vue/vueConnexion.php';