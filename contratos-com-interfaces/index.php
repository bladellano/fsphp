<?php


require __DIR__."/../fullstackphp/fsphp.php";

fullStackPHPClassName("Contrato com interfaces");

require __DIR__."/source/autoload.php";

fullStackPHPClassSession("Implementação",__LINE__);
$user = new \Source\Contracts\User(
    "Caio",
    "Silva",
    "bladellano@gmail.com");

$admin = new \Source\Contracts\UserAdmin(
    "Robson",
    "Leite",
    "robsonvleite@upinside.com.br"
);
echo '<pre>';
var_dump($user);
echo '</pre>';

echo '<pre>';
var_dump($admin);
echo '</pre>';
