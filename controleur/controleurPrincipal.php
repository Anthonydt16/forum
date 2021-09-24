<?php
//nouvelle objet connex
//$uneConnex = new DBConnex(Param::$dsn, Param::$user, Param::$pass);
require_once 'modele/param.php';
require_once 'modele/dBconnex.php';
require_once 'modele/IpRecup.php';
require_once 'lib/dispatcher.php';
if(isset($_GET['forum'])){
	$_SESSION['forum']= $_GET['forum'];
}
else
{
	if(!isset($_SESSION['forum'])){
		$_SESSION['forum']="connexion";
	}
}


if(isset($_POST["login"])){

	if(!empty($_POST["login"]) ){
        $uneConnex = new DBConnex(Param::$dsn, Param::$user, Param::$pass);

        //connex bdd 
        $maConnex = $uneConnex->connexion(Param::$dsn, Param::$user, Param::$pass);
        //recup des login et MDP

        $login= $uneConnex->login($maConnex);
        foreach ($login as $key) {
            if($key['user']== $_POST["login"]){
                //sauvegarde du login
                $_SESSION['login'] = $_POST["login"];
                $_SESSION['forum'] = "Forum";
            
    
            }
    
        }  
            
    }
}
    if(isset($_POST["loginInscription"])){

        if(!empty($_POST["loginInscription"]) ){
            
            $uneConnex = new DBConnex(Param::$dsn, Param::$user, Param::$pass);

            //connex bdd 
            $maConnex = $uneConnex->connexion(Param::$dsn, Param::$user, Param::$pass);
                //creation du compte 
                $tabUser = $uneConnex->recupuserID($uneConnex);

                foreach ($tabUser as $key) {
                    $ID = $key['ID'];
                    echo $ID;
                }
        
                $uneConnex->enregistrementUser($uneConnex,$ID+1, getIp(),$_POST["loginInscription"]);
        
                $_SESSION['login'] = $_POST["loginInscription"];
                $_SESSION['forum'] = "Forum";
        
                
        }  
                
    }
            
        
    




include_once dispatcher::dispatch($_SESSION['forum']);

