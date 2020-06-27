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

print_r($fsphp);
