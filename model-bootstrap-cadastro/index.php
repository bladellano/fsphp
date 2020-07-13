<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Model bootstrap e cadastro");

require __DIR__ . "/source/autoload.php";
/*
 * 
 */
fullStackPHPClassSession("bootstrap", __LINE__);

$model = new \Source\Models\UserModel();
$user = $model->bootstrap(
    "Robson",
    "Leite",
    "cursos@upinside.com.br",
    12345678
);
$user->id = 10;
$user->created_at = date("Y/m/d H:i");

dd($user);