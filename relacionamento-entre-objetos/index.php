<?php

require __DIR__ . "/source/autoload.php";

use \Source\Related\Product;

echo '<pre>';
echo "<h1>Relacionamento entre objetos</h1>";

echo "<h2>associação</h2>";
$company = new \Source\Related\Company();
$company->bootCompany(
    "Upinside",
    "Rua João"
);

print_r($company);
echo "<hr>";
$company->boot(
    "Upinside",
    new \Source\Related\Address("Dr Antonio Luiz Moura Gonzaga", 3339, "Seduc ao lado")
);

print_r($company);
echo "<p>A {$company->getCompany()} tem sede na rua {$company->getAdresss()->getStrees()}</p>";

echo "<h2>agregação</h2>";
$fsphp = new \Source\Related\Product("Full Stack PHP", 1997);
$laradev = new \Source\Related\Product("Laravel Developer", 1997);

var_dump(
    $fsphp,
    $laradev,
    new Product("Work Control Dev",998)
);

$company->addProduct($fsphp);
$company->addProduct($laradev);

echo "<hr>";
var_dump($company);
echo "<hr>";
/**
 * @var Product $product
*/
foreach ($company->getProducts() as $product) {
    echo "<p>{$product->getName()} por {$product->getPrice()}</p>";
}

echo "<h2>composição</h2>";

$company->addTeamMember("CEO","Robson","Leite");
$company->addTeamMember("Manager","Kaue","Cardoso");
$company->addTeamMember("Support","Gah","Morandi");
$company->addTeamMember("Producer","Gustavo","Santos");
$company->addTeamMember("Designer","João","Armando");

/**
 * @var \Source\Related\User $member
*/
foreach ($company->getTeam() as $member) {
    echo "<p>{$member->getJob()}: {$member->getFirstName()} {$member->getLasName()}</p>";
}

