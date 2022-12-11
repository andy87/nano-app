<?php

use \Exception;

const ROOT = __DIR__;

try {

    $x = 1/0;

    include ROOT . "/vendor/autoload.php";

    framework\Nano::init([
        require ROOT . "/config/common.php",
        require ROOT . "/config/web.php"
    ])->run();

} catch ( Exception $e ) {

    echo $e->getMessage();
}
