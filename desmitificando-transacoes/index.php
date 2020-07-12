<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Desmitificando transações");

require __DIR__ . "/source/autoload.php";
/*
 * 
 */
use Source\Database\Connect;

fullStackPHPClassSession("transaction", __LINE__);

try {
    $pdo = Connect::getInstance();
    $pdo->beginTransaction();

    $pdo->query(
        "INSERT INTO users(first_name,last_name,email,document)
    VALUES ('Robson','Leite','cursos@upinside.com.br','123456')"
    );
    $userId = $pdo->lastInsertId();
    $pdo->query("
        INSERT INTO users_address(user_id,street,number,complement)
        VALUES('{$userId}','Rua da Up','3999','Sala 210')
    ");

    $pdo->commit();
    echo "<p class='trigger accept'>Cadastrado com sucesso!</p>";

}catch (PDOException $e){
    $pdo->rollBack();
    dd($e);
}