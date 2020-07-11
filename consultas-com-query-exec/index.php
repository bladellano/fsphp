<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Consulta com query e exec");

require __DIR__ . "/source/autoload.php";
use Source\Database\Connect;
/*
 * 
 */
fullStackPHPClassSession("insert", __LINE__);

$insert = "
INSERT INTO users(first_name,last_name,email,document) 
VALUES ('Robson','Leite','cursos@upinside.com.br','12345667')
";

try{
    #$exec = Connect::getInstance()->exec($insert);
    #var_dump(Connect::getInstance()->lastInsertId());
    $query = Connect::getInstance()->query($insert);
    var_dump(Connect::getInstance()->lastInsertId());
    $exec = null;

    var_dump($exec);
    dd($query->errorInfo());

}catch (PDOException $e){
    dd($e);
}
/**
 * select dados
 */
fullStackPHPClassSession("select", __LINE__);

try{
    $query = Connect::getInstance()->query("SELECT * FROM users LIMIT 2");
    dd($query);
    dd($query->rowCount());
    dd($query->fetchAll());

}catch (PDOException $e){
    var_dump($e);
}

/**
 * update dados
 */
fullStackPHPClassSession("update", __LINE__);
try{
    $exec = Connect::getInstance()->exec(
        "UPDATE users SET first_name = 'Francisco',last_name='Cardoso' WHERE id= '53'");
    var_dump($exec);

}catch (PDOException $e){
    var_dump($e);
}

/**
 * deleta dados
 */
fullStackPHPClassSession("delete", __LINE__);

try{
    $exec = Connect::getInstance()->exec(
        "DELETE FROM users WHERE id > 50");
    var_dump($exec);
}catch (PDOException $e){
    var_dump($e);
}