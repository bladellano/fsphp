<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Erros, conexão e execução");

/*
 * 
 */
fullStackPHPClassSession("controle de erros", __LINE__);

//try {
// throw new Exception('Exception');
//}catch(Exception $e){
//echo "<p class='trigger error'>{$e->getMessage()}</p>";
//}

try {
    #throw new Exception('Exception');
    #throw new PDOException('PDOException');
    throw new ErrorException('ErrorException');
}catch(PDOException | ErrorException $e){
    dd($e);
} catch (Exception $e){
    dd($e);
} finally {
    echo "<p class='trigger'>Execução terminou!</p>";
}

fullStackPHPClassSession("php data object", __LINE__);

try{
$pdo = new PDO(
    "mysql:host=localhost;dbname=fullstackphp",
    "root",
    "root",
    [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ]
);

#var_dump($pdo);
$stmt = $pdo->query("SELECT * FROM users LIMIT 3");
while($user = $stmt->fetch(PDO::FETCH_ASSOC)){
    dd($user);
}
}catch (PDOException $e){
    dd($e);
}

fullStackPHPClassSession("conexão com singleton", __LINE__);

require __DIR__."/source/autoload.php";

use Source\Database\Connect;

$pdo1 = Connect::getInstance();
$pdo2 = Connect::getInstance();

echo '<pre>';
var_dump(
    $pdo1,
    $pdo2::getAvailableDrivers()
);


