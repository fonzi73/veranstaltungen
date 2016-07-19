<?php

$rows = Veranstaltung::getAll();

?>
<table border="0" cellspacing="15" cellpadding="5" class="tableSorter" >
    <?php
    echo VeranstaltungHTML::buildTableContent($rows);
    ?>
</table>