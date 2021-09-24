<?php
class DBConnex extends PDO{
    
    private static $instance;
    
    public static function getInstance(){
        if ( !self::$instance ){
            self::$instance = new DBConnex();
        }
        return self::$instance;
    }
    
    public function __construct(){
        try {
            parent::__construct(Param::$dsn ,Param::$user, Param::$pass);
        } catch (Exception $e) {
            echo $e->getMessage();
            die("Impossible de se connecter.") ;
        }
    }
    
    public function connexion($unDsn,$unUser,$unPass){
        try{
            $uneConnex = new PDO($unDsn, $unUser, $unPass);
            return $uneConnex;
        }
        catch(PDOException $e){
            die("erreur de connexion !".$e->getMessage());
        }
    }

    public function login($connex){

        $requete = DBConnex::getInstance()->prepare("SELECT user FROM `compte`");
        $requete->execute();
        $donnee = $requete->fetchAll(PDO::FETCH_ASSOC);
        return $donnee;

    }

    public function recupText($connex){

        $requete = DBConnex::getInstance()->prepare("SELECT * FROM `texte`");
        $requete->execute();
        $donnee = $requete->fetchAll(PDO::FETCH_ASSOC);
        return $donnee;

    }

    public function envoieText($connex,$ID, $contenu,$login,$date){
        $stmt = $connex->prepare("INSERT INTO `texte` (`IDTexte`, `UserTexte`, `contenue`,`date`) VALUES (:ID, :login, :contenu, :date);");
        $stmt->bindParam(':ID', $ID);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':contenu', $contenu);
        $stmt->bindParam(':date', $date);

        $stmt->execute();
    }


    public function recupuserID($connex){

        $requete = DBConnex::getInstance()->prepare("SELECT ID FROM `compte`");
        $requete->execute();
        $donnee = $requete->fetchAll(PDO::FETCH_ASSOC);
        return $donnee;

    }
    public function enregistrementUser($connex,$ID, $IP,$login){
        $stmt = $connex->prepare("INSERT INTO `compte` (`ID`, `user`, `IP`) VALUES (:ID, :login, :IP);");
        $stmt->bindParam(':ID', $ID);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':IP', $IP);
        $stmt->execute();

    }

}




    