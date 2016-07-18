<?php

$rows = Veranstaltung::getAll();

?>
<table border="0" cellspacing="20" cellpadding="5">
    <?php
    echo VeranstaltungHTML::buildTableContent($rows);
    ?>
</table>