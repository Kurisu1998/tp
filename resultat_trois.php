<?php
include("po.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Recherche</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="../css/tp.css" rel="stylesheet" />
    </head>
    <body>
        <?php
          $resultat = $reqnom->fetch();
          echo $resultat['id']." ".$resultat['nom'];
        ?>
    </body>
</html>

