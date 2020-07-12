<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("PDOStatement e bind modes");

require __DIR__ . "/source/autoload.php";

use Source\Database\Connect;

/*
 * [prepare]
 */
fullStackPHPClassSession("prepared statement", __LINE__);

$search = filter_input(INPUT_GET,"qs");
dd($search);

/*$stmt = Connect::getInstance()->prepare("
SELECT * FROM users WHERE i d = 50 {$search}
");*/

$stmt = Connect::getInstance()->prepare("
SELECT * FROM users LIMIT 1
");

$stmt->execute();
pp($stmt);
pp($stmt->rowCount());
pp($stmt->columnCount());
pp($stmt->fetchAll());
/*
 * [bind value]
 */
fullStackPHPClassSession("stmt bind value", __LINE__);

/*$stmt = Connect::getInstance()->prepare("
SELECT * FROM users WHERE id = :id
");
$stmt->bindValue("id",50,PDO::PARAM_INT);
$stmt->execute();

dd($stmt->fetch());*/

$stmt = Connect::getInstance()->prepare("
    INSERT INTO users (first_name,last_name)
    VALUES (?,?)
");

$stmt->bindValue(1,'Gustavo',PDO::PARAM_STR);
$stmt->bindValue(2,'Web',PDO::PARAM_STR);

$stmt->execute();
dd($stmt->rowCount());
dd(Connect::getInstance()->lastInsertId());

$stmt = Connect::getInstance()->prepare("
    INSERT INTO users (first_name,last_name)
    VALUES (:fn,:ln)
");

$stmt->bindValue(':fn','Gustavo',PDO::PARAM_STR);
$stmt->bindValue(':ln','Web',PDO::PARAM_STR);
$stmt->execute();
dd($stmt->rowCount());

/*
 * [prepare]
 */
fullStackPHPClassSession("stmt bind param", __LINE__);

$stmt = Connect::getInstance()->prepare("
    INSERT INTO users (first_name,last_name)
    VALUES (:fn,:ln)
");
$firstName = 'Gah';
$lastName = 'Morandi';

$stmt->bindParam(':fn',$firstName,PDO::PARAM_STR);
$stmt->bindParam(':ln',$lastName,PDO::PARAM_STR);
$stmt->execute();
dd($stmt->rowCount());
/*
 * [prepare]
 */
fullStackPHPClassSession("stmt execute array", __LINE__);

$stmt = Connect::getInstance()->prepare("
    INSERT INTO users (first_name,last_name)
    VALUES (:fn,:ln)
");

$user = [
    "fn"=>'Kaue',
    "ln"=>'Cardoso'
];

$stmt->execute($user);

$lastId = Connect::getInstance()->lastInsertId();
pp($lastId);

fullStackPHPClassSession("bind column", __LINE__);

$stmt = Connect::getInstance()->prepare("
SELECT * FROM users LIMIT 3
");
$stmt->execute();

$stmt->bindColumn("first_name",$name);
$stmt->bindColumn("email",$email);

/*foreach ($stmt->fetchAll() as $user){
    pp($user);
    echo "O e-mail {$name} é {$email}";
}*/

while($user = $stmt->fetch()){
    pp($user);
    echo "O email de {$name} é {$email}";
}