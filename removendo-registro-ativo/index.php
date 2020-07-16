<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Removendo registro ativo");

require __DIR__ . "/source/autoload.php";
/*
 * [destroy]
 */
fullStackPHPClassSession("destroy", __LINE__);

$model = new \Source\Models\UserModel();

$user = $model->load(3);
if($user){
    $user->destroy();
}

dd($user);

/**
 * [model destroy]
 */
fullStackPHPClassSession("model destroy", __LINE__);


$list = $model->all(100,40);
if($list){
    /**@var \Source\Models\UserModel $user*/
    foreach ($list as $user) {
        dd($user);
        $user->destroy();
    }
}

#dump($list);







