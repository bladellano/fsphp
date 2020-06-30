
<link rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<div class="container">
<?php


require __DIR__ . "/source/autoload.php";

echo '<pre>';
echo "<h1>Membro de uma classe</h1>";

echo "<h2>constantes</h2>";

use Source\Members\Config;
$config = new Config();

echo "<p>".$config::COMPANY."</p>";
#echo "<p>".Config::SECTOR."</p>";
#echo "<p>".Config::DOMAIN."</p>";

#var_dump($config);

$reflection = new ReflectionClass(Config::class);
#var_dump($reflection,get_class_methods($reflection));
var_dump($config,$reflection->getConstants());

echo "<h2>propriedades</h2>";

$config::$company = "Upinsde";
$config::$domain = "upinside.com.br";
$config::$sector = "Educação";

var_dump(
    $config,$reflection->getProperties(),
    $reflection->getDefaultProperties()
);


echo "<h2>métodos</h2>";

$config::setConfig("","","");
Config::setConfig("Upinside","upinside.com.br","Educação");

var_dump(
    $config,
    $reflection->getMethods(),
    $reflection->getDefaultProperties()
);

echo "<h2>métodos</h2>";
use Source\Members\Trigger;

$trigger = new Trigger();
$trigger::show("Um objeto trigger");

Trigger::show("Essa é uma mensagem para o usuário!",Trigger::ACCEPT);
Trigger::show("Essa é uma mensagem para o usuário!",Trigger::WARNING);
Trigger::show("Essa é uma mensagem para o usuário!",Trigger::ERROR);

echo  Trigger::push("Essa é uma mensagem para o usuário",Trigger::ACCEPT);

?>
</div>
