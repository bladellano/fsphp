<?php

#require __DIR__."/source/autoload.php";
require __DIR__."/vendor/autoload.php";

$user = new \Source\Loading\User();
$address = new \Source\Loading\Address();
$company = new \Source\Loading\Company();

echo '<pre>';
var_dump(
    $user,
    $address,
    $company
);

$email = new \PHPMailer\PHPMailer\PHPMailer();

var_dump($email);