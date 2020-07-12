<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Regra de negócio e modelo");

require __DIR__ . "/source/autoload.php";
/*
 * [layer]
 */
fullStackPHPClassSession("layer", __LINE__);
$layer = new ReflectionClass(\Source\Models\Model::class);

dd($layer->getDefaultProperties());
dd($layer->getMethods());


/*
*[model]
*/
fullStackPHPClassSession("model", __LINE__);

$model = new \Source\Models\UserModel();
dd($model);
dd(get_class_methods($model));