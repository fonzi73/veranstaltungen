<?php

include './config.php';
spl_autoload_register(function($class) {
    include './class/' . $class . '.php';
});
$term = isset($_GET['term']) ? trim($_GET['term']) : '';

if (!empty($term)) {

    $names = Ort::getClubByName($term);

    echo json_encode($names);
}