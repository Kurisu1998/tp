<?php
 $bdd = new PDO("mysql:host=localhost;dbname=bdpartiel","root","rootroot");


if(isset($_POST['co'])){
    
    $mdp = htmlspecialchars($_POST['mdp']);
    if(!empty($mdp)){
        $reqadmin = $bdd->prepare("SELECT * FROM admin WHERE mdp = ?");
        $reqadmin->execute(array($mdp));
        $adminexist = $reqadmin->rowCount();
        if($adminexist == 1){
            header("Location: ajouter.php");
        }else{
            $erreur = "mauvais mot de passe";
        }
        
        
    }else{
        $erreur = "Le champ doit être remplie";
    }
}


    if(isset($_POST['rech']) ){
        header("Location: liste.php");
    }


?>