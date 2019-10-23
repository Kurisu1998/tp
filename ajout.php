<?php

 $bdd = new PDO("mysql:host=localhost;dbname=bdpartiel","root","rootroot");

if(isset($_POST['ani']) && isset($_POST['gen']) && isset($_POST['pro']) && isset($_POST['prol'])){
     $ins = $bdd->prepare("INSERT INTO animal (`id`, `nom`, `photo`, `id_generique`, `id_proprietaire`) SELECT animal.id,animal.nom, generique.nom AS espece ,proprietaire.nom AS nom_proprio, proprietaire.prenom AS prenom FROM animal INNER JOIN proprietaire ON animal.id_proprietaire = proprietaire.id INNER JOIN generique ON animal.id_generique = generique.id WHERE animal.id = ? AND animal.nom = ?  AND generique.nom = ? AND proprietaire.nom = ? AND proprietaire.prenom = ? ");
     $ins->execute(array($_POST['ani'],$_POST['gen'],$_POST['pro'],$_POST['prol']));
}