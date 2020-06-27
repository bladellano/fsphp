<?php

var_dump($_COOKIE);
setcookie("fsphp","Este é meu cookie!",time()+10);

/*
$dataFilter = http_build_query([
    "name"=>"Robson",
    "company"=>"Upinside",
    "mail"=>"curso@upinside.com.br",
    "site"=>"http://upinside.com.br",
    "script"=>"<script>alert('Essé o um javascript')</script>"
]);

$dataPreFilter = [
    "name"=>FILTER_SANITIZE_STRING,
    "company"=>FILTER_SANITIZE_STRING,
    "mail"=>FILTER_VALIDATE_EMAIL,
    "site"=>FILTER_VALIDATE_URL,
    "script"=>FILTER_SANITIZE_STRING
];

parse_str($dataFilter,$arrDataFilter);

var_dump(filter_var_array($arrDataFilter,$dataPreFilter));
*/

/*
<form action="" novalidate></form>
*/

/*
var_dump(filter_list());
*/

/*
$postArray = filter_input_array(INPUT_POST,FILTER_DEFAULT);

*/

/*
define("DS",DIRECTORY_SEPARATOR);

$dirRemove = __DIR__."/remove";
$dirFiles = array_diff(scandir($dirRemove),['.','..']);

$dirCount = count($dirFiles);

if($dirCount >= 1){

    echo "<h2>Clear...</h2>";

    foreach(($dirFiles) as $fileItem){
        $fileItem = $dirRemove.DS.$fileItem;
        if(file_exists($fileItem) && is_file($fileItem)){
            unlink($fileItem);
        }
    }
} else {

    rmdir($dirRemove);
    echo "Content folder is not found";
}
*/

/*
$folder = __DIR__ . "/upload";
if (!file_exists($folder) || !is_dir($folder)) {
    mkdir($folder, 0755);
} else {
    #var_dump(scandir($folder));
}

$file = __DIR__ . "/file.txt";

var_dump(
    pathinfo($file),
    scandir($folder),
    scandir(__DIR__)
);

if (!file_exists($file) || !is_file($file)) {
    fopen($file, "w");#"w"se não existir, cria.
} else {
    copy($file, $folder . "/" . basename($file));
}
*/

/*
date_default_timezone_set('America/Belem');
define("DATE_BR", "d-m-Y H:m:s");

$start = new DateTime('now');
$interval = new DateInterval("P1M");
$end = new DateTime("2021-01-01");

$period = new DatePeriod($start, $interval, $end);

var_dump([
    $start->format(DATE_BR),
    $interval,
    $end->format(DATE_BR)
], $period, get_class_methods($period));

echo "<h1>Sua assinatura</h1>";

foreach($period as $recurrences){
    echo "<p>Próximo vencimento {$recurrences->format(DATE_BR)}</p>";
}
*/


/*
print_r([
    date_default_timezone_get(),
    date(DATE_W3C),
    ]);
*/

/*
$date = new PDOException();

print_r([
    "class"=> get_class($date),
    "methods"=>get_class_methods($date),
    "vars"=>get_object_vars($date),
    "parent"=>get_parent_class($date),
    "subclass"=>is_subclass_of($date),
    ]);
    */
    
    /*
$profile = [
    "name"=>"Robson",
    "company"=>"UpInside",
    "mail"=>"curso@upinside.com.br"
];

$template = <<<TPL
    <article>
    <h1>{{name}}</h1>
    <p>{{company}}</p>
    <a href="mailto:{{mail}}" title="Enviar e-mail para {{name}}">Envia E-mail</a></p>
    </article>
TPL;

$replaces = "{{".implode("}}&{{", array_keys($profile))."}}";

echo str_replace(
    explode("&",$replaces),
    array_values($profile),
    $template
);
*/


/*
$mbString = "ac/dc";

print_r([
"mb_strtoupper"=>mb_strtoupper($mbString),
"mb_convert_case"=>mb_convert_case($mbString,MB_CASE_UPPER),
]);
*/


/*

$myCart = [];

$myCart["totalPrice"] = 0;

$cardAdd = function ($item, $qtd, $price) use(&$myCart){
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];
};
$cardAdd('HTML5',1,497);
$cardAdd('jQuery',2,492);
var_dump($myCart, $cardAdd);
*/


/*
$interator = 10;

function generatorDate($days)
{
    for($day=1;$day < $days; $day++){
        yield date("d/m/Y",strtotime("+{$day}days"));
    }
}

foreach(generatorDate($interator) as $date){
    echo $date . PHP_EOL;
}
*/

/*
print_r(get_defined_functions(true));
*/

/*
$mbReplace = "Lorem ipsumro laboriosam a suscipore officiis ipsum.";
$article = <<<ROCK
<article>
<h3>event</h3>
<p>desc</p>
ROCK;

$articleData = [
    'event'=>'Rock in Rio',
    'desc'=>$mbReplace
];

echo str_replace(array_keys($articleData),array_values($articleData),$article);

*/