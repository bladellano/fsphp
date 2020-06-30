<?php

require __DIR__."/source/autoload.php";

echo '<pre>';
echo "<h1>Herança e Polimorfismo</h1>";

$event = new \Source\Inheritance\Event\Event(
    "Workshop FSPHP",
    new DateTime("2020-06-30 16:00"),
    2500,
    4
);

print_r($event);

$event->register("Robson Leite","curso@upinside.com.br");
$event->register("Kaue","curso@upinside.com.br");
$event->register("Gah","curso@upinside.com.br");
$event->register("Gustavo","curso@upinside.com.br");
$event->register("João","curso@upinside.com.br");

echo "<hr>";

$address = new \Source\Inheritance\Address("Rua Dois de Junho",200);
$event = new \Source\Inheritance\Event\EventLive(
    "Workshop FSPHP",
    new DateTime("2020-06-30 16:00"),
    2500,
    4,
    $address
);

print_r($event);

$event->register("Robson Leite","curso@upinside.com.br");
$event->register("Kaue","curso@upinside.com.br");
$event->register("Gah","curso@upinside.com.br");
$event->register("Gustavo","curso@upinside.com.br");
$event->register("João","curso@upinside.com.br");
echo "<hr>";
echo "<h1>Polimorfismo</h1>";

$event = new \Source\Inheritance\Event\EventOnline(
    "Workshop FSPHP",
    new DateTime("2020-06-30 16:00"),
    2500,
    "http://upinside.com.br/aovivo"

);

print_r($event);

$event->register("Robson Leite","curso@upinside.com.br");
$event->register("Kaue","curso@upinside.com.br");
$event->register("Gah","curso@upinside.com.br");
$event->register("Gustavo","curso@upinside.com.br");
$event->register("João","curso@upinside.com.br");



