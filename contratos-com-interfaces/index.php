<?php

echo '<pre>';
require __DIR__."/source/autoload.php";

echo 'Implementação LINE: ', __LINE__,PHP_EOL;
$user = new \Source\Contracts\User(
    "Caio",
    "Silva",
    "bladellano@gmail.com");

$admin = new \Source\Contracts\UserAdmin(
    "Robson",
    "Leite",
    "robsonvleite@upinside.com.br"
);
var_dump($user,$admin);
echo '<hr/>';

echo 'Associção LINE: ', __LINE__,PHP_EOL;
echo '<hr/>';


echo 'Dependência LINE: ', __LINE__,PHP_EOL;
echo '<hr/>';