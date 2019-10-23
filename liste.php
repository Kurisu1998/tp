<?php
include("po.php");
?>
<ul>
    <?php
    while($a = $liste->fetch()){ ?>
    <li><?= $a['nom'] ?></li>
   <?php }
    ?>
</ul>
