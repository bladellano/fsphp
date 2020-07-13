<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Métodos de busca e leitura");

require __DIR__ . "/source/autoload.php";

/*
 * [load]
 */
fullStackPHPClassSession("load", __LINE__);
$model = new \Source\Models\UserModel();
$user = $model->load(1);

pp($user);
pp("{$user->first_name} {$user->last_name} ");

/*
 * [find]
 */
fullStackPHPClassSession("find", __LINE__);

$user = $model->find("eleno29@email.com.br");

pp($user);

/*
 * [all]
 */
fullStackPHPClassSession("all", __LINE__);
$all = $model->all(5);
/**@var \Source\Models\UserModel $user*/
foreach ($all as $user) {
    pp($user);
    pp("{$user->first_name} {$user->last_name}");
}