<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Explorando estilos de busca");

require __DIR__ . "/source/autoload.php";

use Source\Database\Connect;
/*
 * [fetch]
 */
fullStackPHPClassSession("fetch", __LINE__);

$connect = Connect::getInstance();

$read = $connect->query("SELECT * FROM users LIMIT 3");

if(!$read->rowCount()){
    echo "<p class='trigger warning'>Não obteve resultados.</p>";
} else {
    #dd($read->fetch());
    while ($user = $read->fetch()){
        dd($user);
    }
}

fullStackPHPClassSession("fetchAll", __LINE__);

$read = $connect->query("SELECT * FROM users LIMIT 3,2");

/*while($user = $read->fetchAll()){
    pp($user);
}*/

foreach ($read->fetchAll() as $user) {
    pp($user);
}

fullStackPHPClassSession("fetch save", __LINE__);

$read = $connect->query("SELECT * FROM users LIMIT 5,1");

$result = $read->fetchAll();

pp($read->fetchAll());
pp($result);

fullStackPHPClassSession("fetch styles", __LINE__);

$read = $connect->query("SELECT * FROM users LIMIT 1");
foreach ($read->fetchAll() as $user) {
    pp($user->first_name);
}

$read = $connect->query("SELECT * FROM users LIMIT 1");
foreach ($read->fetchAll(PDO::FETCH_NUM) as $user) {
    pp($user);
}

$read = $connect->query("SELECT * FROM users LIMIT 1");
foreach ($read->fetchAll(PDO::FETCH_ASSOC) as $user) {
    pp($user);
}

$read = $connect->query("SELECT * FROM users LIMIT 1");
foreach ($read->fetchAll(PDO::FETCH_CLASS,\Source\Database\Entity\UserEntity::class
) as $user) {

    /* @var Source\Database\Entity\UserEntity $user */
    dd($user->getFirstName());

}









