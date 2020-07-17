<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Configuração do projeto");

require __DIR__."/source/autoload.php";
/*
 * [configurações]
 */
fullStackPHPClassSession("configurações", __LINE__);

dd(get_defined_constants(true)['user']);
/*
 * [refatoramento]
 */
fullStackPHPClassSession("refatoramento", __LINE__);

use Source\Core\Connect;

$read = Connect::getInstance()->prepare("SELECT * FROM users LIMIT 1,1");
$read->execute();
dd($read->fetchAll());

use Source\Models\User;

$user = (new User())->load(1);
dd($user);
