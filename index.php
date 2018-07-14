<?php 

require_once 'vendor/autoload.php';

$row = $_GET["row"];
$seniors = file_get_contents("./seniors.json");
$json_a = json_decode($seniors, true);

// print_r($json_a[$row]);

// exit;

// foreach ($json_a as $person_name => $person_a) {
//     echo $person_a['status'];
// }


$loader = new Twig_Loader_Filesystem('./');
$twig = new Twig_Environment($loader);

echo $twig->render('senior.twig', $json_a[$row]);

 ?>