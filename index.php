<?php

error_reporting(E_ALL); // Report all errors
ini_set('display_errors', 1);

use App\App;

include "autoload.php";
include "web.php";

$app = new App();
echo $app->run();