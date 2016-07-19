<?php

$rows = Veranstaltung::getByLikeness($suchstring);

foreach (Ort::getAll() as $value) {
    if ($value->getNameort() == $suchstring) {
        $rows = Veranstaltung::getByOrtId($value->getId());
    }
}

?>
<table border="0" cellspacing="10" cellpadding="5" class="tableSorter">
    <?php
    echo VeranstaltungHTML::buildTableContent($rows);
    ?>
</table>
