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
    "cursos@231wupinside.com.br",
    12345678
);
dd($user);

fullStackPHPClassSession("save create", __LINE__);

if(!$model->find($user->email)){
    echo "<p class='trigger warning'>Cadastro</p>";
    $user->save();
} else {
    echo "<p class='trigger accept'>Read</p>";
    $user = $model->find($user->email);
}

pp($user);
