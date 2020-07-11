<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Comportamentos com traits");

require __DIR__."/source/autoload.php";
/*
 * 
 */
fullStackPHPClassSession("trait", __LINE__);

$user = new \Source\Traits\User("Robson","Leite","contato@upinside.com.br");
$address = new \Source\Traits\Address("Rua dos anjos","3339","Casa 19");


$register = new \Source\Traits\Register(
    $user,
    $address
);

dd($register);
dd($register->getUser());
dd($register->getAddress());
dd($register->getUser()->getFirstName());
//var_dump(
//    $register,
//    $register->getUser(),
//    $register->getAddress(),
//    $register->getUser()->getFirstName()
//);
$cart = new \Source\Traits\Cart();
$cart->add(1,"Full Stack PHP Developer",1,2000);
$cart->add(2,"Laravel Developer",2,1000);
$cart->add(3,"WS PHP",5,500);

$cart->remove(3,1);

$cart->checkout($user,$address);

dd($cart);

