<?php
include("connexion.php");

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Recherche</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="../css/tp.css" rel="stylesheet" />
    </head>
    <body>

        <form method="POST" action=""> 
        <h1 class="text-warning">Base de données Animaux</h1>
        
        <h2 class="text-primary">Interrogation</h2>
        
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="lol" value="option1" checked>
             <label class="form-check-label" for="exampleRadios1">
               Recherche sur le nom
             </label>
           
        </div>
        
         <div class="form-group centered">
           <div class="col-sm-3 my-1">
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom(*)">
           </div>
         </div>
        
         <div class="form-check">
            
           
           <input class="form-check-input" type="radio" name="exampleRadios" id="elo" value="option1" checked>
             <label class="form-check-label" for="exampleRadios1">
               Recherche par nom génétique
             </label>
           
        </div>
        <?php
         $gene = $bdd->prepare("SELECT animal.nom, generique.nom AS espece  AS prenom FROM animal INNER JOIN generique ON animal.id_generique = generique.id ");
         $gene->execute(array($_POST['categorie']));
        ?>
            <?php
    while($b = $gene->fetch()){ ?>
        <select name="categorie" id="categorie" class="dropdow">
            <option><?= $b['espece'] ?></option>
            
        </select>
           <?php }
    ?>
        
         <div class="form-check">
           <input class="form-check-input" type="radio" name="exampleRadios" id="rech" name="rech" checked>         
             <label class="form-check-label" for="exampleRadios1">
               Affichage de tous les animaux
             </label>          
        </div>
        
        
        <div class="cent">
          <button type="submit" class="btn btn-primary" name="po" id="po">Envoyer la requête</button>
          <button type="submit" onclick="location.href='index.php'" class="btn btn-primary">Réinitialiser</button>
        </div>  
          <p>(*)Informations obligatoires</p>
          
          <h3 class="text-success">Passage en mode admnisitrateur</h3>
          
          <div class="form-group centered">
           <div class="col-sm-3 my-1">
            <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Mot de passe">
           </div>
         </div>
          <div class="cent">
          <button type="submit" class="btn btn-primary" name="co" id="co">Connexion</button>
          <button type="submit" onclick="location.href='index.php'" class="btn btn-primary">Réinitialiser</button>
          </div>
        </form>
        <?php
         $liste = $bdd->prepare("SELECT animal.nom, generique.nom AS espece ,proprietaire.nom AS nom_proprio, proprietaire.prenom AS prenom FROM animal INNER JOIN proprietaire ON animal.id_proprietaire = proprietaire.id INNER JOIN generique ON animal.id_generique = generique.id ");
         $liste->execute(array($_POST['rech']));
        ?>
        <?php
    while($a = $liste->fetch()){ ?>
        <table class="table">
            <thead>
                 <tr>
      <th scope="col">Nom</th>
      <th scope="col">Generique</th>
      <th scope="col">Nom du propriétaire</th>
      <th scope="col">Prénom du propriétaire</th>
    </tr>
            </thead>
             <tbody>
        <tr>
    
    <td><?= $a['nom'] ?></td>
        <td><?= $a['espece'] ?></td>
        <td><?= $a['nom_proprio'] ?></td>
        <td><?= $a['prenom'] ?></td>
   
</tr>
        </tbody>
        </table>
        <?php }
    ?>
        <?php
         if(isset($erreur)){
             echo $erreur;
         }
        ?>
        
    </body>
</html>
