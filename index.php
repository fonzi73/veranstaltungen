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
//wurde das suchformular ausgefüllt?
$sent = isset($_POST['sent']) ? $_POST['sent'] : '';
$suchstring = isset($_POST['suchstring']) ? $_POST['suchstring'] : '';
if ($sent && $suchstring) {
    echo "<h2>gefundene Veranstaltungen</h2>";
    $anzeige = 'suche'; 
}
// Eingabeformular
$insertsent = isset($_POST['insertsent']) ? $_POST['insertsent'] : '';
$vaName = isset($_POST['vaName']) ? $_POST['vaName'] : '';
$vaOrt = isset($_POST['vaOrt']) ? $_POST['vaOrt'] : '';
$vaDatum = isset($_POST['vaDatum']) ? $_POST['vaDatum'] : '';
$vaUhrzeit = isset($_POST['vaUhrzeit']) ? $_POST['vaUhrzeit'] : '';
$vaBeschreibung = isset($_POST['vaBeschreibung']) ? $_POST['vaBeschreibung'] : '';
$vaGenre = isset($_POST['vaGenre']) ? $_POST['vaGenre'] : '';
$vaPreis = isset($_POST['vaPreis']) ? $_POST['vaPreis'] : '';

if ($insertsent && $vaName && $vaBeschreibung) {
    echo '<h2>VA eintragen</h2>';
    Veranstaltung::insert(new Veranstaltung($vaName, $vaOrt, $vaDatum, 
            $vaUhrzeit, $vaBeschreibung, $vaGenre, $vaPreis));
    $anzeige = 'veranstaltungAnzeigen';
}

include './anzeige/' . $anzeige . '.php';
include './anzeige/end.php';


?>
  
