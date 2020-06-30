
<link rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<div class="container">
<?php

require __DIR__."/source/autoload.php";

echo '<pre>';
echo "<h1>Fundamentos de Abstração</h1>";

echo "<h2>superclasse</h2>";

$client = new \Source\App\User("Caio","Dellano");

//$account = new \Source\Bank\Account(
//    1600,
//    23345,
//    $client,
//    1000
//);


$saving = new \Source\Bank\AccountSaving(
    1600,
    23345,
    $client,
    0
);


var_dump(
   // $account,
    $client
);
echo '<hr>';

print_r($saving);

$saving->deposit(1000);
$saving->withdrawal(1000);
$saving->withdrawal(6);

$saving->extract();

?>
</div>
