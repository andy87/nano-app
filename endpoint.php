<?php

const ROOT = __DIR__;

try {

    include ROOT . "/vendor/autoload.php";

    framework\Nano::init([
        require ROOT . "/config/common.php",
        require ROOT . "/config/web.php"
    ])->run();

} catch ( Exception $e ) {

    echo 'Nano `fatal` error :' . $e->getMessage();
}
