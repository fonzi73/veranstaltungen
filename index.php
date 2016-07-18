<?php

include './config.php';
spl_autoload_register(function($class) {
    include './class/' . $class . '.php';
});
include './anzeige/begin.php';

$navigation = isset($_GET['navi']) ? $_GET['navi'] : '0';
$anzeige = 'default';
switch ($navigation) {
    case "0":
        echo "<h2>Willkommen auf dem Veranstaltungskalender</h2>";
        break;
    case "1":
        echo "<h2>Hier eine Auflistung von Veranstaltungen</h2>";
        $anzeige = 'veranstaltungAnzeigen';
        break;
    case "2":
        echo "<h2>Tragen Sie Ihre Veranstaltung hier ein</h2>";
        $anzeige = 'veranstaltungEintragen';
        break;
    default:
        break;
}

include './anzeige/' . $anzeige . '.php';
include './anzeige/end.php';
?>
                