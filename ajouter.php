<?php
include("ajout.php");
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
         <div class="form-group centered">
           <div class="col-sm-3 my-1">
            <input type="text" class="form-control" id="ani" name="ani" placeholder="Nom de l'animal">
           </div>
         </div>
            <div class="form-group centered">
             <div class="col-sm-3 my-1">
            <input type="text" class="form-control" id="gen" name="gen" placeholder="L'espèce">
           </div>
            </div>
            <div class="form-group centered">
             <div class="col-sm-3 my-1">
            <input type="text" class="form-control" id="pro" name="pro" placeholder="Nom du propirétaire">
           </div>
         </div>
             <div class="form-group centered">
             <div class="col-sm-3 my-1">
            <input type="text" class="form-control" id="prol" name="prol" placeholder="Prenom du propirétaire">
           </div>
         </div>
          <div class="cent">
          <button type="submit" class="btn btn-primary" name="lo" id="lo">Ajouter</button>
          <button type="submit" onclick="location.href='ajouter.php'" class="btn btn-primary">Réinitialiser</button>
          </div>
        </form>
        
    </body>
</html>