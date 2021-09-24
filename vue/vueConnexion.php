
<div class="conteneur">
    <main>  
        <div class="title" style="text-align:center"><h1>Page de connexion du forum</h1></div>
        <div id="texteBienvenue" class="card bg-secondry bg-gradient"style=" width:80%;  margin-left : 10%;">
            
            <div class='titre'><h5>Veuillez vous connecter</h5></div>
                <div class="card-body">
                    <div class="form-group">
                            <?php 
                                $formulaireConnexion->afficherFormulaire();
                            ?>
                    </div>
                </div>
        </div>
        <div id="inscription" class="card bg-secondry bg-gradien " style="  width:80%; margin-top : 2%;  margin-left : 10%">
            <div class='titre'><h5>Veuillez vous identifier</h5></div>
                <div class="card-body">
                    <div class="form-group">
                            <?php 
                                $formulaireInscription->afficherFormulaire();
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
