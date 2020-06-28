<?php

require __DIR__ . "/source/autoload.php";

echo '<pre>';
echo "<h2>__set</h2>";

$fsphp = new \Source\Interpretation\Product();
$fsphp->handler("Full Stack PHP Developer",1997);

$fsphp->name = "FSPHP";
$fsphp->title = "FSPHP";
$fsphp->value = 1997;
#$fsphp->price = 1997; //private

$fsphp->company = "Upinside";
echo "<h2>__get</h2>";

echo "<p>O curso {$fsphp->title} da {$fsphp->company} é o melhor curso de PHP do mercado.</p>";

#print_r($fsphp);

echo "<h2>__call</h2>";
$fsphp->notFound("Opss","teste");
$fsphp->setPrice(1997);

#print_r($fsphp);

echo "<h2>__toString</h2>";

echo $fsphp;

echo "<h2>__unset</h2>";

/*unset(
    $fsphp->name,
    $fsphp->price,
    $fsphp->data,
    $fsphp->title
);*/

#print_r($fsphp);

echo "<h2>__isset</h2>";

#isset($fsphp->phone);
#isset($fsphp->name);
empty($fsphp->address);

var_dump($fsphp);


