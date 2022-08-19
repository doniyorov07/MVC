<?php

include dirname(__DIR__).'/config/init.php';

include LIBS.'/function.php';


use mvc\App;

use mvc\core\Registry;


$app = new App;

$app::$app->setProperty('doniyorov.uz', '20');

debug($app::$app->getProperty());


?>