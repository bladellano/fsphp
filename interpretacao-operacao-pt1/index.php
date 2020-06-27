<?php

require __DIR__."/source/autoload.php";

$user = new \Source\Interpretation\User(
    "Caio",
    "Dellano",
    "bladellano@gmail.com");

//var_dump($user);
$robson = $user;

$kaue = $robson;
$kaue->setFirsName("kaue");
$kaue->setLastName("Cardoso");

$robson->setLastName("Robson");
$robson->setLastName("Leite");

$kaue = clone $robson;
//$kaue->setLastName("Kaue");
//$kaue->setLastName("Cardoso");

echo '<pre>';
var_dump(
    $robson,
    $kaue
);