<?php

$rows = Veranstaltung::getByLikeness($suchstring);
?>
<table border="0" cellspacing="10" cellpadding="5" class="tableSorter">
    <?php
    echo VeranstaltungHTML::buildTableContent($rows);
    ?>
</table>
