<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Carregamento e atualização");

require __DIR__."/source/autoload.php";
/*
 * [save update] Salvar o usuário ativo (active record)
 */
fullStackPHPClassSession("save update", __LINE__);

$model = new \Source\Models\UserModel();
$user = $model->load(4);

$user->first_name = "Silvas";
//$user->last_name = "Gah";
//$user->email = "kaue@upinside.com.br";
//$user->save();

if($user != $model->load(4)){
    $user->save();
    echo "<p class='trigger warning'>Atualizado</p>";
} else {
    echo "<p class='trigger accept'>Já atualizado</p>";

}

dd($user);